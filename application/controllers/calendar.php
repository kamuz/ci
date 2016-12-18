<?php

class Calendar extends CI_Controller{

  function index($year=false,$month=false) {
    $prefs = array(
      'show_next_prev' => TRUE,
      'next_prev_url' => base_url().'calendar/index/'
    );
    if($year==false) {
      $year=date('Y');
    }
    if($month==false) {
      $month=date('m');
    }
    $this->load->library('calendar',$prefs);
    echo $this->calendar->generate($year,$month);
  }

}