<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengeluaran extends CI_Controller
{

    public function __construct()
    {

        parent::__construct();
        $this->load->model('MdlPengeluaran');
    }

    public function index()
    {
        $getDataPengeluaran = $this->MdlPengeluaran->getPengeluaran('data_pengeluaran')->result();
        foreach ($getDataPengeluaran as $row) {
            $row->nama_donasi = $this->MdlPengeluaran->getNamaDonasi($row->id_donasi);
        }
        $data['tmpPengeluaran'] = $getDataPengeluaran;

        $this->load->view('pengeluaran/dataPengeluaran', $data);
    }


    public function add()
    {
        $data['donasiList'] = $this->MdlPengeluaran->getAllDonasi();
        $this->load->view('pengeluaran/tambahPengeluaran', $data);
    }

    public function create()
    {

        $nama_pengeluaran = $this->input->post('nama_pengeluaran');
        $id_donasi = $this->input->post('id_donasi');
        // $kategori_donasi = $this->input->post('kategori_donasi');
        // $target_donasi = $this->input->post('target_donasi');
        $perolehan_pengeluaran = $this->input->post('perolehan_pengeluaran');
        // $masa_donasi = $this->input->post('masa_donasi');
        $deskripsi_pengeluaran = $this->input->post('deskripsi_pengeluaran');

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        // $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        // $masa_aktif = $selisih / (60 * 60 * 24);

        $img = $this->input->post('img');
        // $img2 = $this->input->post('img2');
        // $img3 = $this->input->post('img3');
        // $img4 = $this->input->post('img4');
        // $img5 = $this->input->post('img5');

        // $reg = array(',00', 'Rp', '.');
        // $regStr = array('', '', '');

        // // $target_donasiStr = str_replace($reg, $regStr, $target_donasi);
        // $perolehan_pengeluaranStr = str_replace($reg, $regStr, $perolehan_pengeluaran);

        $dataInsert = array(

            'id_pengeluaran' => '',
            'nama_pengeluaran' => $nama_pengeluaran,
            'id_donasi' => $id_donasi,
            // 'kategori_donasi' => $kategori_donasi,
            // 'target_donasi' => $target_donasiStr,
            'perolehan_pengeluaran' => $perolehan_pengeluaran,
            // 'masa_donasi' => $masa_donasi,
            'deskripsi_pengeluaran' => $deskripsi_pengeluaran,
            'tgl_pengeluaran' => $dateNow,
            // 'masa_aktif' => $masa_aktif,
            'img' => 'front/images/donasi/' . $img,
            // 'img2' => 'front/images/donasi/' . $img2,
            // 'img3' => 'front/images/donasi/' . $img3,
            // 'img4' => 'front/images/donasi/' . $img4,
            // 'img5' => 'front/images/donasi/' . $img5

        );

        $this->MdlPengeluaran->insertPengeluaran('data_pengeluaran', $dataInsert);
        $this->session->set_flashdata('message', 'Success Tambah Pengeluaran');

        redirect(base_url('admin/Pengeluaran/add'));
    }

    public function edit($id_pengeluaran)
    {

        $where = array('id_pengeluaran' => $id_pengeluaran);

        $data['tmpPengeluaran'] = $this->MdlPengeluaran->editPengeluaran('data_pengeluaran', $where)->result();
        $data['donasiList'] = $this->MdlPengeluaran->getAllDonasi();
        $this->load->view('pengeluaran/editPengeluaran', $data);
    }

    public function update()
    {

        $id_pengeluaran = $this->input->post('id_pengeluaran');
        $nama_pengeluaran = $this->input->post('nama_pengeluaran');
        $id_donasi = $this->input->post('id_donasi');
        // $kategori_pengeluaran = $this->input->post('kategori_donasi');
        // $target_donasi = $this->input->post('target_donasi');
        $perolehan_pengeluaran = $this->input->post('perolehan_pengeluaran');
        // $masa_donasi = $this->input->post('masa_donasi');
        $deskripsi_pengeluaran = $this->input->post('deskripsi_pengeluaran');

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        // $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        // $masa_aktif = $selisih / (60 * 60 * 24); //60detik*60menit*24jam == seharian

        $img = $this->input->post('img');
        // $img2 = $this->input->post('img2');
        // $img3 = $this->input->post('img3');
        // $img4 = $this->input->post('img4');
        // $img5 = $this->input->post('img5');

        $reg = array(',00', 'Rp', '.');
        $regStr = array('', '', '');

        // $target_donasiStr = str_replace($reg, $regStr, $target_pengeluaran);
        $perolehan_pengeluaranStr = str_replace($reg, $regStr, $perolehan_pengeluaran);

        $dataUpdate = array(

            'nama_pengeluaran' => $nama_pengeluaran,
            'id_donasi' => $id_donasi,
            // 'kategori_donasi' => $kategori_donasi,
            // 'target_donasi' => $target_donasiStr,
            'perolehan_pengeluaran' => $perolehan_pengeluaranStr,
            // 'masa_donasi' => $masa_donasi,
            'deskripsi_pengeluaran' => $deskripsi_pengeluaran,
            // 'masa_aktif' => $masa_aktif

        );

        if (!empty($img)) {
            $dataUpdate['img'] = 'front/images/donasi/' . $img;
        }
        // if (!empty($img2)) {
        //     $dataUpdate['img2'] = 'front/images/donasi/' . $img2;
        // }
        // if (!empty($img3)) {
        //     $dataUpdate['img3'] = 'front/images/donasi/' . $img3;
        // }
        // if (!empty($img4)) {
        //     $dataUpdate['img4'] = 'front/images/donasi/' . $img4;
        // }
        // if (!empty($img5)) {
        //     $dataUpdate['img5'] = 'front/images/donasi/' . $img5;
        // }

        $where = array('id_pengeluaran' => $id_pengeluaran);

        $this->MdlPengeluaran->updatePengeluaran('data_pengeluaran', $where, $dataUpdate);
        $this->session->set_flashdata('message', 'Success Update Pengeluaran');

        redirect(base_url('admin/Pengeluaran'));
    }

    public function refresh()
    {

        date_default_timezone_set("Asia/Bangkok");
        $dateNow = date('Y-m-d H:m:s');

        // $selisih = strtotime($masa_donasi) - strtotime($dateNow);
        // $masa_aktif = $selisih / (60 * 60 * 24);

        // $dataUpdate = array(

        //     'masa_aktif' => $masa_aktif
        // );
    }

    public function delete($id_pengeluaran)
    {

        if ($id_pengeluaran > 0) {

            $where = array('id_pengeluaran' => $id_pengeluaran);

            $this->MdlPengeluaran->deletePengeluaran('data_pengeluaran', $where);
            $this->session->set_flashdata('message', 'Success Delete Pengeluaran');

            redirect(base_url('admin/Pengeluaran'));
        } else {

            redirect(base_url('admin/Pengeluaran'));
            exit;
        }
    }
}
