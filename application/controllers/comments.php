<?php

class Comments extends CI_Controller{

  function add_comment($post_id){
    if(!$_POST){
      redirect(base_url() . 'posts/post/' . $post_id);
    }

    $user_type = $this->session->userdata('user_type');
    if(!$user_type){
      redirect(base_url() . 'users/login');
    }

    $this->load->model('comment');
    $data = array(
      'post_id' => $post_id,
      'user_id' => $this->session->userdata('user_id'),
      'comment' => $_POST['comment']
    );
    $this->comment->add_comment($data);
    redirect(base_url() . 'posts/post/' . $post_id);
  }

}