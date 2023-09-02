<?php

defined("BASEPATH") or exit("No direct script access allowed");

class Posts extends MY_Controller {

    static $type = 'post';

    function __construct() {
        parent::__construct();
        $this->load->model("app/Posts_model");
        $this->load->model("app/Categories_model");
    }

    public function index() {
        $slug = $this->uri->segment(3);
        $post = $this->Posts_model->get_by_slug(self::$type, $slug);
        $categories = $this->Categories_model->get_all();
        $latestpost = $this->Posts_model->get_limit_data(self::$type, $this->config->item('site_limit_post'), 0, NULL, array('poststatus' => 1));
        $popular = $this->Posts_model->get_popular_posts(self::$type, $this->config->item('site_limit_post'), 0, array('poststatus' => 1));
        if ($post) {
            $data = array(
                'template' => 'postdetail',
                'post' => $post,
                'related' => '',
                'latest' => $latestpost,
                'popular' => $popular,
                'categories' => $categories,
                'extrajs' => 'base/postdetail_extrajs',
            );
            $this->load->view('base/content', $data);
        } else {
            redirect(site_url('web/errors'));
        }
    }

    public function like($id) {
        $curlike = $this->Posts_model->get_by_id(self::$type, $id);
        if ($curlike) {
            $cl = $curlike->like + 1;
            $data = array('like' => $cl);
            $this->Posts_model->update(self::$type, $id, $data);
            echo json_encode(array('status' => 'success', 'like' => $cl));
        } else {
            echo json_encode(array('status' => 'error'));
        }
    }

}
