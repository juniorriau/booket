<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rute extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        parent::_auth($this->uri->uri_string());
        $this->sess = $this->session->logged_in;
        $this->rolelist = $this->sess['rolelist'][ucfirst($this->uri->segment(2))];
        $this->load->model('Perusahaan_model');
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
            $config['base_url'] = base_url() . 'app/rute/index?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'app/rute/index?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'app/rute/index';
            $config['first_url'] = base_url() . 'app/rute/index';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Rute_model->total_rows($where, $q);
        $rute = $this->Rute_model->get_limit_data($config['per_page'], $where, $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'rute_data' => $rute,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'rute/rute_list',
            'extracss' => '',
            'extrajs' => '',
        );
        $this->load->view('base/content', $data);
    }

    public function create()
    {
        $perusahaan = '';
        if ($this->sess['rolename'] != 'Administrator') {
            $perusahaan = $this->Perusahaan_model->get_by_id($this->sess['perusahaanid']);
        } else {
            $perusahaan = $this->Perusahaan_model->get_all();
        }
        $data = array(
            'button' => 'Create',
            'action' => site_url('app/rute/create_action'),
            'id' => set_value('id'),
            'guuid' => set_value('guuid'),
            'koderute' => set_value('koderute'),
            'kotaasal' => set_value('kotaasal'),
            'kotatujuan' => set_value('kotatujuan'),
            'jenistiket' => set_value('jenistiket'),
            'perusahaan' => set_value('perusahaan'),
            'createdat' => set_value('createdat'),
            'createdby' => set_value('createdby'),
            'updatedat' => set_value('updatedat'),
            'updatedby' => set_value('updatedby'),
            'perusahaanlist' => $perusahaan,
            'session' => $this->sess,
            'rolelist' => $this->rolelist,
            'template' => 'rute/rute_form',
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
            $uuid = $this->uuid->v4();
            $data = array(
                'guuid' => $uuid,
                'koderute' => $this->input->post('koderute', TRUE),
                'kotaasal' => $this->input->post('kotaasal', TRUE),
                'kotatujuan' => $this->input->post('kotatujuan', TRUE),
                'perusahaan' => $this->input->post('perusahaan', TRUE),
                'createdat' => date('Y-m-d H:i:s'),
                'createdby' => $this->sess['id'],
                'updatedat' => date('Y-m-d H:i:s'),
                'updatedby' => $this->sess['id'],
            );

            $this->Rute_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('app/rute'));
        }
    }

    public function update($id)
    {
        $row = $this->Rute_model->get_by_id($id);
        $perusahaan = '';
        if ($this->sess['rolename'] != 'Administrator') {
            $perusahaan = $this->Perusahaan_model->get_by_id($this->sess['perusahaanid']);
        } else {
            $perusahaan = $this->Perusahaan_model->get_all();
        }
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('app/rute/update_action'),
                'id' => set_value('id', $row->id),
                'koderute' => set_value('koderute', $row->koderute),
                'kotaasal' => set_value('kotaasal', $row->kotaasal),
                'kotatujuan' => set_value('kotatujuan', $row->kotatujuan),
                'perusahaan' => set_value('perusahaan', $row->perusahaan),
                'createdat' => set_value('createdat', $row->createdat),
                'createdby' => set_value('createdby', $row->createdby),
                'updatedat' => set_value('updatedat', $row->updatedat),
                'updatedby' => set_value('updatedby', $row->updatedby),
                'perusahaanlist' => $perusahaan,
                'session' => $this->sess,
                'rolelist' => $this->rolelist,
                'template' => 'rute/rute_form',
                'extracss' => '',
                'extrajs' => '',
            );
            $this->load->view('base/content', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/rute'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $uuid = $this->uuid->v4();
            $data = array(
                'guuid' => $uuid,
                'koderute' => $this->input->post('koderute', TRUE),
                'kotaasal' => $this->input->post('kotaasal', TRUE),
                'kotatujuan' => $this->input->post('kotatujuan', TRUE),
                'perusahaan' => $this->input->post('perusahaan', TRUE),
                'updatedat' => date('Y-m-d H:i:s'),
                'updatedby' => $this->sess['id'],
            );

            $this->Rute_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('app/rute'));
        }
    }

    public function delete($id)
    {
        $row = $this->Rute_model->get_by_id($id);

        if ($row) {
            $this->Rute_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('app/rute'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('app/rute'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('koderute', 'koderute', 'trim|required|xss_clean');
        $this->form_validation->set_rules('kotaasal', 'kotaasal', 'trim|required|xss_clean');
        $this->form_validation->set_rules('kotatujuan', 'kotatujuan', 'trim|required|xss_clean');
        $this->form_validation->set_rules('perusahaan', 'perusahaan', 'trim|required|numeric|xss_clean');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Rute.php */
/* Location: ./application/controllers/Rute.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */