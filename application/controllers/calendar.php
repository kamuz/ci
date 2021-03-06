<?php

class Calendar extends CI_Controller{

  function index($year=false,$month=false) {
    $prefs = array(
      'show_next_prev' => TRUE,
      'next_prev_url' => base_url().'calendar/index/'
    );
    $prefs['template'] = '

       {table_open}<table border="0" cellpadding="0" cellspacing="0" width="600">{/table_open}

       {heading_row_start}<tr>{/heading_row_start}

       {heading_previous_cell}<th height="25"><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
       {heading_title_cell}<th height="25" colspan="{colspan}">{heading}</th>{/heading_title_cell}
       {heading_next_cell}<th height="25"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

       {heading_row_end}</tr>{/heading_row_end}

       {week_row_start}<tr>{/week_row_start}
       {week_day_cell}<td height="25">{week_day}</td>{/week_day_cell}
       {week_row_end}</tr>{/week_row_end}

       {cal_row_start}<tr>{/cal_row_start}
       {cal_cell_start}<td height="50">{/cal_cell_start}

       {cal_cell_content}<a href="{content}">{day}</a>{/cal_cell_content}
       {cal_cell_content_today}<div class="highlight"><a href="{content}">{day}</a></div>{/cal_cell_content_today}

       {cal_cell_no_content}{day}{/cal_cell_no_content}
       {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

       {cal_cell_blank}&nbsp;{/cal_cell_blank}

       {cal_cell_end}</td>{/cal_cell_end}
       {cal_row_end}</tr>{/cal_row_end}

       {table_close}</table>{/table_close}
    ';
    if($year==false) {
      $year=date('Y');
    }
    if($month==false) {
      $month=date('m');
    }
    $data = array(
      3 => base_url() . 'posts/post/6',
    );
    $this->load->library('calendar',$prefs);
    echo $this->calendar->generate($year,$month,$data);
  }

}