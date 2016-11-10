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

    echo $this->session->userdata('captcha');

    if(strtolower($this->session->userdata('captcha')) == strtolower($_POST['captcha'])){
      $this->load->model('comment');  
      $data = array(
        'post_id' => $post_id,
        'user_id' => $this->session->userdata('user_id'),
        'comment' => $_POST['comment']
      );
      $this->comment->add_comment($data);
      redirect(base_url() . 'posts/post/' . $post_id);
    }
    else{
      echo '<p>Your captcha code was incorrect! You typed in ' . $_POST['captcha'] . ' and the code was ' . $this->session->userdata('captcha') . '</p>';
    }
  }

}