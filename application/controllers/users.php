<?php

class Users extends CI_Controller{

  function register(){
    if($_POST){
      $data = array(
        'username' => $_POST['username'],
        'password' => ($_POST['password']),
        'user_type' => $_POST['user_type']
      );
      $this->load->model('user');
      $user_id = $this->user->create_user($data);
      $this->session->set_userdata('user_id', $user_id);
      $this->session->set_userdata('user_type', $_POST['user_type']);
      redirect(base_url() . 'posts');
    }
    $this->load->helper('form');
    $this->load->view('register_user');
  } 

  function login(){
    $data['error'] = 0;
    if($_POST){
      $this->load->model('user');
      $username = $this->input->post('username', true);
      $password = $this->input->post('password', true);
      $user_type = $this->input->post('user_type', true);
      $user = $this->user->login($username, $password, $user_type);
      if(!$user){
        $data['error'] = 1;
      }
      else{
        $this->session->set_userdata('user_id', $user['user_id']);
        $this->session->set_userdata('user_type', $user['user_type']);
        redirect(base_url() . 'posts');
      }
    }
    $this->load->view('login', $data);
  }

  function logout(){
    $this->session->sess_destroy();
    redirect(base_url() . 'posts');
  }

}