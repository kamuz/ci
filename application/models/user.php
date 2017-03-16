<?php

class User extends CI_Model{

  function create_user($data){
    $this->db->insert('users', $data);
  }

  function login($username, $password){
    $this->db->select()->from('users');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get();
    return $query->first_row('array');
  }

  function get_emails(){
    $this->db->select('email')->from('users');
    $query = $this->db->get();
    return $query->result_array();
  }

}