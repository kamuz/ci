<?php

class Users extends CI_Controller{

  function register(){
    if($_POST){
      $config = array(
        array(
          'field' => 'username',
          'label' => 'Username',
          'rules' => 'trim|required|min_length[3]|is_unique[users.username]'
        ),
        array(
          'field' => 'password',
          'label' => 'Password',
          'rules' => 'trim|required|min_length[5]'
        ),
        array(
          'field' => 'password2',
          'label' => 'Password confirmed',
          'rules' => 'trim|required|min_length[5]|matches[password]'
        ),
        array(
          'field' => 'user_type',
          'label' => 'User Type',
          'rules' => 'required'
        ),
        array(
          'field' => 'email',
          'label' => 'Email',
          'rules' => 'trim|required|is_unique[users.email]|valid_email'
        )
      );
      $this->load->library('form_validation');
      $this->form_validation->set_rules($config);
      if($this->form_validation->run() == false){
        $data['errors '] = validation_errors();
      }
      else{
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
    }
    $this->load->helper('form');
    $this->load->view('register_user');
  } 

  function login(){
    $data['error'] = 0;
    if($_POST){
      $this
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