<?php

class Comment extends CI_Model{

  function add_comment($data){
    $this->db->insert('comments', $data);
  }

  function get_comments($post_id){
    $this->db->select('comments.*, users.username')->from('comments')->join('users', 'users.user_id = comments.user_id', 'left')->where('post_id', $post_id)->order_by('comments.date_added', 'asc');
    $query = $this->db->get();
    return $query->result_array();
  }

}