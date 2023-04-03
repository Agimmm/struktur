<?php 
if(isset($_POST['tambah'])){
	$id = $_POST['id'];
	$nama = $_POST['nama']; 
	$jabatan = $_POST['jabatan']; 
	$sql=mysqli_query($config, "INSERT INTO struktur_umum (id,nama,jabatan) VALUES (NULL, '$nama', '$jabatan'')");
	header("location:struktur_umum.php");

	}
if (isset($_GET['delete1'])) {

	$id = $_GET['id'];

	mysqli_query($config, "DELETE FROM struktur_umum WHERE id='$id'");
	header("location:struktur_umum.php");
 ?>