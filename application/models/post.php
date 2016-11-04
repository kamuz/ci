<?php

class Post extends CI_Model{

 function  get_posts($num = 20, $start = 0){
    // $this->db->select('*');
    // $this->db->from('posts');
    // $this->db->where('active', 1);
    // $this->db->where(array('active >=' => 1));
    // $this->db->order_by('date_added', 'desc');
    // $this->db->limit($num, $start);
    // $this->db->join('users', 'users.user_id' = 'posts.user_id', 'left');
    $sql = $this->db->get_where('posts', array('active' => 1), $num, $start);
    return $query = $sql->result_array();
  }

}