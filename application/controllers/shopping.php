<?php

class Shopping extends CI_Controller{

  function index() {
    $this->load->helper('form');
    $this->load->library('cart');
    $this->load->view('shopping');
  }

  function update() {
    $this->load->library('cart');
    $this->cart->update($_POST);
    redirect(base_url().'shopping');
  }

  function add_variables() {
    $this->load->library('cart');
    $data=array(
      array(
        'id' => 'sku_123',
        'qty' => 1,
        'price' => 39.95,
        'name' => 'T-Shirt',
        'options' => array('Size' => 'L', 'Color' => 'Red')
      ),
      array(
        'id' => 'sku_321',
        'qty' => 1,
        'price' => 29.95,
        'name' => 'Sugar'
      ),
      array(
        'id' => 'sku_111',
        'qty' => 1,
        'price' => 1.95,
        'name' => 'Coffee'
      ),
    );

    $this->cart->insert($data);
  }

}