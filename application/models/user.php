<?php

class User extends CI_Model{

  function create_user($data){
    $this->db->insert('users', $data);
  }

  function login($username, $password, $user_type){
    $where = array(
      'username' => $username,
      'password' => ($password),
      'user_type' => $user_type
    );
    $this->db->select()->from('users')->where($where);
    $query = $this->db->get();
    return $query->first_row('array');
  }

}