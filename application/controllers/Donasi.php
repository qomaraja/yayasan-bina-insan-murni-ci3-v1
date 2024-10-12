<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MdlDonasi');
        $this->load->model('MdlPengeluaran');
        $this->load->model('MdlTransaksi');
    }

    public function detail($id_donasi)
    {
        date_default_timezone_set("Asia/Bangkok");

        // Proses data donasi
        $where = array('id_donasi' => $id_donasi);
        $data['donasi'] = $this->MdlDonasi->detailDonasi('data_donasi', $where)->result();

        // Proses data pengeluaran terkait donasi
        $data['pengeluaran'] = $this->MdlPengeluaran->getPengeluaranByDonasi($id_donasi);

        // Proses data pesan terkait donasi
        $data['transaksi'] = $this->MdlTransaksi->getTransaksiByDonasi($id_donasi);

        $this->load->view('detailDonasi', $data);
    }

    public function search()
    {
        $query = $this->input->get('query');
        $data['results'] = $this->MdlDonasi->search_donasi($query);
        $this->load->view('search', $data);
    }
}
