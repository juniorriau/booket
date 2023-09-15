<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hargatiket extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        parent::_auth($this->uri->uri_string());
        $this->sess = $this->session->logged_in;
        $this->rolelist = $this->sess['rolelist'][ucfirst($this->uri->segment(2))];
        $this->load->model('Hargatiket_model');
        $this->load->model('Perusahaan_model');
        $this->load->model('Kelas_model');
        $this->load->model('Rute_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $where = "";
        if ($this->sess['rolename'] == "Administrator") {
            $where = " p.id > 0";
        } else {
            $where = " p.id=" . $this->sess['perusahaanid'];
        }
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'app/hargatiket/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'app/hargatiket/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'app/hargatiket/index';
            $config['first_url'] = base_url() . 'app/hargatiket/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Hargatiket_model->total_rows($where, $q);
        $hargatiket = $this->Hargatiket_model->get_limit_data($config['per_page'], $where, $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'hargatiket_data' => $hargatiket,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'hargatiket/hargatiket_list',
            'extracss' => '',
            'extrajs' => '',
        );
        $this->load->view('base/content', $data);
    }

    public function create()
    {
        $perusahaan = '';
        $rutelist = '';
        if ($this->sess['rolename'] != 'Administrator') {
            $perusahaan = $this->Perusahaan_model->get_by_id($this->sess['perusahaanid']);
            $rutelist= $this->Rute_model->get_by_perusahaan($this->sess['perusahaanid']);
        } else {
            $perusahaan = $this->Perusahaan_model->get_all();
            $rutelist = $this->Rute_model->get_all();
        }
        $kelas = $this->Kelas_model->get_all();

        $data = array(
            'button' => 'Create',
            'action' => site_url('app/hargatiket/create_action'),
            'id' => set_value('id'),
            'jenistiket' => set_value('jenistiket'),
            'rute' => set_value('rute'),
            'perusahaan' => set_value('perusahaan'),
            'harga' => set_value('harga'),
            'createdat' => set_value('createdat'),
            'createdby' => set_value('createdby'),
            'updatedat' => set_value('updatedat'),
            'updatedby' => set_value('updatedby'),
            'perusahaanlist' => $perusahaan,
            'kelas' => $kelas,
            'rutelist'=>$rutelist,
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'hargatiket/hargatiket_form',
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
                'jenistiket' => $this->input->post('jenistiket', TRUE),
                'perusahaan' => $this->input->post('perusahaan', TRUE),
                'harga' => $this->input->post('harga', TRUE),
                'rute'=>$this->input->post('rute',TRUE),
                'createdat' => date('Y-m-d H:i:s'),
                'createdby' => $this->sess['id'],
                'updatedat' => date('Y-m-d H:i:s'),
                'updatedby' => $this->sess['id'],
            );

            $this->Hargatiket_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('app/hargatiket'));
        }
    }

    public function update($id)
    {
        $row = $this->Hargatiket_model->get_by_id($id);
        $perusahaan = '';
        $rutelist = '';
        if ($this->sess['rolename'] != 'Administrator') {
            $perusahaan = $this->Perusahaan_model->get_by_id($this->sess['perusahaanid']);
            $rutelist= $this->Rute_model->get_by_perusahaan($this->sess['perusahaanid']);
        } else {
            $perusahaan = $this->Perusahaan_model->get_all();
            $rutelist = $this->Rute_model->get_all();
        }
        $kelas = $this->Kelas_model->get_all();
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('app/hargatiket/update_action'),
                'id' => set_value('id', $row->id),
                'jenistiket' => set_value('jenistiket', $row->jenistiket),
                'perusahaan' => set_value('perusahaan', $row->perusahaan),
                'harga' => set_value('harga', $row->harga),
                'rute'=>set_value('rute',$row->rute),
                'createdat' => set_value('createdat', $row->createdat),
                'createdby' => set_value('createdby', $row->createdby),
                'updatedat' => set_value('updatedat', $row->updatedat),
                'updatedby' => set_value('updatedby', $row->updatedby),
                'perusahaanlist' => $perusahaan,
                'kelas' => $kelas,
                'rutelist'=>$rutelist,
                'session' => $this->sess,
                'rolelist' => $this->rolelist,
                'template' => 'hargatiket/hargatiket_form',
                'extracss' => '',
                'extrajs' => '',
            );
            $this->load->view('base/content', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/hargatiket'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'jenistiket' => $this->input->post('jenistiket', TRUE),
                'perusahaan' => $this->input->post('perusahaan', TRUE),
                'harga' => $this->input->post('harga', TRUE),
                'rute'=>$this->input->post('rute',TRUE),
                'createdat' => date('Y-m-d H:i:s'),
                'createdby' => $this->sess['id'],
                'updatedat' => date('Y-m-d H:i:s'),
                'updatedby' => $this->sess['id'],
            );

            $this->Hargatiket_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('app/hargatiket'));
        }
    }

    public function delete($id)
    {
        $row = $this->Hargatiket_model->get_by_id($id);

        if ($row) {
            $this->Hargatiket_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('app/hargatiket'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/hargatiket'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('jenistiket', 'jenistiket', 'trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('harga', 'harga', 'trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('rute','rute','trim|required|numeric|xss_clean');
        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Hargatiket.php */
/* Location: ./application/controllers/Hargatiket.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-14 14:19:59 */
/* http://harviacode.com */