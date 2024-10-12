<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlDonasi extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function search_donasi($query)
    {
        $this->db->like('nama_donasi', $query);
        $this->db->or_like('deskripsi_donasi', $query);
        $query = $this->db->get('data_donasi');
        return $query->result();
    }

    public function getDonasi($table)
    {

        return $this->db->get($table);
    }

    public function detailDonasi($table, $where)
    {

        return $this->db->get_where($table, $where);
    }

    public function update($id, $data)
    {

        $query = $this->db->where("id_donasi", $id)->update("data_donasi", $data);
        return $query;
    }

    public function masaAktif($data, $table, $where)
    {

        $this->db->where('id_donasi', $where);
        $this->db->update($table, $data);
    }

    public function save_donation($nama_donatur, $is_anonim)
    {
        $data = array(
            'nama_donatur' => $nama_donatur,
            'is_anonim' => $is_anonim
        );
        return $this->db->insert('data_transaksi', $data);
    }

    public function get_donations()
    {
        $this->db->select('nama_donatur, is_anonim');
        $query = $this->db->get('data_transaksi');
        return $query->result_array();
    }
}
