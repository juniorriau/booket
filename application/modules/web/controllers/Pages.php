<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends MY_Controller {

    static $type = "page";

    function __construct() {
        parent::__construct();
        $this->load->model('app/Posts_model');
    }

    public function index() {
        $slug = $this->uri->segment(3);
        $page = $this->Posts_model->get_by_slug(self::$type, $slug);
        if ($page) {
            $data = array(
                'template' => 'pages',
                'page' => $page,
            );
            $this->load->view('base/content', $data);
        } else {
            redirect(site_url('web/errors'));
        }
    }

}
