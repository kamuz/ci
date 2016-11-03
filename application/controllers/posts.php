<?php

class Posts extends CI_Controller{
    function index(){
        $this->load->model('post');
        $data['posts'] = $this->post->get_posts();
        echo '<pre>';
        print_r($data['posts']);
        echo '</pre>';
    }
}
