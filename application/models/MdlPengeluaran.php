<?php
class MdlPengeluaran extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // Fungsi untuk mengambil detail pengeluaran berdasarkan ID donasi
    public function getPengeluaranByDonasi($id_donasi)
    {
        $this->db->where('id_donasi', $id_donasi);
        return $this->db->get('data_pengeluaran')->result();
    }

    // Fungsi untuk mengambil semua pengeluaran
    public function getAllPengeluaran()
    {
        return $this->db->get('data_pengeluaran')->result();
    }
}
