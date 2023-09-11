<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jenisarmada extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        parent::_auth($this->uri->uri_string());
        $this->sess = $this->session->logged_in;
        $this->rolelist = $this->sess['rolelist'][ucfirst($this->uri->segment(2))];
        $this->load->model('Jenisarmada_model');
        $this->load->model('Perusahaan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'app/jenisarmada/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'app/jenisarmada/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'app/jenisarmada/index';
            $config['first_url'] = base_url() . 'app/jenisarmada/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jenisarmada_model->total_rows($q);
        $jenisarmada = $this->Jenisarmada_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jenisarmada_data' => $jenisarmada,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'jenisarmada/jenisarmada_list',
            'extracss' => '',
            'extrajs' => '',
        );
        $this->load->view('base/content', $data);
    }

    public function create() 
    {
        $perusahaan='';
        if($this->sess['rolename']!='Administrator'){
            $perusahaan = $this->Perusahaan_model->get_by_id($this->sess['perusahaanid']);
        }else{
            $perusahaan = $this->Perusahaan_model->get_all();
        }
        $data = array(
            'button' => 'Create',
            'action' => site_url('app/jenisarmada/create_action'),
	    'id' => set_value('id'),
	    'jenis' => set_value('jenis'),
        'perusahaan'=>set_value('perusahaan'),
        'perusahaanlist'=>$perusahaan,
        'session' => $this->sess,
        'rolelist' => $this->rolelist,
        'template' => 'jenisarmada/jenisarmada_form',
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
		'jenis' => $this->input->post('jenis',TRUE),
        'perusahaan' => $this->input->post('perusahaan',TRUE),
	    );

            $this->Jenisarmada_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('app/jenisarmada'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jenisarmada_model->get_by_id($id);
        $perusahaan='';
        if($this->sess['rolename']!='Administrator'){
            $perusahaan = $this->Perusahaan_model->get_by_id($this->sess['perusahaanid']);
        }else{
            $perusahaan = $this->Perusahaan_model->get_all();
        }
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('app/jenisarmada/update_action'),
		'id' => set_value('id', $row->id),
		'jenis' => set_value('jenis', $row->jenis),
        'perusahaan'=>set_value('perusahaan', $row->perusahaan),
        'namaperusahaan'=>$perusahaan->namaperusahaan,
        'session' => $this->sess,
        'rolelist' => $this->rolelist,
        'template' => 'jenisarmada/jenisarmada_form',
        'extracss' => '',
        'extrajs' => '',
    );
    $this->load->view('base/content', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/jenisarmada'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'jenis' => $this->input->post('jenis',TRUE),
        'perusahaan' => $this->input->post('perusahaan',TRUE),
	    );

            $this->Jenisarmada_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('app/jenisarmada'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jenisarmada_model->get_by_id($id);

        if ($row) {
            $this->Jenisarmada_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('app/jenisarmada'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/jenisarmada'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('jenis', 'jenis', 'trim|required|xss_clean');
    $this->form_validation->set_rules('perusahaan','perusahaan','trim|required|numeric|xss_clean');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jenisarmada.php */
/* Location: ./application/controllers/Jenisarmada.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */