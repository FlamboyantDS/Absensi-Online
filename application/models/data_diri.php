<?php
class Data_diri extends CI_Model{
    /*public function get_all_data_diri(){
        $this->db->select('*');
        $this->db->from('data_diri');
        return $this->db->get()->result();
    }*/
    public function get_all_data_diri(){
        $this->db->select('*');
        $this->db->from('db_karyawan');
        return $this->db->get()->result();
    }

    public function get_all_data_diri_kondisi(){
        $this->db->select('*');
        $this->db->where('nama','adit');
        $this->db->from('data_diri');
        return $this->db->get()->row();
    }

    /*public function insert_data($data){
        $this->db->insert('data_diri',$data);
    }*/
    
    public function insert_data_karyawan($data){
        $this->db->insert('data_diri',$data);
    }
    
    public function update_data($data){
        $this->db->where('nama','adit');
        $this->db->update('data_diri',$data);
    }

    public function delete_data(){
        $this->db->where('nama','aditya');
        $this->db->delete('data_diri');
    }

    public function get_all_data_diri_with_join(){
        $this->db->select('nama, alamat, nik, jenis_kelamin, agama');
        $this->db->from('data_diri');
        $this->db->join('data_diri_detail', 'data_diri.id=data_diri_detail.id_data_diri');
        return $this->db->get()->result();
    }
}
?>