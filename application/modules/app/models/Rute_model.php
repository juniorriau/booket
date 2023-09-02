<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rute_model extends CI_Model
{

    public $table = 'rute';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('guuid', $q);
	$this->db->or_like('koderute', $q);
	$this->db->or_like('kotaasal', $q);
	$this->db->or_like('kotatujuan', $q);
	$this->db->or_like('perusahaan', $q);
	$this->db->or_like('createdat', $q);
	$this->db->or_like('createdby', $q);
	$this->db->or_like('updatedat', $q);
	$this->db->or_like('updatedby', $q);
	$this->db->or_like('armada', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('guuid', $q);
	$this->db->or_like('koderute', $q);
	$this->db->or_like('kotaasal', $q);
	$this->db->or_like('kotatujuan', $q);
	$this->db->or_like('perusahaan', $q);
	$this->db->or_like('createdat', $q);
	$this->db->or_like('createdby', $q);
	$this->db->or_like('updatedat', $q);
	$this->db->or_like('updatedby', $q);
	$this->db->or_like('armada', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Rute_model.php */
/* Location: ./application/models/Rute_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2023-09-02 04:30:09 */
/* http://harviacode.com */