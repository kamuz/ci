<?php

class Post extends CI_Model{
   
   function get_posts($num = 20, $start = 0){
       // $sql = "SELECT * FROM posts";
       $this->db->select()->from('posts')->where('active', 1)->order_by('date_added', 'desc')->limit(0, 20);
       // $query = mysql_query($sql);
       $query = $this->db->get();
       return $query->result_array();
   }
    
}