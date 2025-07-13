<?php
class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $this->load->view("admin/dashboard");
    }
    public function data_karyawan(){
        $this->load->view("admin/DataMaster/data_karyawan");
    }
    public function data_jabatan(){
        $this->load->view("admin/DataMaster/data_jabatan");
    }
    public function data_jam_kerja(){
        $this->load->view("admin/DataMaster/data_jam_kerja");
    }
    public function data_lokasi(){
        $this->load->view("admin/DataMaster/data_lokasi");
    }
    public function tambah_pengguna(){
        $this->load->view("admin/DataMaster/Tambah/tambah_pengguna");
    }
    public function data_absensi(){
        $this->load->view("admin/data_absensi");
    }
    public function pengaturan(){
        $this->load->view("admin/pengaturan");
    }
    public function administrator(){
        $this->load->view("admin/administrator");
    }
    public function login(){
        $this->load->view("admin/login");
    }
    public function get_data_diri(){
        $this->load->model("data_diri");
        $data= $this->Data_diri->get_all_data_diri();
        foreach($data as $val){
            $nama=$val->nama;
            $alamat=$val->alamat;
            $nik=$val->nik;

            echo "nama saya adalah ".$nama."<br> alamat saya di ".$alamat."<br>nik saya ".$nik."<br>";
        }
    }

    public function get_data_diri_with_kondisi(){
        $this->load->model("Data_diri");
        $data= $this->Data_diri->get_all_data_diri_kondisi();
        if(isset($data)){
            $nama=$data->nama;
            $alamat=$data->alamat;
            $nik=$data->nik;

            echo "nama saya adalah ".$nama."<br> alamat saya di ".$alamat."<br>nik saya ".$nik."<br>";
        }
    }

    public function insert_data(){
        $id=$_POST['id'];
        $id=$_POST['code_karyawan'];
        $id=$_POST['email_karyawan'];
        $id=$_POST['nama_karyawan'];
        $id=$_POST['jabatan_id'];
        $id=$_POST['shift_id'];
        $id=$_POST['gedung_id'];
        $this->load->model("Data_diri");
        $data = ['nama' => '$nama',
                 'alamat' => 'palembang',
                    'nik' => '011180220'
               ];
            $this->Data_diri->insert_data($data);
    }
    
    public function insert_data_karyawan(){
        $id=$_POST['id'];
        $id=$_POST['code_karyawan'];
        $id=$_POST['email_karyawan'];
        $id=$_POST['nama_karyawan'];
        $id=$_POST['jabatan_id'];
        $id=$_POST['shift_id'];
        $id=$_POST['gedung_id'];
        $this->load->model("data_diri");
        $data = ['nama' => '$nama',
                 'alamat' => 'palembang',
                    'nik' => '011180220'
               ];
            $this->Data_diri->insert_data($data);
    }

    public function update_data(){
        $this->load->model("Data_diri");
        $data = ['nama' => 'aditya',
                 'alamat' => 'jakarta',
                 'nik' => '011180221'];
            $this->Data_diri->update_data($data);
    }

    public function delete_data(){
        $this->load->model("Data_diri");
            $this->Data_diri->delete_data();
        
    }

    public function get_data_diri_with_join(){
        $this->load->model("Data_diri");
        $data = $this->Data_diri->get_all_data_diri_with_join();
        foreach($data as $val){
            $nama=$val->nama;
            $alamat=$val->alamat;
            $nik=$val->nik;
            $jenis_kelamin=$val->jenis_kelamin;
            $agama=$val->agama;

            echo "nama saya adalah ".$nama."<br> alamat saya di ".$alamat."<br>nik saya ".$nik."<br> jenis kelamin saya adalah".$jenis_kelamin
            ."<br>agama saya adalah".$agama."<br>";
        }
    }
}