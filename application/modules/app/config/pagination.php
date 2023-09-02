<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * Pagination Config Bootstrap 3 CSS Style
 * harviacode.com
 */

$config['query_string_segment'] = 'start';

$config['full_tag_open'] = '<nav><ul class="pagination justify-content-end pagination-sm" style="margin-top:0px">';
$config['full_tag_close'] = '</ul></nav>';

$config['first_link'] = 'Kepala';
$config['first_tag_open'] = '<li class="page-item">';
$config['first_tag_close'] = '</li>';

$config['last_link'] = 'Buntut';
$config['last_tag_open'] = '<li class="page-item">';
$config['last_tag_close'] = '</li>';

$config['next_link'] = 'Maju';
$config['next_tag_open'] = '<li class="page-item">';
$config['next_tag_close'] = '</li>';

$config['prev_link'] = 'Mundur';
$config['prev_tag_open'] = '<li class="page-item">';
$config['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" >';
$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';

$config['num_tag_open'] = '<li class="page-item">';
$config['num_tag_close'] = '</li>';

/* End of file pagination.php */
/* Location: ./application/config/pagination.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-06-21 12:45:38 */
/* http://harviacode.com */