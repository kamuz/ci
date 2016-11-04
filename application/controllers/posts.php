<?php

class Posts extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('post');
  }

  function index(){
    $data['posts'] = $this->post->get_posts();
    $this->load->view('post_index', $data);
  }

  function post($post_id){
    $data['post'] = $this->post->get_post($post_id);
    $this->load->view('post', $data);
  }

  function insert(){
    $data = array(
      'title' => 'This is third post',
      'post' => "It's awesome PHP framework for web application"
    );
    $this->post->insert_post($data);
  }

  function update(){
    $data = array(
      'title' => 'This is five post',
      'post' => "Something wrong and I will change it"
    );
    $this->post->update_post(5, $data);
  }

}