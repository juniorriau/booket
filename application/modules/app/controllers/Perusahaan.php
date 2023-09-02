<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Perusahaan extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        parent::_auth($this->uri->uri_string());
        $this->sess = $this->session->logged_in;
        $this->rolelist = $this->sess['rolelist'][ucfirst($this->uri->segment(2))];
        $this->load->model('Perusahaan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'app/perusahaan/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'app/perusahaan/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'app/perusahaan/index';
            $config['first_url'] = base_url() . 'app/perusahaan/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Perusahaan_model->total_rows($q);
        $perusahaan = $this->Perusahaan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'perusahaan_data' => $perusahaan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'perusahaan/perusahaan_list',
            'extracss' => '',
            'extrajs' => '',
        );
        $this->load->view('base/content', $data);
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('app/perusahaan/create_action'),
            'id' => set_value('id'),
            'namaperusahaan' => set_value('namaperusahaan'),
            'alamat' => set_value('alamat'),
            'penanggungjawab' => set_value('penanggungjawab'),
            'nomorpenanggungjawab' => set_value('nomorpenanggungjawab'),
            'telepon' => set_value('telepon'),
            'createdat' => set_value('createdat'),
            'createdby' => set_value('createdby'),
            'updatedat' => set_value('updatedat'),
            'updatedby' => set_value('updatedby'),
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'perusahaan/perusahaan_form',
            'extracss' => '',
            'extrajs' => '',
        );
        $this->load->view('base/content', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'namaperusahaan' => $this->input->post('namaperusahaan', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'penanggungjawab' => $this->input->post('penanggungjawab', TRUE),
                'nomorpenanggungjawab' => $this->input->post('nomorpenanggungjawab', TRUE),
                'telepon' => $this->input->post('telepon', TRUE),
                'createdat' => date('Y-m-d H:i:s'),
                'createdby' => $this->sess['id'],
                'updatedat' => date('Y-m-d H:i:s'),
                'updatedby' => $this->sess['id'],
            );

            $this->Perusahaan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('app/perusahaan'));
        }
    }

    public function update($id)
    {
        $row = $this->Perusahaan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('app/perusahaan/update_action'),
                'id' => set_value('id', $row->id),
                'namaperusahaan' => set_value('namaperusahaan', $row->namaperusahaan),
                'alamat' => set_value('alamat', $row->alamat),
                'penanggungjawab' => set_value('penanggungjawab', $row->penanggungjawab),
                'nomorpenanggungjawab' => set_value('nomorpenanggungjawab', $row->nomorpenanggungjawab),
                'telepon' => set_value('telepon', $row->telepon),
                'createdat' => set_value('createdat', $row->createdat),
                'createdby' => set_value('createdby', $row->createdby),
                'updatedat' => set_value('updatedat', $row->updatedat),
                'updatedby' => set_value('updatedby', $row->updatedby),
                'session' => $this->sess,
                'rolelist' => $this->rolelist,
                'template' => 'perusahaan/perusahaan_form',
                'extracss' => '',
                'extrajs' => '',
            );
            $this->load->view('base/content', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/perusahaan'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'namaperusahaan' => $this->input->post('namaperusahaan', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'penanggungjawab' => $this->input->post('penanggungjawab', TRUE),
                'nomorpenanggungjawab' => $this->input->post('nomorpenanggungjawab', TRUE),
                'telepon' => $this->input->post('telepon', TRUE),
                'updatedat' => date('Y-m-d H:i:s'),
                'updatedby' => $this->sess['id'],
            );

            $this->Perusahaan_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('app/perusahaan'));
        }
    }

    public function delete($id)
    {
        $row = $this->Perusahaan_model->get_by_id($id);

        if ($row) {
            $this->Perusahaan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('app/perusahaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/perusahaan'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('namaperusahaan', 'namaperusahaan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required|xss_clean');
        $this->form_validation->set_rules('penanggungjawab', 'penanggungjawab', 'trim|required|xss_clean');
        $this->form_validation->set_rules('nomorpenanggungjawab', 'nomorpenanggungjawab', 'trim|required|xss_clean');
        $this->form_validation->set_rules('telepon', 'telepon', 'trim|required|numeric|xss_clean');

        $this->form_validation->set_rules('id', 'id', 'trim|xss_clean');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Perusahaan.php */
/* Location: ./application/controllers/Perusahaan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */