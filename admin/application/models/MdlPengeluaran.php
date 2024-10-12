<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MdlPengeluaran extends CI_Model
{
    public function getPengeluaran($table)
    {

        return $this->db->get($table);
    }
    public function detailPengeluaran($table, $where)
    {

        return $this->db->get_where($table, $where);
    }

    public function update($id, $data)
    {
        $query = $this->db->where("id_pengeluaran", $id)->update("data_pengeluaran", $data);
        return $query;
    }
    public function insertPengeluaran($table, $data)
    {

        $this->db->insert($table, $data);
    }

    public function editPengeluaran($table, $where)
    {

        return $this->db->get_where($table, $where);
    }

    public function updatePengeluaran($table, $where, $data)
    {

        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function deletePengeluaran($table, $where)
    {

        $this->db->delete($table, $where);
    }

    public function getNamaDonasi($id_donasi)
    {
        $this->db->select('nama_donasi');
        $this->db->from('data_donasi'); // Ganti 'table_donasi' dengan nama tabel donasi Anda
        $this->db->where('id_donasi', $id_donasi);
        $query = $this->db->get();

        if ($query->num_rows() > 0) {
            return $query->row()->nama_donasi;
        } else {
            return null; // Atau return pesan error atau nilai default sesuai kebutuhan Anda
        }
    }


    public function getAllDonasi()
    {
        $result = $this->db->get('data_donasi')->result();
        return $result;
    }
}
