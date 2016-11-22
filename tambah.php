<?php 
require_once "templates/header.php" 
?>


<div class="row">
	<div class="container">
		<h3 class="blue-text lighten-2 center-align">Tambah Kontak</h3>
		<div class="col m8 offset-m2">
			<form action="tambah.php" method="post">
				<div class="input-field">
					<input type="text" id="nama" name="nama" class="validate">
					<label for="nama">Nama</label>
				</div>
				<div class="input-field">
					<select class="browser-default" name="jenis_kelamin" id="jenis_kelamin">
						<option value="" disabled-selected>- Pilih -</option>
						<option value="laki-laki">laki-laki</option>
						<option value="perempuan">perempuan</option>
					</select>
				</div>
				<div class="input-field">
					<textarea name="alamat" id="alamat" class="materialize-textarea validate" rows="3"></textarea>
					<label for="alamat">Alamat</label>
				</div>
				<div class="input-field">
					<input type="text" name="no_telp" class="validate" id="no_telp" required>
					<label for="No_telp">No. Telp</label>
				</div>
				<button type="submit" name="tambah" class="waves-light waves-effect btn right blue lighten-2">Tambah <i class="fa fa-send"></i></button>
			</form>
		</div>
	</div>
</div>

<?php 

if(isset($_POST['tambah'])) {
	$nama 			= 	$_POST['nama'];
	$jenis_kelamin	=	$_POST['jenis_kelamin'];
	$alamat 		= 	$_POST['alamat'];
	$no_telp  		=	$_POST['no_telp'];

	mysqli_query($db, "INSERT INTO users(nama, jenis_kelamin, alamat, no_telp) VALUES('$nama', '$jenis_kelamin', '$alamat', '$no_telp')") or die($db->error);
	header("Location:index.php");
} 

 ?>




<?php require_once "templates/footer.php" ?>