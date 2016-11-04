<?php

class Post extends CI_Model{

 function  get_posts($num = 20, $start = 0){
    $this->db->select('*')->from('posts')->order_by('date_added', 'desc');
    $sql = $this->db->get();
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