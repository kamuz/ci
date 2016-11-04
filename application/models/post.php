<?php

class Post extends CI_Model{

 function  get_posts($num = 20, $start = 0){
    $sql = $this->db->get_where('posts', array('active' => 1), $num, $start);
    return $query = $sql->result_array();
  }

  function insert_post($data){
    $this->db->insert('posts', $data);
  }

  function update_post($post_id, $data){
    $this->db->where('post_id', $post_id);
    $this->db->update('posts', $data);
  }

}