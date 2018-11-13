<h2><?php echo $judul; ?></h2>
<hr>

<form action="" method="post">
	<div class="form-group">
		<label>Kategori Buku</label>
		<select name="id_kategori" class="form-control">
			<?php foreach ($kategori as $key => $value): ?>
			<option value="<?php echo $value["id_kategori"]; ?>"
				<?php if ($value["id_kategori"] == $buku["id_kategori"]){echo " selected";} ?>
				><?php echo $value["nama_kategori"]; ?>
			</option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Judul Buku</label>
		<input type="text" name="judul" class="form-control" value="<?php echo $buku["judul"] ?>">
	</div>
	<div class="form-group">
		<label>Sinopsis Buku</label>
		<input type="text" name="deskripsi" class="form-control" value="<?php echo $buku["deskripsi"] ?>">
	</div>
	<div class="form-group">
		<label>Harga Buku</label>
		<textarea name="harga" cols="30" rows="5" class="form-control"><?php echo $buku["harga"]; ?></textarea>
	</div>
	<div class="form-group">
		<label>Stok Buku</label>
		<input type="text" name="stok" class="form-control" value="<?php echo $buku["stok"] ?>">
	</div>
	<div class="form-group">
		<label>Nama Penerbit</label>
		<input type="text" name="penerbit" class="form-control" value="<?php echo $buku["penerbit"] ?>">
	</div>
	<button type="submit" class="btn btn-primary">Simpan</button>
</form>
