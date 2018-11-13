<h2><?php echo $judul; ?></h2>
<hr>

<form action="" method="post">
  <div class="form-group">
    <label>Kategori Buku</label>
    <select name="id_kategori" class="form-control">
      <option value="">Pilih Kategori Buku</option>
      <?php foreach ($kategori as $key => $value): ?>

      <option value="<?php echo $value["id_kategori"]; ?>"><?php echo $value["nama_kategori"]; ?></option>
      <?php endforeach ?>
    </select>
  </div>
  <div class="form-group">
    <label>Judul Buku</label>
    <input type="text" name="judul" class="form-control">
  </div>
  <div class="form-group">
    <label>Sinopsis Buku</label>
    <textarea name="deskripsi" cols="30" rows="5" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>Harga Buku</label>
    <input type="text" name="harga" class="form-control">
  </div>
  <div class="form-group">
    <label>Stok Buku</label>
    <input type="text" name="stok" class="form-control">
  </div>
  <div class="form-group">
    <label>Nama Penerbit</label>
    <input type="text" name="penerbit" class="form-control">
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
