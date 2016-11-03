<?php

class Post extends CI_Model{

 function  get_posts(){
    $this->db->select()->from('posts')->order_by('date_added', 'desc')->where('active', 1);
    $sql = $this->db->get();
    return $query = $sql->result_array();
  }

}