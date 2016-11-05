<?php

/**
 * @property CI_Pagination $pagination
 * @property Post $post
 */

class Posts extends CI_Controller{

  function __construct(){
    parent::__construct();
    $this->load->model('post');
  }

  function index($start = 0){
    $data['posts'] = $this->post->get_posts(2, $start);
    $this->load->library('pagination');
    $config['base_url'] = base_url() . 'posts/index/';
    $config['total_rows'] = $this->post->get_posts_count();
    $config['per_page'] = 2;
    $this->pagination->initialize($config);
    $data['pages'] = $this->pagination->create_links();
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
        'active' => $_POST['active']
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
        'active' => $_POST['active']
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