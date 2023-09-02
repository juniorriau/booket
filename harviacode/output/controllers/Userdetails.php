<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Userdetails extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Userdetails_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'userdetails/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'userdetails/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'userdetails/index.html';
            $config['first_url'] = base_url() . 'userdetails/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Userdetails_model->total_rows($q);
        $userdetails = $this->Userdetails_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'userdetails_data' => $userdetails,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('userdetails/userdetails_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Userdetails_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'userid' => $row->userid,
		'fullname' => $row->fullname,
		'address' => $row->address,
		'phone' => $row->phone,
		'url' => $row->url,
		'image' => $row->image,
		'description' => $row->description,
		'createdat' => $row->createdat,
		'createdby' => $row->createdby,
		'updatedat' => $row->updatedat,
		'updatedby' => $row->updatedby,
	    );
            $this->load->view('userdetails/userdetails_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('userdetails'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('userdetails/create_action'),
	    'id' => set_value('id'),
	    'userid' => set_value('userid'),
	    'fullname' => set_value('fullname'),
	    'address' => set_value('address'),
	    'phone' => set_value('phone'),
	    'url' => set_value('url'),
	    'image' => set_value('image'),
	    'description' => set_value('description'),
	    'createdat' => set_value('createdat'),
	    'createdby' => set_value('createdby'),
	    'updatedat' => set_value('updatedat'),
	    'updatedby' => set_value('updatedby'),
	);
        $this->load->view('userdetails/userdetails_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'userid' => $this->input->post('userid',TRUE),
		'fullname' => $this->input->post('fullname',TRUE),
		'address' => $this->input->post('address',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'url' => $this->input->post('url',TRUE),
		'image' => $this->input->post('image',TRUE),
		'description' => $this->input->post('description',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Userdetails_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('userdetails'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Userdetails_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('userdetails/update_action'),
		'id' => set_value('id', $row->id),
		'userid' => set_value('userid', $row->userid),
		'fullname' => set_value('fullname', $row->fullname),
		'address' => set_value('address', $row->address),
		'phone' => set_value('phone', $row->phone),
		'url' => set_value('url', $row->url),
		'image' => set_value('image', $row->image),
		'description' => set_value('description', $row->description),
		'createdat' => set_value('createdat', $row->createdat),
		'createdby' => set_value('createdby', $row->createdby),
		'updatedat' => set_value('updatedat', $row->updatedat),
		'updatedby' => set_value('updatedby', $row->updatedby),
	    );
            $this->load->view('userdetails/userdetails_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('userdetails'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'userid' => $this->input->post('userid',TRUE),
		'fullname' => $this->input->post('fullname',TRUE),
		'address' => $this->input->post('address',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'url' => $this->input->post('url',TRUE),
		'image' => $this->input->post('image',TRUE),
		'description' => $this->input->post('description',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Userdetails_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('userdetails'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Userdetails_model->get_by_id($id);

        if ($row) {
            $this->Userdetails_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('userdetails'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('userdetails'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('userid', 'userid', 'trim|required');
	$this->form_validation->set_rules('fullname', 'fullname', 'trim|required');
	$this->form_validation->set_rules('address', 'address', 'trim|required');
	$this->form_validation->set_rules('phone', 'phone', 'trim|required');
	$this->form_validation->set_rules('url', 'url', 'trim|required');
	$this->form_validation->set_rules('image', 'image', 'trim|required');
	$this->form_validation->set_rules('description', 'description', 'trim|required');
	$this->form_validation->set_rules('createdat', 'createdat', 'trim|required');
	$this->form_validation->set_rules('createdby', 'createdby', 'trim|required');
	$this->form_validation->set_rules('updatedat', 'updatedat', 'trim|required');
	$this->form_validation->set_rules('updatedby', 'updatedby', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Userdetails.php */
/* Location: ./application/controllers/Userdetails.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */