<?php 
require_once "templates/header.php" 
?>

<?php 
$id = $_GET['id'];
$data = show("users", "id = $id");
 ?>

<div class="row">
	<div class="container">
		<h3 class="blue-text center-align">Edit Data</h3>
		<div class="col m8 offset-m2">
			<form method="post">
				<div class="input-field">
					<input type="text" id="nama" name="nama" class="validate" value="<?php echo $data[0]['nama']; ?>">
					<label for="nama">Nama</label>
				</div>
				<div class="input-field">
					<select class="browser-default" name="jenis_kelamin" id="jenis_kelamin">
						<option value="" disabled-selected>- Pilih -</option>
						<option value="laki-laki" <?php if ($data[0]['jenis_kelamin'] == 'laki-laki') {
							echo 'selected';
						} ?> >Laki - Laki</option>
						<option value="perempuan" <?php if ($data[0]['jenis_kelamin'] == 'perempuan') {
							echo "selected";
						} ?> >perempuan</option>
					</select>
				</div>
				<div class="input-field">
					<textarea name="alamat" id="alamat" class="materialize-textarea" rows="3"><?php echo $data[0]['alamat']; ?></textarea>
					<label for="alamat">Alamat</label>
				</div>
				<div class="input-field">
					<input type="text" name="no_telp" id="no_telp" required value="<?php echo $data[0]['no_telp']; ?>">
					<label for="No_telp">No. Telp</label>
				</div>
				<button class="waves-effect waves-light btn orange right">Edit <i class="fa fa-pencil"></i></button>
			</form>
		</div>
	</div>
</div>


<?php 
if (isset($_POST['edit'])) {
	$nama 			= 	$_POST['nama'];
	$jenis_kelamin 	=	$_POST['jenis_kelamin'];
	$alamat 		=	$_POST['alamat'];
	$no_telp 		= 	$_POST['no_telp'];
	mysqli_query($db, "UPDATE users SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_telp = '$no_telp' WHERE id = '$id'") or die($db->error);
	header("Location:index.php");	
}
 ?>



<?php require_once "templates/footer.php" ?>