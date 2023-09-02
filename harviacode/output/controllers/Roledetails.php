<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Roledetails extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Roledetails_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'roledetails/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'roledetails/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'roledetails/index.html';
            $config['first_url'] = base_url() . 'roledetails/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Roledetails_model->total_rows($q);
        $roledetails = $this->Roledetails_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'roledetails_data' => $roledetails,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('roledetails/roledetails_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Roledetails_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'roleid' => $row->roleid,
		'roledetail' => $row->roledetail,
		'navigation' => $row->navigation,
		'createdat' => $row->createdat,
		'createdby' => $row->createdby,
		'updatedat' => $row->updatedat,
		'updatedby' => $row->updatedby,
	    );
            $this->load->view('roledetails/roledetails_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('roledetails'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('roledetails/create_action'),
	    'id' => set_value('id'),
	    'roleid' => set_value('roleid'),
	    'roledetail' => set_value('roledetail'),
	    'navigation' => set_value('navigation'),
	    'createdat' => set_value('createdat'),
	    'createdby' => set_value('createdby'),
	    'updatedat' => set_value('updatedat'),
	    'updatedby' => set_value('updatedby'),
	);
        $this->load->view('roledetails/roledetails_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'roleid' => $this->input->post('roleid',TRUE),
		'roledetail' => $this->input->post('roledetail',TRUE),
		'navigation' => $this->input->post('navigation',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Roledetails_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('roledetails'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Roledetails_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('roledetails/update_action'),
		'id' => set_value('id', $row->id),
		'roleid' => set_value('roleid', $row->roleid),
		'roledetail' => set_value('roledetail', $row->roledetail),
		'navigation' => set_value('navigation', $row->navigation),
		'createdat' => set_value('createdat', $row->createdat),
		'createdby' => set_value('createdby', $row->createdby),
		'updatedat' => set_value('updatedat', $row->updatedat),
		'updatedby' => set_value('updatedby', $row->updatedby),
	    );
            $this->load->view('roledetails/roledetails_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('roledetails'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'roleid' => $this->input->post('roleid',TRUE),
		'roledetail' => $this->input->post('roledetail',TRUE),
		'navigation' => $this->input->post('navigation',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Roledetails_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('roledetails'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Roledetails_model->get_by_id($id);

        if ($row) {
            $this->Roledetails_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('roledetails'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('roledetails'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('roleid', 'roleid', 'trim|required');
	$this->form_validation->set_rules('roledetail', 'roledetail', 'trim|required');
	$this->form_validation->set_rules('navigation', 'navigation', 'trim|required');
	$this->form_validation->set_rules('createdat', 'createdat', 'trim|required');
	$this->form_validation->set_rules('createdby', 'createdby', 'trim|required');
	$this->form_validation->set_rules('updatedat', 'updatedat', 'trim|required');
	$this->form_validation->set_rules('updatedby', 'updatedby', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Roledetails.php */
/* Location: ./application/controllers/Roledetails.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */