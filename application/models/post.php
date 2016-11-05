<?php

class Post extends CI_Model{

  function get_posts($num = 20, $start = 0){
    $this->db->select('*')->from('posts')->where('active', 1)->order_by('date_added', 'desc')->limit($num, $start);
    $sql = $this->db->get();
    return $query = $sql->result_array();
  }

  function get_posts_count(){
    $this->db->select('post_id')->from('posts')->where('active', 1);
    $query = $this->db->get();
    return $query->num_rows();
  }

  function get_post($post_id){
    $this->db->select()->from('posts')->where(array('post_id' => $post_id));
    $query = $this->db->get();
    return $query->first_row('array');
  }

  function insert_post($data){
    $this->db->insert('posts', $data);
    return $this->db->insert_id();
  }

  function update_post($post_id, $data){
    $this->db->where('post_id', $post_id);
    $this->db->update('posts', $data);
  }
  
  function delete_post($post_id){
    $this->db->where('post_id', $post_id);
    $this->db->delete('posts');
  }

}