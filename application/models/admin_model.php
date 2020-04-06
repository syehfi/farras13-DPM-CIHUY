<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{
    public function get($tabel)
    {
        return $this->db->get($tabel);
    }
    public function insert($tabel, $ins)
    {
        return $this->db->insert($tabel, $ins);
    }
    public function delete($col, $val, $tabel)
    {
        $this->db->where($col, $val);
        return $this->db->delete($tabel);
    }
    public function update($tabel, $obj, $where)
    {
        return $this->db->update($tabel, $obj, $where);
    }
<<<<<<< HEAD
    public function getW($tabel, $col, $val)
    {
        $this->db->where($col, $val);
        return $this->db->get($tabel);
    }
    public function getASP($s)
    {
        $this->db->join('kategori', 'kategori.KAT_ID = aspirasi.KAT_ID', 'left');
        $this->db->join('oki', 'oki.OKI_ID = aspirasi.OKI_ID', 'left');
        $this->db->where('status', $s);
=======
    //joinTable dalam bentuk array untuk valuenya
    public function getJoinWhere($tabel, $joinTabel, $joinOn, $where, $whereClause, $attr)
    {

        if ($where != null && $whereClause != null) {
            $this->db->where($where, $whereClause);
        }
        if ($joinTabel != null) {
            $this->db->join($joinTabel, $joinOn);
        }
        if ($attr != null) {
            $this->db->select($attr);
        }
        return $this->db->get($tabel);
    }
    public function getASP()
    {
        $this->db->join('kategori', 'kategori.KAT_ID = aspirasi.KAT_ID', 'left');
        $this->db->join('oki', 'oki.OKI_ID = aspirasi.OKI_ID', 'left');
        return $this->db->get('aspirasi');
    }
    public function getASPById($id)
    {
        $field = 'aspirasi.ASP_ID, kategori.KAT_NAMA, kategori.TUJUAN, users.NAMA, oki.OKI_NAMA, aspirasi.KONTEN, aspirasi.DATE';
        $this->db->join('kategori', 'kategori.KAT_ID = aspirasi.KAT_ID', 'left');
        $this->db->join('oki', 'oki.OKI_ID = aspirasi.OKI_ID', 'left');
        $this->db->join('users', 'users.NIM = aspirasi.NIM');
        $this->db->where('ASP_ID', $id);
        $this->db->select($field);
>>>>>>> 69a7d218283644e4a9032bede6f2998697520f61
        return $this->db->get('aspirasi');
    }
}
