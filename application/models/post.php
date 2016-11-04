<?php

class Post extends CI_Model{

 function  get_posts($num = 20, $start = 0){
    $this->db->select('*');
    $this->db->from('posts');
    $this->db->where('active', 1);
    $this->db->where(array('active >=' => 1));
    $this->db->order_by('date_added', 'desc');
    $this->db->limit($num, $start);
    $sql = $this->db->get();
    return $query = $sql->result_array();
  }

}