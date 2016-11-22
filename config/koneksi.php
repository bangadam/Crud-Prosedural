<?php 

$host 	= '127.0.0.1';
$user 	= 'root';
$pass 	= '';
$dbname = 'crud_prosedural'; 

$db = mysqli_connect($host, $user, $pass, $dbname) or die('database error');


function show($table, $where = null) {
	global $db;

	$command = "SELECT * FROM $table";
	if ($where != null) {
		$command .= " WHERE $where";
	}
	$query = mysqli_query($db, $command) or die($db->error);
	$row = array();

	while ($rows = mysqli_fetch_array($query, MYSQLI_BOTH)) {
		$row[] = $rows;
	}

	return $row;

	mysqli_close($db);
}


 ?>