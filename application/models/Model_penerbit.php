<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_penerbit extends CI_Model {
    public function get_all_penerbit()
    {
        return $this -> db -> get('tb_penerbit');
    }
    public function simpan_penerbit($data)
    {
        $this -> db -> insert('tb_penerbit', $data);
    }
    public function hapus_penerbit($kode)
    {
        $this -> db -> where('kode_penerbit', $kode);
        return $this -> db -> delete('tb_penerbit');
    }
    public function get_penerbit_by_kode($kode)
    {
        return $this -> db -> get_where('tb_penerbit', array('kode_penerbit' => $kode));
    }
    public function update_penerbit($data, $kode)
    {
        // Lakukan update berdasarkan kode buku
        $this->db->where('kode_penerbit', $kode);
        $this->db->update('tb_penerbit', $data);
    }
}