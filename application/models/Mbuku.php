<?php

class Mbuku extends CI_model
{
  function tampil_buku()
  {
    $this->db->select("*");
    $this->db->join('kategori', 'buku.id_kategori = kategori.id_kategori');

    $ambil = $this->db->get('buku');
    return $ambil->result_array();
  }

  function simpan_buku($inputan)
  {
    $this->db->insert('buku', $inputan);
  }

  function ambil_buku($id)
  {
    $this->db->where('id_buku', $id);
    $ambil = $this->db->get('buku');

    return $ambil->row_array();
  }

  function ubah_buku($inputan, $id)
  {
    $this->db->where('id_buku', $id);
    $this->db->update('buku', $inputan);
  }

  function hapus_buku($id)
  {
    $this->db->where('id_buku', $id);
    $this->db->delete('buku');
  }
}

?>
