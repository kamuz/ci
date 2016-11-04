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

  function add(){
    if($_POST){
      $data = array(
        'title' => $_POST['title'],
        'post' => $_POST['post'],
        'active' => 1,
      );
      $this->post->insert_post($data);
      redirect(base_url() . 'posts/');
    }
    else{
      $this->load->view('new_post');
    }
  }

  function edit($post_id){
    $data['success'] = 0;
    if($_POST){
      $data_post = array(
        'title' => $_POST['title'],
        'post' => $_POST['post'],
        'active' => 1
      );
      $this->post->update_post($post_id, $data_post);
      $data['success'] = 1;
    }
    $data['post'] = $this->post->get_post($post_id);
    $this->load->view('edit_post', $data);
  }

  function delete($post_id){
    $this->post->delete_post($post_id);
    redirect(base_url() . '/posts');
  }

}