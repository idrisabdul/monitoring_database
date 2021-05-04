<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_m extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function showLpb()
    {
        $this->db->select('nabar, suplier, tglinput');
        $this->db->from('lpb');
        return $this->db->get('')->result_array();
    }

    public function showBkb()
    {
        $this->db->select('nabar, suplier, tglinput');
        $this->db->from('bkb');
        return $this->db->get('')->result_array();
    }

    public function lastBkb()
    {
        $this->db->select('nabar, suplier, tglinput');
        $this->db->from('bkb');
        return $this->db->get('')->result_array();
    }

    public function getTable()
    {
        // $query = "select column_name from information_schema.columns
        // where table_schema = 'msalgrou_logistiktransit_ho'
        // order by table_name";
        $query = "SELECT table_name, table_rows, create_time, update_time
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = 'msalgrou_logistiktransit_ho'";
        return $this->db->query($query)->result_array();
    }

    public function getTableWithus()
    {
        // $query = "select column_name from information_schema.columns
        // where table_schema = 'msalgrou_logistiktransit_ho'
        // $db2 = $this->load->database('db2', TRUE);
        // order by table_name";
        $query = "SELECT table_name, table_rows, create_time, update_time
        FROM INFORMATION_SCHEMA.TABLES 
        WHERE TABLE_SCHEMA = 'withus'";
        return $this->db->query($query)->result_array();
    }
}
