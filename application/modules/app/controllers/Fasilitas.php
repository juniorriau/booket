<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Fasilitas extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        parent::_auth($this->uri->uri_string());
        $this->sess = $this->session->logged_in;
        $this->rolelist = $this->sess['rolelist'][ucfirst($this->uri->segment(2))];
        $this->load->model('Fasilitas_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));

        if ($q <> '') {
            $config['base_url'] = base_url() . 'app/fasilitas/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'app/fasilitas/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'app/fasilitas/index';
            $config['first_url'] = base_url() . 'app/fasilitas/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Fasilitas_model->total_rows($q);
        $fasilitas = $this->Fasilitas_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'fasilitas_data' => $fasilitas,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'fasilitas/fasilitas_list',
            'extracss' => '',
            'extrajs' => '',
        );
        $this->load->view('base/content', $data);
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('app/fasilitas/create_action'),
            'id' => set_value('id'),
            'fasilitas' => set_value('fasilitas'),
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'fasilitas/fasilitas_form',
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
                'fasilitas' => $this->input->post('fasilitas', TRUE),
            );

            $this->Fasilitas_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('app/fasilitas'));
        }
    }

    public function update($id)
    {
        $row = $this->Fasilitas_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('app/fasilitas/update_action'),
                'id' => set_value('id', $row->id),
                'fasilitas' => set_value('fasilitas', $row->fasilitas),
                'session' => $this->sess,
                'rolelist' => $this->rolelist,
                'template' => 'fasilitas/fasilitas_form',
                'extracss' => '',
                'extrajs' => '',
            );
            $this->load->view('base/content', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/fasilitas'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'fasilitas' => $this->input->post('fasilitas', TRUE),
            );

            $this->Fasilitas_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('app/fasilitas'));
        }
    }

    public function delete($id)
    {
        $row = $this->Fasilitas_model->get_by_id($id);

        if ($row) {
            $this->Fasilitas_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('app/fasilitas'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/fasilitas'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('fasilitas', 'fasilitas', 'trim|required|xss_clean');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Fasilitas.php */
/* Location: ./application/controllers/Fasilitas.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 13:25:51 */
/* http://harviacode.com */