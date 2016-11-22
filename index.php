<?php require_once "templates/header.php"; ?>


<div class="row">
	<div class="container">
		<div class="col m12 offset m3">
			<h3 class="blue-text center-align"> List Contact</h3>
			<table class="responsive-table striped" style="margin-top:50px;">
				<thead>
					<th>No</th>
					<th>Nama</th>
					<th>Jenis Kelamin</th>
					<th>Alamat</th>
					<th>No. Telepon</th>
					<th>Opsi</th>
				</thead>
				<tbody>
				<?php 
					$row = show("users");
					foreach ($row as $data) {
										
				 ?>
				 <tr>
					<td><?php echo $data['id'] ?></td>
					<td><?php echo $data['nama'] ?></td>
					<td><?php echo $data['jenis_kelamin'] ?></td>
					<td><?php echo $data['alamat'] ?></td>
					<td><?php echo $data['no_telp'] ?></td>
					<td>
						<a href="edit.php?id=<?php echo $data[0]; ?>" class="orange waves-effect waves-light btn-floating btn-medium"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						<a onclick="return confirm('yakin ingin menghapus data ?')" href="hapus.php?id=<?php echo $data[0]; ?>" class="red waves-effect waves-light btn-floating btn-medium"><i class="fa fa-trash" aria-hidden="true"></i></a>
					</td>
				</tr>
				<?php 
					}
				 ?>
				</tbody>
			</table>
		</div>
	</div>
</div>



 <?php require_once "templates/footer.php" ?>