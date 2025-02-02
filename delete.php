<?php

include('connection.php');

$id = $_POST['id'];

$delete = mysqli_query($connect, "DELETE FROM karyawan WHERE id='$id'");

if($delete) {
	header('Location: list.php');
	exit;
} else {
	echo 'Delete data gagal';
}