<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Web extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Posts_model');
        $this->load->model('app/Categories_model');
    }

    public function index() {
        echo "test";
    }

}
