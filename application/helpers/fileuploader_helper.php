<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * mapres uploader file helper
 */
if (!function_exists('fileuploader')) {


    function fileuploader($file, $input, $prefixname = NULL, $type = 'jpg|jpeg|png|pdf', $uploadpath = NULL) {

        $result = array();
        //initialize config
        $config['upload_path'] = $uploadpath ? $uploadpath : 'public/uploads/' . date("Y") . "/" . date("m");
        $config['allowed_types'] = $type;
        $config['max_size'] = 5120;
        $config['max_width'] = 0;
        $config['max_height'] = 0;
        $config['overwrite'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $config['file_name'] = $prefixname . $file[$input]['name'];
        get_instance()->upload->initialize($config);

        if (!file_exists($config['upload_path'])) {
            mkdir($config['upload_path'], 0755, true);
        }


        if (!empty($file[$input]['name'])) {
            if (get_instance()->upload->do_upload($input)) {
                $file = array(
                    'filename' => get_instance()->upload->data('file_name'),
                    'filepath' => $config['upload_path'],
                    'fullpath' => $config['upload_path'] . "/" . get_instance()->upload->data('file_name'),
                    'filetype' => get_instance()->upload->data('file_type'),
                );
                $result['message'] = $file;
                $result['status'] = 'success';
            } else {
                $result['status'] = 'error';
                $result['message'] = get_instance()->upload->display_errors();
            }
        }
        return $result;
    }

}
if (!function_exists("file_validation")) {

    function file_validation($file, $type = 'jpg|jpeg|png|pdf') {
        $allowmimes = get_mimes();
        $allowed = explode("|", $type);
        $mime = get_mime_by_extension($_FILES[$file]['name']);
        if (isset($_FILES[$file]['name']) && $_FILES[$file]['name'] != "") {
            foreach ($allowed as $am => $m) {
                if (in_array($m, $allowmimes)) {
                    return true;
                } else {
                    $this->form_validation->set_message('file_validation', 'Please select only' . str_replace("|", "/", $type), '  file.');
                    return false;
                }
            }
        } else {
            $this->form_validation->set_message('file_validation', 'Please choose a file to upload.');
            return false;
        }
    }

}