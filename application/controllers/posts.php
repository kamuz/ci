<?php

class Posts extends CI_Controller{

    function index(){
        $this->load->model('post');
        $data = $this->post->get_posts();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

}