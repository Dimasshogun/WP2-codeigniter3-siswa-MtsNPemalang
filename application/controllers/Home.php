<?php

class Home extends CI_Controller {
    // memanggil di folder view
    public function index($nama = ''){       //$nama adalah mengirim data ke view tapi lewat url dan kalau tidak di isi akn default. contoh http://localhost/ci-app/home/index/aku
        $data['judul'] = 'Halaman Home';     //U mengubah  judul dengan $data di header
        $data['nama'] = $nama;
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data); //menampilkan index di view/home
        $this->load->view('templates/footer');
    }
}