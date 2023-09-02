<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rute extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Rute_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'rute/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'rute/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'rute/index.html';
            $config['first_url'] = base_url() . 'rute/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Rute_model->total_rows($q);
        $rute = $this->Rute_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'rute_data' => $rute,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('rute/rute_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Rute_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'guuid' => $row->guuid,
		'koderute' => $row->koderute,
		'kotaasal' => $row->kotaasal,
		'kotatujuan' => $row->kotatujuan,
		'perusahaan' => $row->perusahaan,
		'createdat' => $row->createdat,
		'createdby' => $row->createdby,
		'updatedat' => $row->updatedat,
		'updatedby' => $row->updatedby,
		'armada' => $row->armada,
	    );
            $this->load->view('rute/rute_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('rute'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('rute/create_action'),
	    'id' => set_value('id'),
	    'guuid' => set_value('guuid'),
	    'koderute' => set_value('koderute'),
	    'kotaasal' => set_value('kotaasal'),
	    'kotatujuan' => set_value('kotatujuan'),
	    'perusahaan' => set_value('perusahaan'),
	    'createdat' => set_value('createdat'),
	    'createdby' => set_value('createdby'),
	    'updatedat' => set_value('updatedat'),
	    'updatedby' => set_value('updatedby'),
	    'armada' => set_value('armada'),
	);
        $this->load->view('rute/rute_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'guuid' => $this->input->post('guuid',TRUE),
		'koderute' => $this->input->post('koderute',TRUE),
		'kotaasal' => $this->input->post('kotaasal',TRUE),
		'kotatujuan' => $this->input->post('kotatujuan',TRUE),
		'perusahaan' => $this->input->post('perusahaan',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
		'armada' => $this->input->post('armada',TRUE),
	    );

            $this->Rute_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('rute'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Rute_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('rute/update_action'),
		'id' => set_value('id', $row->id),
		'guuid' => set_value('guuid', $row->guuid),
		'koderute' => set_value('koderute', $row->koderute),
		'kotaasal' => set_value('kotaasal', $row->kotaasal),
		'kotatujuan' => set_value('kotatujuan', $row->kotatujuan),
		'perusahaan' => set_value('perusahaan', $row->perusahaan),
		'createdat' => set_value('createdat', $row->createdat),
		'createdby' => set_value('createdby', $row->createdby),
		'updatedat' => set_value('updatedat', $row->updatedat),
		'updatedby' => set_value('updatedby', $row->updatedby),
		'armada' => set_value('armada', $row->armada),
	    );
            $this->load->view('rute/rute_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('rute'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'guuid' => $this->input->post('guuid',TRUE),
		'koderute' => $this->input->post('koderute',TRUE),
		'kotaasal' => $this->input->post('kotaasal',TRUE),
		'kotatujuan' => $this->input->post('kotatujuan',TRUE),
		'perusahaan' => $this->input->post('perusahaan',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
		'armada' => $this->input->post('armada',TRUE),
	    );

            $this->Rute_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('rute'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Rute_model->get_by_id($id);

        if ($row) {
            $this->Rute_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('rute'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('rute'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('guuid', 'guuid', 'trim|required');
	$this->form_validation->set_rules('koderute', 'koderute', 'trim|required');
	$this->form_validation->set_rules('kotaasal', 'kotaasal', 'trim|required');
	$this->form_validation->set_rules('kotatujuan', 'kotatujuan', 'trim|required');
	$this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required');
	$this->form_validation->set_rules('createdat', 'createdat', 'trim|required');
	$this->form_validation->set_rules('createdby', 'createdby', 'trim|required');
	$this->form_validation->set_rules('updatedat', 'updatedat', 'trim|required');
	$this->form_validation->set_rules('updatedby', 'updatedby', 'trim|required');
	$this->form_validation->set_rules('armada', 'armada', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Rute.php */
/* Location: ./application/controllers/Rute.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */