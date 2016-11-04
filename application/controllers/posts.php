<?php

class Posts extends CI_Controller{

  function index(){
    $this->load->model('post');
    $data['posts'] = $this->post->get_posts();
    $this->load->view('post_index', $data);
  }

  function insert(){
    $data = array(
      'title' => 'This is third post',
      'post' => "It's awesome PHP framework for web application"
    );
    $this->load->model('post');
    $this->post->insert_post($data);
  }

  function update(){
    $data = array(
      'title' => 'This is five post',
      'post' => "Something wrong and I will change it"
    );
    $this->load->model('post');
    $this->post->update_post(5, $data);
  }

}