<?php

class Product extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('product_model');
    }

    function index() {
        $this->load->view('header');
        $data['product'] = $this->product_model->get_product();
        $this->load->view('product_view', $data);
        $this->load->view('footer');
    }

    function add_new() {
        $this->load->view('header');
        $this->load->view('add_product_view');
        $this->load->view('footer');
    }

    function save() {
        $product_name = $this->input->post('product_name');
        $product_price = $this->input->post('product_price');
        $this->product_model->save($product_name, $product_price);
        redirect('product');
    }
}

?>
