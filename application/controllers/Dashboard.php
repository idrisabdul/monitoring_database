<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dashboard_m');
        date_default_timezone_set("Asia/Bangkok");
    }


    public function index()
    {
        // DATABASE PO//
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

        // DATABASE ABSENSI
        $query_abs_msal = "SELECT tgl FROM absen.absensi_msal ORDER BY id DESC LIMIT 1;";
        $query_abs_mapa = "SELECT tgl FROM absen.absensi_mapa ORDER BY id DESC LIMIT 1;";
        $query_abs_peak = "SELECT tgl FROM absen.absensi_peak ORDER BY id DESC LIMIT 1;";
        $query_abs_psam = "SELECT tgl FROM absen.absensi_psam ORDER BY id DESC LIMIT 1;";
        $data['last_abs_msal'] = $this->db->query($query_abs_msal)->row_array();
        $data['last_abs_mapa'] = $this->db->query($query_abs_mapa)->row_array();
        $data['last_abs_peak'] = $this->db->query($query_abs_peak)->row_array();
        $data['last_abs_psam'] = $this->db->query($query_abs_psam)->row_array();

        //DATABASE REGULASI //
        $querydokumen = "SELECT tgl_upload FROM regulasi.master_dokumen ORDER BY no_urut DESC LIMIT 1;";
        $data['last_document'] = $this->db->query($querydokumen)->row_array();

        //DATABASE MEWNET TABEL TRANSACTION //
        $querytransaction = "SELECT CreatedDateTime FROM mewnetmysql.tbltransactions ORDER BY ID DESC LIMIT 1;";
        $data['last_transaction'] = $this->db->query($querytransaction)->row_array();

        // echo '<pre>';
        // var_dump($data);
        // echo '</pre>';
        $this->template->load('template', 'dashboard/v_Dashboard', $data);
    }

    public function timestamp()
    {

        date_default_timezone_set("Asia/Bangkok");
        echo $timestamp = date('Y-m-d H:i:s');
        json_encode($timestamp);
    }
}
