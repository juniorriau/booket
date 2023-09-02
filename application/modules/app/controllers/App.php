<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class App extends MY_Controller {

    public function __construct() {
        parent::__construct();
        parent::_auth($this->uri->uri_string());
        $this->sess = $this->session->logged_in;
    }

    public function index() {

        $data = array(
            "template" => 'app/app/dashboard',
            "session" => $this->sess,
        );
        $this->load->view('base/content', $data);
    }

}
