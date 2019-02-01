<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_iklan_admin extends CI_Model
{

    public $table = 'iklan';
    public $id = 'id_iklan';

    function __construct()
    {
        parent::__construct();
    }

    // datatables


    // get all
    function get_all()
    {
        $this->db->query("Select*From iklan");
        $this->db->where("verifikasi_iklan= 'iklan disetujui'Or 'iklan ditolak'");
        return $this->db->get($this->table)->result();
    }


    function get_by_id($id)
    {
        $this->db->where($this->table.".".$this->id, $id);
        $this->db->select('*')->from($this->table);
        return $this->db->get()->row();
    }


  
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_iklan', $q);
    $this->db->or_like('id_user', $q);
    $this->db->or_like('id_admin', $q);
    $this->db->or_like('judul_iklan', $q);
    $this->db->or_like('type_mobil', $q);
    $this->db->or_like('merk', $q);
    $this->db->or_like('transmisi', $q);
    $this->db->or_like('tahun_mobil', $q);
    $this->db->or_like('no_telp', $q);
    $this->db->or_like('alamat', $q);
    $this->db->or_like('deskripsi', $q);
    $this->db->or_like('harga', $q);
    $this->db->or_like('status_iklan', $q);
    $this->db->or_like('verifikasi_iklan', $q);
    $this->db->or_like('tgl_iklan', $q);
    $this->db->or_like('photo1', $q);
    $this->db->or_like('photo2', $q);
    $this->db->or_like('photo3', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
    $this->db->order_by($this->id, $this->order);
    $this->db->like('id_iklan', $q);
    $this->db->or_like('id_user', $q);
    $this->db->or_like('id_admin', $q);
    $this->db->or_like('judul_iklan', $q);
    $this->db->or_like('type_mobil', $q);
    $this->db->or_like('merk', $q);
    $this->db->or_like('transmisi', $q);
    $this->db->or_like('tahun_mobil', $q);
    $this->db->or_like('no_telp', $q);
    $this->db->or_like('alamat', $q);
    $this->db->or_like('deskripsi', $q);
    $this->db->or_like('harga', $q);
    $this->db->or_like('status_iklan', $q);
    $this->db->or_like('verifikasi_iklan', $q);
    $this->db->or_like('tgl_iklan', $q);
    $this->db->or_like('photo1', $q);
    $this->db->or_like('photo2', $q);
    $this->db->or_like('photo3', $q);
    	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

  }
