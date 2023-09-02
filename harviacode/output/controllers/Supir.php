<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Supir extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Supir_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'supir/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'supir/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'supir/index.html';
            $config['first_url'] = base_url() . 'supir/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Supir_model->total_rows($q);
        $supir = $this->Supir_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'supir_data' => $supir,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('supir/supir_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Supir_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'guuid' => $row->guuid,
		'perusahaan' => $row->perusahaan,
		'namalengkap' => $row->namalengkap,
		'tanggallahir' => $row->tanggallahir,
		'jeniskelamin' => $row->jeniskelamin,
		'alamat' => $row->alamat,
		'nomortelepon' => $row->nomortelepon,
		'posisi' => $row->posisi,
		'nomorsim' => $row->nomorsim,
		'jenissim' => $row->jenissim,
		'createdat' => $row->createdat,
		'status' => $row->status,
		'createdby' => $row->createdby,
		'updatedat' => $row->updatedat,
		'updatedby' => $row->updatedby,
	    );
            $this->load->view('supir/supir_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('supir'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('supir/create_action'),
	    'id' => set_value('id'),
	    'guuid' => set_value('guuid'),
	    'perusahaan' => set_value('perusahaan'),
	    'namalengkap' => set_value('namalengkap'),
	    'tanggallahir' => set_value('tanggallahir'),
	    'jeniskelamin' => set_value('jeniskelamin'),
	    'alamat' => set_value('alamat'),
	    'nomortelepon' => set_value('nomortelepon'),
	    'posisi' => set_value('posisi'),
	    'nomorsim' => set_value('nomorsim'),
	    'jenissim' => set_value('jenissim'),
	    'createdat' => set_value('createdat'),
	    'status' => set_value('status'),
	    'createdby' => set_value('createdby'),
	    'updatedat' => set_value('updatedat'),
	    'updatedby' => set_value('updatedby'),
	);
        $this->load->view('supir/supir_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'guuid' => $this->input->post('guuid',TRUE),
		'perusahaan' => $this->input->post('perusahaan',TRUE),
		'namalengkap' => $this->input->post('namalengkap',TRUE),
		'tanggallahir' => $this->input->post('tanggallahir',TRUE),
		'jeniskelamin' => $this->input->post('jeniskelamin',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'nomortelepon' => $this->input->post('nomortelepon',TRUE),
		'posisi' => $this->input->post('posisi',TRUE),
		'nomorsim' => $this->input->post('nomorsim',TRUE),
		'jenissim' => $this->input->post('jenissim',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'status' => $this->input->post('status',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Supir_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('supir'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Supir_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('supir/update_action'),
		'id' => set_value('id', $row->id),
		'guuid' => set_value('guuid', $row->guuid),
		'perusahaan' => set_value('perusahaan', $row->perusahaan),
		'namalengkap' => set_value('namalengkap', $row->namalengkap),
		'tanggallahir' => set_value('tanggallahir', $row->tanggallahir),
		'jeniskelamin' => set_value('jeniskelamin', $row->jeniskelamin),
		'alamat' => set_value('alamat', $row->alamat),
		'nomortelepon' => set_value('nomortelepon', $row->nomortelepon),
		'posisi' => set_value('posisi', $row->posisi),
		'nomorsim' => set_value('nomorsim', $row->nomorsim),
		'jenissim' => set_value('jenissim', $row->jenissim),
		'createdat' => set_value('createdat', $row->createdat),
		'status' => set_value('status', $row->status),
		'createdby' => set_value('createdby', $row->createdby),
		'updatedat' => set_value('updatedat', $row->updatedat),
		'updatedby' => set_value('updatedby', $row->updatedby),
	    );
            $this->load->view('supir/supir_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('supir'));
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
		'perusahaan' => $this->input->post('perusahaan',TRUE),
		'namalengkap' => $this->input->post('namalengkap',TRUE),
		'tanggallahir' => $this->input->post('tanggallahir',TRUE),
		'jeniskelamin' => $this->input->post('jeniskelamin',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'nomortelepon' => $this->input->post('nomortelepon',TRUE),
		'posisi' => $this->input->post('posisi',TRUE),
		'nomorsim' => $this->input->post('nomorsim',TRUE),
		'jenissim' => $this->input->post('jenissim',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'status' => $this->input->post('status',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Supir_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('supir'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Supir_model->get_by_id($id);

        if ($row) {
            $this->Supir_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('supir'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('supir'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('guuid', 'guuid', 'trim|required');
	$this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required');
	$this->form_validation->set_rules('namalengkap', 'namalengkap', 'trim|required');
	$this->form_validation->set_rules('tanggallahir', 'tanggallahir', 'trim|required');
	$this->form_validation->set_rules('jeniskelamin', 'jeniskelamin', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('nomortelepon', 'nomortelepon', 'trim|required');
	$this->form_validation->set_rules('posisi', 'posisi', 'trim|required');
	$this->form_validation->set_rules('nomorsim', 'nomorsim', 'trim|required');
	$this->form_validation->set_rules('jenissim', 'jenissim', 'trim|required');
	$this->form_validation->set_rules('createdat', 'createdat', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('createdby', 'createdby', 'trim|required');
	$this->form_validation->set_rules('updatedat', 'updatedat', 'trim|required');
	$this->form_validation->set_rules('updatedby', 'updatedby', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Supir.php */
/* Location: ./application/controllers/Supir.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */