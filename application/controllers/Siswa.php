<?php

class Siswa extends CI_Controller
{
    //satu kontrole mau pake sebaiknya simpan di konstrakted 
    public function __construct()
    {
        parent::__construct(); //untuk menjalankan fungsi kontrak yang ada di kelas ci kontroleer
        $this->load->model('Siswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        // $this->load->model('Siswa_model'); //kalau mau nglod model cuma bisa di method index saja
        $data['judul'] = 'Daftar Siswa';    //judul
        $data['siswa'] = $this->Siswa_model->getAllSiswa();
        $this->load->view('templates/header', $data); //memanggil judul $data
        $this->load->view('siswa/index');
        $this->load->view('templates/footer');
    }

    // from tambah data
    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Siswa';  //judul
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('nis', 'Nis', 'required|numeric');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Siswa_model->tambahDataSiswa();
            redirect('siswa');
        }
    }
}
