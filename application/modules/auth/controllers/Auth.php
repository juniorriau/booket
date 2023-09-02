<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Auth extends MY_Controller {

    public $uri_to = 'app';

    function __construct() {
        parent::__construct();
        $this->load->model('Authentication_model');
        $this->load->library('form_validation');
    }

    public function index() {

        $data = array(
            'action' => site_url('auth/auth/login_action'),
            'forgot' => site_url('auth/auth/reset'),
            'redirect_back' => $this->session->userdata('redirect_back'),
        );
        $this->load->view("auth/auth/login", $data);
    }

    public function login() {
        $data = array(
            'action' => site_url('auth/auth/login_action'),
            'forgot' => site_url('auth/auth/reset'),
            'redirect_back' => set_value('redirect_back', $this->session->userdata('redirect_back')),
        );
        $this->load->view("auth/login", $data);
    }

    public function login_action() {
        $this->load->model("auth/Userdetails_model");
        $this->load->model("auth/Roledetails_model");
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->login();
        } else {
            $username = $this->input->post('username', TRUE);
            $password = sha1($this->config->item('encryption_key') . $this->input->post('password', TRUE));

            $userlogin = $this->Authentication_model->checklogin($username, $password);
            if (!empty($userlogin)) {
                if ($userlogin->status == 0) {

                    $userdata = $this->Userdetails_model->get_by_userid($userlogin->id);
                    $rolelist = $this->Roledetails_model->get_by_roleid($userlogin->role);
                    $menu = $this->myacl->_generateMenus(json_decode($rolelist->roledetail));
                    $button = $this->myacl->_generateButtons(json_decode($rolelist->roledetail));
                    $curlogin = date('Y-m-d H:i:s');
                    $session_data = array(
                        'id' => $userlogin->id,
                        'email' => $userlogin->email,
                        'username' => $userlogin->username,
                        'role' => $userlogin->role,
                        'rolename' => $rolelist->rolename,
                        'rolelist' => (array) json_decode($rolelist->roledetail),
                        'menus' => $menu,
                        'button' => $button,
                        'name' => $userdata->fullname,
                        'image' => $userdata->image,
                        'lastlogin' => $userlogin->lastlogin,
                    );
                    $this->Authentication_model->loginstat($userlogin->id, array('status' => 1, 'currentlogin' => $curlogin));
                    $this->session->set_userdata("logged_in", $session_data);
                    if (!empty($this->input->post('redirect_back', TRUE))) {
                        $this->uri_to = $this->input->post('redirect_back', TRUE);
                    }
                    $this->session->set_flashdata('message', 'Selamat Datang Kembali, ' . $session_data['name']);
                    redirect(site_url($this->uri_to));
                } elseif ($userlogin->status == 1) {
                    $userdata = $this->Userdetails_model->get_by_userid($userlogin->id);
                    $rolelist = $this->Roledetails_model->get_by_roleid($userlogin->role);
                    $menu = $this->myacl->_generateMenus(json_decode($rolelist->roledetail));
                    $button = $this->myacl->_generateButtons(json_decode($rolelist->roledetail));
                    $curlogin = date('Y-m-d H:i:s');
                    $session_data = array(
                        'id' => $userlogin->id,
                        'email' => $userlogin->email,
                        'username' => $userlogin->username,
                        'role' => $userlogin->role,
                        'rolename' => $rolelist->rolename,
                        'rolelist' => (array) json_decode($rolelist->roledetail),
                        'menus' => $menu,
                        'name' => $userdata->fullname,
                        'image' => $userdata->image,
                        'lastlogin' => $userlogin->lastlogin,
                    );
                    $this->Authentication_model->loginstat($userlogin->id, array('status' => 1, 'currentlogin' => $curlogin));
                    $this->session->set_userdata("logged_in", $session_data);
                    if (!empty($this->input->post('redirect_back', TRUE))) {
                        $this->uri_to = $this->input->post('redirect_back', TRUE);
                    }
                    $this->session->set_flashdata('message', 'Selamat Datang Kembali, ' . $session_data['name']);
                    redirect(site_url($this->uri_to));
                } else {
                    $this->session->set_flashdata('message', 'Anda sudah login di komputer lain, silahkan logout terlebih dahulu!');
                    redirect(site_url('auth/auth'));
                }
            } else {
                $this->session->set_flashdata('message', 'Username dan Katasandi mungkin salah atau user belum aktif, silahkan hubungu administrator atau cek email');
                redirect(site_url('auth/auth'));
            }
        }
    }

    public function logout() {
        $this->sess = $this->session->logged_in;
        $user = $this->Authentication_model->get_by_id($this->sess['id']);
        $this->Authentication_model->loginstat($this->sess['id'], array('status' => 0, 'currentlogin' => '0000-00-00 00:00:00', 'lastlogin' => $user->currentlogin));
        $this->session->unset_userdata('logged_in');
        redirect(site_url('auth/auth'));
    }

    public function reset($key = NULL) {
        if (!$key) {
            $data = array(
                'action' => site_url('auth/auth/reset_action'),
                'step' => 1,
                'redirect_back' => $this->session->userdata('redirect_back'),
            );
            $this->load->view("auth/auth/reset", $data);
        } else {
            $data = array(
                'action' => site_url('auth/auth/reset_action'),
                'step' => 2,
                'redirect_back' => $this->session->userdata('redirect_back'),
            );
            $this->load->view("auth/auth/reset", $data);
        }
    }

    public function reset_action() {
        $this->load->model('auth/Users_model');
        $step = $this->input->post('step', TRUE);

        $this->_rules2();
        if ($this->form_validation->run() == FALSE) {
            $this->reset();
        } else {
            $user = $this->Users_model->get_by_email($this->input->post('email', TRUE));
            if ($user) {
                $resetkey = str_replace("-", "", $this->uuid->v4());
                $this->Users_model->update($user->id, array('resetkey' => $resetkey));
                $this->load->library('email');
            } else {
                $data = array(
                    'action' => site_url('auth/auth/reset_action'),
                    'step' => 1,
                    'redirect_back' => $this->session->userdata('redirect_back'),
                );

                $this->session->set_flashdata('message', 'Alamat Email Address tidak ditemukan. Pastikan penulisan alamat Email Address dengan benar!');
                $this->load->view("auth/auth/reset", $data);
            }
        }
    }

    public function _rules() {
        $this->form_validation->set_rules('username', 'username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'password', 'trim|required|xss_clean');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function _rules2() {
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|xss_clean');
        $this->form_validation->set_rules('step', 'step', 'trim|required|numeric|xss_clean');
    }

    public function _rules3() {
        $this->form_validation->set_rules('newpassword', 'newpassword', 'trim|required|xss_clean');
        $this->form_validation->set_rules('confpassword', 'confpassword', 'trim|required|xss_clean');
        $this->form_validation->set_rules('step', 'step', 'trim|required|numeric|xss_clean');
    }

}
