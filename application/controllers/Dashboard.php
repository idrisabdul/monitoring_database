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

        //script
        // echo "<script>
        // setTimeout(function () { window.location.reload(); }, 1*60*1000);
        // // just show current time stamp to see time of last refresh.
        // document.write(new Date());
        // </script>";

        $this->template->load('template', 'dashboard/v_Dashboard', $data);
    }

    public function updatePo()
    {
        // $this->db->empty_table('po');
        $this->db->empty_table('po');
        // $this->db->empty_table('item_po');

        // // PT MAPA
        // $query_po_mapa = "INSERT INTO msalgrou_logistiktransit_ho.po SELECT * FROM msalgrou_logistikmapa.po";
        // $this->db->query($query_po_mapa);
        // $query_itempo_mapa = "INSERT INTO msalgrou_logistiktransit_ho.item_po SELECT * FROM msalgrou_logistikmapa.item_po";
        // $this->db->query($query_itempo_mapa);

        // // PT MSAL
        // $query_po_msal = "INSERT INTO msalgrou_logistiktransit_ho.po SELECT id, kd_dept, ket_dept, grup, kode_budet, kd_subbudget, ket_subbudget, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tgl_reftxt, tglpo, tglpotxt, tglppo, tglpotxt, bayar, tempo_bayar, lokasikirim, tempo_kirim, lokasi_beli, ket, kodept, namapt, no_acc, ket_acc, periode, periodetxt, thn, tglisi, user, ppn, totalbayar, ket_kirim, lokasi, noreftxt, uangmuka, voucher, terbayar, nopp, batal, kirim FROM msalgrou_logistikmsal.po";
        // $this->db->query($query_po_msal);
        // $query_itempo_msal = "INSERT INTO msalgrou_logistiktransit_ho.item_po SELECT * FROM msalgrou_logistikmsal.item_po";
        // $this->db->query($query_itempo_msal);

        // // PT PEAK
        // $query_po_peak = "INSERT INTO msalgrou_logistiktransit_ho.po SELECT * FROM msalgrou_logistikpeak.po";
        // $this->db->query($query_po_peak);
        // $query_itempo_peak = "INSERT INTO msalgrou_logistiktransit_ho.item_po SELECT * FROM msalgrou_logistikpeak.item_po";
        // $this->db->query($query_itempo_peak);

        // // PT PSAM
        // $query_po_psam = "INSERT INTO msalgrou_logistiktransit_ho.po SELECT id, kd_dept, ket_dept, grup, kode_budet, kd_subbudget, ket_subbudget, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tgl_reftxt, tglpo, tglpotxt, tglppo, tglpotxt, bayar, tempo_bayar, lokasikirim, tempo_kirim, lokasi_beli, ket, kodept, namapt, no_acc, ket_acc, periode, periodetxt, thn, tglisi, user, ppn, totalbayar, ket_kirim, lokasi, noreftxt, uangmuka, voucher, terbayar, nopp, batal, kirim FROM msalgrou_logistikpsam.po";
        // $this->db->query($query_po_psam);
        // $query_itempo_psam = "INSERT INTO msalgrou_logistiktransit_ho.item_po SELECT * FROM msalgrou_logistikpsam.item_po";
        // $this->db->query($query_itempo_psam);

        // // PT KPP
        // $query_po_kpp = "INSERT INTO msalgrou_logistiktransit_ho.po SELECT id, kd_dept, ket_dept, grup, kode_budet, kd_subbudget, ket_subbudget, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tgl_reftxt, tglpo, tglpotxt, tglppo, tglpotxt, bayar, tempo_bayar, lokasikirim, tempo_kirim, lokasi_beli, ket, kodept, namapt, no_acc, ket_acc, periode, periodetxt, thn, tglisi, user, ppn, totalbayar, ket_kirim, lokasi, noreftxt, uangmuka, voucher, terbayar, nopp, batal, kirim FROM msalgrou_logistikkpp.po";
        // $this->db->query($query_po_kpp);
        // $query_itempo_kpp = "INSERT INTO msalgrou_logistiktransit_ho.item_po SELECT * FROM msalgrou_logistikkpp.item_po";
        // $this->db->query($query_itempo_kpp);

        //testing
        $query_po = "INSERT INTO po.po SELECT id, kd_dept, ket_dept, grup, kode_budet, kd_subbudget, ket_subbudget, kode_supply, nama_supply, kode_pemesan, pemesan, nopo, nopotxt, noppo, noppotxt, no_refppo, tgl_refppo, tgl_reftxt, tglpo, tglpotxt, tglppo, tglpotxt, bayar, tempo_bayar, lokasikirim, tempo_kirim, lokasi_beli, ket, kodept, namapt, no_acc, ket_acc, periode, periodetxt, thn, tglisi, user, ppn, totalbayar, ket_kirim, lokasi, noreftxt, uangmuka, voucher, terbayar, nopp, batal, kirim FROM msalgrou_logistiktransit_mon.po";
        $data = $this->db->query($query_po);

        // echo "<h1 class='bg-white'>php executed</h1>";
        $data = '';
        echo json_encode($data);
    }

    public function timestamp()
    {

        date_default_timezone_set("Asia/Bangkok");
        echo $timestamp = date('Y-m-d H:i:s');
        json_encode($timestamp);
    }
}
