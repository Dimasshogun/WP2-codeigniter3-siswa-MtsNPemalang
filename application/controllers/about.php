<?php

class about extends CI_Controller {
public function index(){
        $data['judul'] = 'Form Tambah Data Siswa';  //judul
        $this->load->view('templates/header', $data);
            $this->load->view('about/index');
            $this->load->view('templates/footer');
    }
}