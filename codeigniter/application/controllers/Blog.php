<?php

class Blog extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->load->view('header');
        $data['title'] = "This is Title";
        $data['content'] = "This is The Contents";
        $this->load->view('blog_view', $data);
    }
}

?>
