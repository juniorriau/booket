<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Jadwal_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'jadwal/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'jadwal/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'jadwal/index.html';
            $config['first_url'] = base_url() . 'jadwal/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Jadwal_model->total_rows($q);
        $jadwal = $this->Jadwal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'jadwal_data' => $jadwal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('jadwal/jadwal_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'guuid' => $row->guuid,
		'kodejadwal' => $row->kodejadwal,
		'armada' => $row->armada,
		'perusahaan' => $row->perusahaan,
		'tanggalberangkat' => $row->tanggalberangkat,
		'tanggalpulang' => $row->tanggalpulang,
		'jenisperjalanan' => $row->jenisperjalanan,
		'jumlahtiket' => $row->jumlahtiket,
		'supir1' => $row->supir1,
		'supir2' => $row->supir2,
		'supir3' => $row->supir3,
		'createdat' => $row->createdat,
		'createdby' => $row->createdby,
		'updatedat' => $row->updatedat,
		'updatedby' => $row->updatedby,
	    );
            $this->load->view('jadwal/jadwal_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('jadwal/create_action'),
	    'id' => set_value('id'),
	    'guuid' => set_value('guuid'),
	    'kodejadwal' => set_value('kodejadwal'),
	    'armada' => set_value('armada'),
	    'perusahaan' => set_value('perusahaan'),
	    'tanggalberangkat' => set_value('tanggalberangkat'),
	    'tanggalpulang' => set_value('tanggalpulang'),
	    'jenisperjalanan' => set_value('jenisperjalanan'),
	    'jumlahtiket' => set_value('jumlahtiket'),
	    'supir1' => set_value('supir1'),
	    'supir2' => set_value('supir2'),
	    'supir3' => set_value('supir3'),
	    'createdat' => set_value('createdat'),
	    'createdby' => set_value('createdby'),
	    'updatedat' => set_value('updatedat'),
	    'updatedby' => set_value('updatedby'),
	);
        $this->load->view('jadwal/jadwal_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'guuid' => $this->input->post('guuid',TRUE),
		'kodejadwal' => $this->input->post('kodejadwal',TRUE),
		'armada' => $this->input->post('armada',TRUE),
		'perusahaan' => $this->input->post('perusahaan',TRUE),
		'tanggalberangkat' => $this->input->post('tanggalberangkat',TRUE),
		'tanggalpulang' => $this->input->post('tanggalpulang',TRUE),
		'jenisperjalanan' => $this->input->post('jenisperjalanan',TRUE),
		'jumlahtiket' => $this->input->post('jumlahtiket',TRUE),
		'supir1' => $this->input->post('supir1',TRUE),
		'supir2' => $this->input->post('supir2',TRUE),
		'supir3' => $this->input->post('supir3',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Jadwal_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('jadwal'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('jadwal/update_action'),
		'id' => set_value('id', $row->id),
		'guuid' => set_value('guuid', $row->guuid),
		'kodejadwal' => set_value('kodejadwal', $row->kodejadwal),
		'armada' => set_value('armada', $row->armada),
		'perusahaan' => set_value('perusahaan', $row->perusahaan),
		'tanggalberangkat' => set_value('tanggalberangkat', $row->tanggalberangkat),
		'tanggalpulang' => set_value('tanggalpulang', $row->tanggalpulang),
		'jenisperjalanan' => set_value('jenisperjalanan', $row->jenisperjalanan),
		'jumlahtiket' => set_value('jumlahtiket', $row->jumlahtiket),
		'supir1' => set_value('supir1', $row->supir1),
		'supir2' => set_value('supir2', $row->supir2),
		'supir3' => set_value('supir3', $row->supir3),
		'createdat' => set_value('createdat', $row->createdat),
		'createdby' => set_value('createdby', $row->createdby),
		'updatedat' => set_value('updatedat', $row->updatedat),
		'updatedby' => set_value('updatedby', $row->updatedby),
	    );
            $this->load->view('jadwal/jadwal_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
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
		'kodejadwal' => $this->input->post('kodejadwal',TRUE),
		'armada' => $this->input->post('armada',TRUE),
		'perusahaan' => $this->input->post('perusahaan',TRUE),
		'tanggalberangkat' => $this->input->post('tanggalberangkat',TRUE),
		'tanggalpulang' => $this->input->post('tanggalpulang',TRUE),
		'jenisperjalanan' => $this->input->post('jenisperjalanan',TRUE),
		'jumlahtiket' => $this->input->post('jumlahtiket',TRUE),
		'supir1' => $this->input->post('supir1',TRUE),
		'supir2' => $this->input->post('supir2',TRUE),
		'supir3' => $this->input->post('supir3',TRUE),
		'createdat' => $this->input->post('createdat',TRUE),
		'createdby' => $this->input->post('createdby',TRUE),
		'updatedat' => $this->input->post('updatedat',TRUE),
		'updatedby' => $this->input->post('updatedby',TRUE),
	    );

            $this->Jadwal_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('jadwal'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Jadwal_model->get_by_id($id);

        if ($row) {
            $this->Jadwal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('jadwal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('jadwal'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('guuid', 'guuid', 'trim|required');
	$this->form_validation->set_rules('kodejadwal', 'kodejadwal', 'trim|required');
	$this->form_validation->set_rules('armada', 'armada', 'trim|required');
	$this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required');
	$this->form_validation->set_rules('tanggalberangkat', 'tanggalberangkat', 'trim|required');
	$this->form_validation->set_rules('tanggalpulang', 'tanggalpulang', 'trim|required');
	$this->form_validation->set_rules('jenisperjalanan', 'jenisperjalanan', 'trim|required');
	$this->form_validation->set_rules('jumlahtiket', 'jumlahtiket', 'trim|required');
	$this->form_validation->set_rules('supir1', 'supir1', 'trim|required');
	$this->form_validation->set_rules('supir2', 'supir2', 'trim|required');
	$this->form_validation->set_rules('supir3', 'supir3', 'trim|required');
	$this->form_validation->set_rules('createdat', 'createdat', 'trim|required');
	$this->form_validation->set_rules('createdby', 'createdby', 'trim|required');
	$this->form_validation->set_rules('updatedat', 'updatedat', 'trim|required');
	$this->form_validation->set_rules('updatedby', 'updatedby', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Jadwal.php */
/* Location: ./application/controllers/Jadwal.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */