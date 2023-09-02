<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Armada extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Armada_model');
        $this->load->library('form_validation');        
	$this->load->library('datatables');
    }

    public function index()
    {
        $this->load->view('armada/armada_list');
    } 
    
    public function json() {
        header('Content-Type: application/json');
        echo $this->Armada_model->json();
    }

    public function read($id) 
    {
        $row = $this->Armada_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'guuid' => $row->guuid,
		'jenisarmada' => $row->jenisarmada,
		'kodehuruf' => $row->kodehuruf,
		'kodeangka' => $row->kodeangka,
		'platnomor' => $row->platnomor,
		'kelas' => $row->kelas,
		'kapasitas' => $row->kapasitas,
		'fasilitas' => $row->fasilitas,
		'perusahaan' => $row->perusahaan,
		'createdat' => $row->createdat,
		'createdby' => $row->createdby,
		'updatedat' => $row->updatedat,
		'updatedby' => $row->updatedby,
	    );
            $this->load->view('armada/armada_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('armada'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('armada/create_action'),
	    'id' => set_value('id'),
	    'guuid' => set_value('guuid'),
	    'jenisarmada' => set_value('jenisarmada'),
	    'kodehuruf' => set_value('kodehuruf'),
	    'kodeangka' => set_value('kodeangka'),
	    'platnomor' => set_value('platnomor'),
	    'kelas' => set_value('kelas'),
	    'kapasitas' => set_value('kapasitas'),
	    'fasilitas' => set_value('fasilitas'),
	    'perusahaan' => set_value('perusahaan'),
	    'createdat' => set_value('createdat'),
	    'createdby' => set_value('createdby'),
	    'updatedat' => set_value('updatedat'),
	    'updatedby' => set_value('updatedby'),
	);
        $this->load->view('armada/armada_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'guuid' => $this->input->post('guuid',TRUE),
		'jenisarmada' => $this->input->post('jenisarmada',TRUE),
		'kodehuruf' => $this->input->post('kodehuruf',TRUE),
		'kodeangka' => $this->input->post('kodeangka',TRUE),
		'platnomor' => $this->input->post('platnomor',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'kapasitas' => $this->input->post('kapasitas',TRUE),
		'fasilitas' => $this->input->post('fasilitas',TRUE),
		'perusahaan' => $this->input->post('perusahaan',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Armada_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('armada'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Armada_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('armada/update_action'),
		'id' => set_value('id', $row->id),
		'guuid' => set_value('guuid', $row->guuid),
		'jenisarmada' => set_value('jenisarmada', $row->jenisarmada),
		'kodehuruf' => set_value('kodehuruf', $row->kodehuruf),
		'kodeangka' => set_value('kodeangka', $row->kodeangka),
		'platnomor' => set_value('platnomor', $row->platnomor),
		'kelas' => set_value('kelas', $row->kelas),
		'kapasitas' => set_value('kapasitas', $row->kapasitas),
		'fasilitas' => set_value('fasilitas', $row->fasilitas),
		'perusahaan' => set_value('perusahaan', $row->perusahaan),
		'createdat' => set_value('createdat', $row->createdat),
		'createdby' => set_value('createdby', $row->createdby),
		'updatedat' => set_value('updatedat', $row->updatedat),
		'updatedby' => set_value('updatedby', $row->updatedby),
	    );
            $this->load->view('armada/armada_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('armada'));
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
		'jenisarmada' => $this->input->post('jenisarmada',TRUE),
		'kodehuruf' => $this->input->post('kodehuruf',TRUE),
		'kodeangka' => $this->input->post('kodeangka',TRUE),
		'platnomor' => $this->input->post('platnomor',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'kapasitas' => $this->input->post('kapasitas',TRUE),
		'fasilitas' => $this->input->post('fasilitas',TRUE),
		'perusahaan' => $this->input->post('perusahaan',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Armada_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('armada'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Armada_model->get_by_id($id);

        if ($row) {
            $this->Armada_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('armada'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('armada'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('guuid', 'guuid', 'trim|required');
	$this->form_validation->set_rules('jenisarmada', 'jenisarmada', 'trim|required');
	$this->form_validation->set_rules('kodehuruf', 'kodehuruf', 'trim|required');
	$this->form_validation->set_rules('kodeangka', 'kodeangka', 'trim|required');
	$this->form_validation->set_rules('platnomor', 'platnomor', 'trim|required');
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
	$this->form_validation->set_rules('kapasitas', 'kapasitas', 'trim|required');
	$this->form_validation->set_rules('fasilitas', 'fasilitas', 'trim|required');
	$this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required');
	$this->form_validation->set_rules('createdat', 'createdat', 'trim|required');
	$this->form_validation->set_rules('createdby', 'createdby', 'trim|required');
	$this->form_validation->set_rules('updatedat', 'updatedat', 'trim|required');
	$this->form_validation->set_rules('updatedby', 'updatedby', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Armada.php */
/* Location: ./application/controllers/Armada.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:25 */
/* http://harviacode.com */