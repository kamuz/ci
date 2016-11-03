<?php

class Posts extends CI_Controller{

  function index(){
    $this->load->model('post');
    $data['posts'] = $this->post->get_posts();
    $this->load->view('post_index', $data);
  }

}