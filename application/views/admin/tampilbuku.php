<h2><?php echo $judul; ?></h2>
<hr>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>No</th>
      <th>Kategori</th>
      <th>Judul Buku</th>
      <th>Sinopsis</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Penerbit</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($buku as $key => $value): ?>

    <tr>
      <td><?php echo $key+1; ?></td>
      <td><?php echo $value["nama_kategori"]; ?></td>
      <td><?php echo $value["judul"]; ?></td>
      <td><?php echo $value["deskripsi"]; ?></td>
      <td><?php echo $value["harga"]; ?></td>
      <td><?php echo $value["stok"]; ?></td>
      <td><?php echo $value["penerbit"]; ?></td>
      <td>
        <a href="<?php echo base_url("admin/buku/ubah/$value[id_buku]"); ?>" class="btn btn-warning">Ubah</a>
        <a href="<?php echo base_url("admin/buku/hapus/$value[id_buku]"); ?>" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
<hr>
<a href="<?php echo base_url("admin/buku/tambah"); ?>" class="btn btn-primary">Tambah Data Buku</a>
