<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Routings extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Routings_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'routings/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'routings/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'routings/index.html';
            $config['first_url'] = base_url() . 'routings/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Routings_model->total_rows($q);
        $routings = $this->Routings_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'routings_data' => $routings,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('routings/routings_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Routings_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'routename' => $row->routename,
		'routeurl' => $row->routeurl,
		'routealias' => $row->routealias,
		'icon' => $row->icon,
		'functionname' => $row->functionname,
		'createdat' => $row->createdat,
		'createdby' => $row->createdby,
		'updatedat' => $row->updatedat,
		'updatedby' => $row->updatedby,
	    );
            $this->load->view('routings/routings_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('routings'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('routings/create_action'),
	    'id' => set_value('id'),
	    'routename' => set_value('routename'),
	    'routeurl' => set_value('routeurl'),
	    'routealias' => set_value('routealias'),
	    'icon' => set_value('icon'),
	    'functionname' => set_value('functionname'),
	    'createdat' => set_value('createdat'),
	    'createdby' => set_value('createdby'),
	    'updatedat' => set_value('updatedat'),
	    'updatedby' => set_value('updatedby'),
	);
        $this->load->view('routings/routings_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'routename' => $this->input->post('routename',TRUE),
		'routeurl' => $this->input->post('routeurl',TRUE),
		'routealias' => $this->input->post('routealias',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'functionname' => $this->input->post('functionname',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Routings_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('routings'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Routings_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('routings/update_action'),
		'id' => set_value('id', $row->id),
		'routename' => set_value('routename', $row->routename),
		'routeurl' => set_value('routeurl', $row->routeurl),
		'routealias' => set_value('routealias', $row->routealias),
		'icon' => set_value('icon', $row->icon),
		'functionname' => set_value('functionname', $row->functionname),
		'createdat' => set_value('createdat', $row->createdat),
		'createdby' => set_value('createdby', $row->createdby),
		'updatedat' => set_value('updatedat', $row->updatedat),
		'updatedby' => set_value('updatedby', $row->updatedby),
	    );
            $this->load->view('routings/routings_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('routings'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'routename' => $this->input->post('routename',TRUE),
		'routeurl' => $this->input->post('routeurl',TRUE),
		'routealias' => $this->input->post('routealias',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'functionname' => $this->input->post('functionname',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Routings_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('routings'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Routings_model->get_by_id($id);

        if ($row) {
            $this->Routings_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('routings'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('routings'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('routename', 'routename', 'trim|required');
	$this->form_validation->set_rules('routeurl', 'routeurl', 'trim|required');
	$this->form_validation->set_rules('routealias', 'routealias', 'trim|required');
	$this->form_validation->set_rules('icon', 'icon', 'trim|required');
	$this->form_validation->set_rules('functionname', 'functionname', 'trim|required');
	$this->form_validation->set_rules('createdat', 'createdat', 'trim|required');
	$this->form_validation->set_rules('createdby', 'createdby', 'trim|required');
	$this->form_validation->set_rules('updatedat', 'updatedat', 'trim|required');
	$this->form_validation->set_rules('updatedby', 'updatedby', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Routings.php */
/* Location: ./application/controllers/Routings.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */