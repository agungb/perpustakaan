<?php

class Buku extends CI_controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Mkategori');
    $this->load->model('Mbuku');

    // jika belum login , diredirect ke form login
    if(!$this->session->userdata("user"))
    {
      redirect("login");
    }
  }

  function index()
  {
    $data['buku'] = $this->Mbuku->tampil_buku();

    $data['judul'] = "Daftar Buku";
    $this->theme->set_ui("admin/tampilbuku", $data);
  }

  function tambah()
  {
    $data['kategori'] = $this->Mkategori->tampil_kategori();
    $data['buku'] = $this->Mbuku->tampil_buku();

    $data['judul'] = "Form Tambah Buku";
    //Menampilkan form tambahbuku
    $this->theme->set_ui("admin/tambahbuku", $data);

    //menyimpan inputan dari form tambahbuku
    $inputan = $this->input->post();

    if($inputan)
    {
      //menjalankan fungsi simpan_buku
      $this->Mbuku->simpan_buku($inputan);

      redirect("admin/buku");
    }


  }
  function ubah($id)
  {
    //mengambil data array dari fungsi ambil_buku()
    $data['buku'] = $this->Mbuku->ambil_buku($id);
    //mengambil data array dari fungsi tampil_kategori()
    $data['kategori'] = $this->Mkategori->tampil_kategori();

    //menampilkan form ubahbuku
    $data['judul'] = "Form Ubah Data Buku";
    $this->theme->set_ui("admin/ubahbuku", $data);

    //mengambil inputan dari form ubahbuku
    $inputan = $this->input->post();

    if($inputan)
    {
      //menjalankan fungsi ubah_buku
      $this->Mbuku->ubah_buku($inputan, $id);
      redirect("admin/buku");
    }

  }

  function hapus($id)
  {
    $this->Mbuku->hapus_buku($id);
    redirect("admin/buku");
  }

}

?>
