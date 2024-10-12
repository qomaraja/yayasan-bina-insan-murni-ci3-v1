<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Payment extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->config('midtrans');
        \Midtrans\Config::$serverKey = $this->config->item('midtrans_server_key');
        \Midtrans\Config::$isProduction = $this->config->item('midtrans_is_production');
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    }

    public function token()
    {
        $jumlah_donasi = $this->input->post('jumlah_donasi');
        $nama_donatur = $this->input->post('nama_donatur');
        $no_telp_donatur = $this->input->post('no_telp_donatur');

        $transaction_details = array(
            'order_id' => rand(),
            'gross_amount' => $jumlah_donasi, // misalnya harga adalah 10000
        );

        $item1_details = array(
            'id' => 'a1',
            'price' => $jumlah_donasi,
            'quantity' => 1,
            'name' => "Donasi"
        );

        $item_details = array($item1_details);

        $customer_details = array(
            'first_name'    => $nama_donatur,
            'phone'         => $no_telp_donatur,
        );

        $transaction = array(
            'transaction_details' => $transaction_details,
            'customer_details' => $customer_details,
            'item_details' => $item_details,
        );

        $snapToken = \Midtrans\Snap::getSnapToken($transaction);
        echo $snapToken;
    }

    public function finish()
    {
        $result = json_decode($this->input->post('result_data'), true);
        echo 'RESULT <br><pre>';
        var_dump($result);
        echo '</pre>';
    }
}
