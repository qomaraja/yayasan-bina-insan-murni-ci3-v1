<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlTransaksi extends CI_Model
{

    public function getTransaksi($table)
    {
        return $this->db->get_where($table);
    }

    public function detailTransaksi($table, $where)
    {

        return $this->db->get_where($table, $where);
    }

    public function getTransaksiByDonasi($id_donasi)
    {
        $this->db->where('id_donasi', $id_donasi);
        return $this->db->get('data_transaksi')->result();
    }
}
