<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_m');
    }


    public function index()
    {
        // Database PO//
        $querymapapo = "SELECT tglisi FROM po WHERE namapt LIKE 'PT.MITRA AGRO PERSADA ABADI%' ORDER BY id DESC LIMIT 1;";
        $querymsalpo = "SELECT tglisi FROM po WHERE namapt LIKE 'PT.MULIA SAWIT AGRO LESTARI%' ORDER BY id DESC LIMIT 1;";
        $querypeakpo = "SELECT tglisi FROM po WHERE namapt LIKE 'PT.PERSADA ERA AGRO KENCANA%' ORDER BY id DESC LIMIT 1;";
        $querypsampo = "SELECT tglisi FROM po WHERE namapt LIKE 'PT.PERSADA SEJAHTERA AGRO MAKMUR%' ORDER BY id DESC LIMIT 1;";
        $querykpppo = "SELECT tglisi FROM po WHERE namapt LIKE 'PT. KERENG PANGI PERDANA%' ORDER BY id DESC LIMIT 1;";
        $data['last_pomapa'] = $this->db->query($querymapapo)->row_array();
        $data['last_pomsal'] = $this->db->query($querymsalpo)->row_array();
        $data['last_popeak'] = $this->db->query($querypeakpo)->row_array();
        $data['last_popsam'] = $this->db->query($querypsampo)->row_array();
        $data['last_pokpp'] = $this->db->query($querykpppo)->row_array();

        //DATABASE REGULASI //
        $querydokumen = "SELECT tgl_upload FROM regulasi.master_dokumen ORDER BY no_urut DESC LIMIT 1;";
        $data['last_document'] = $this->db->query($querydokumen)->row_array();

        //DATABASE MEWNET TABEL TRANSACTION //
        $querydokumen = "SELECT CreatedDateTime FROM mewnetmysql.tbltransactions ORDER BY ID DESC LIMIT 1;";
        $data['last_transaction'] = $this->db->query($querydokumen)->row_array();

        // var_dump($data['last_transaction']);

        $this->template->load('template', 'dashboard/v_Dashboard', $data);
    }

    public function timestamp()
    {

        date_default_timezone_set("Asia/Bangkok");
        echo $timestamp = date('Y-m-d H:i:s');
        json_encode($timestamp);
    }
}
