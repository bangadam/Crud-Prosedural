<?php 
require_once "config/koneksi.php";

$id = $_GET['id'];

mysqli_query($db, "DELETE FROM users WHERE id = '$id'") or die($db->error);
header("location:index.php");

 ?>