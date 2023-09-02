<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    public $sess;
    public $tppsess;
    public $rolelist;
    static $gender = array(1 => 'LAKI - LAKI', 2 => 'PEREMPUAN');
    static $religions = array(1 => 'Islam', 2 => 'Kristen', 3 => 'Katholik', 4 => 'Hindu', 5 => 'Budha', 6 => 'Kong Hu Cu');
    static $citizenships = array(1 => 'Warga Negara Indonesia', 2 => 'Warga Negara Asing');
    static $lettergroup = array(1 => "Surat Masuk", 2 => "Surat Keluar", 3 => "Surat Internal");
    static $letterclassify = array(1 => "Biasa", 2 => "Terbatas", 3 => "Surat Rahasia", 4 => "Surat Sangat Rahasia");
    static $letterstatus = array(1 => 'Belum Disetujui', 2 => 'Sedang Diproses', 3 => 'Sudah Disetujui', 4 => 'Sudah Didisposisi', 5 => 'Selesai');

    function __construct() {
        parent::__construct();
        $this->load->model('app/Settings_model');
        $this->load->model('auth/Routings_model');
        $this->_loadConfig();
    }

    public function _loadConfig() {
        foreach ($this->Settings_model->get_all() as $s) {
            $this->config->set_item($s->setting_name, $s->setting_value);
        }
        $this->config->set_item('base_url', $this->config->item('site_url'));
        $this->config->set_item('site_url', $this->config->item('site_url'));
    }

    public function _auth($uri) {
        if ($this->session->userdata('logged_in')) {
            return TRUE;
        } else {
            $this->session->unset_userdata('logged_in');
            $this->session->set_flashdata('message', 'Please login!');
            $this->session->set_flashdata('redirect_back', $uri);
            redirect(base_url('auth/auth'));
        }
    }

    public function _tppauth($uri) {
        if ($this->session->userdata('tpp_resident')) {
            return TRUE;
        } else {
            $this->session->unset_userdata('tpp_resident');
            $this->session->set_flashdata('message', 'Silahkan Masuk Terlebih dahulu!');
            $this->session->set_flashdata('redirect_back', $uri);
            redirect(base_url('tpp/auth/'));
        }
    }

}
