<?php

include 'koneksi.php';

if (isset($_POST['tambah'])) {

$id_siswa = $_POST['id_siswa'];
$nisn_siswa = $_POST['nisn_siswa'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon']; 
$ttl = $_POST['ttl'];


$sql = "UPDATE datasiswa SET nisn_siswa='$nisn_siswa', nama_siswa='$nama_siswa', alamat ='$alamat', no_telepon='$no_telepon', ttl='$ttl' WHERE id_siswa = '$id_siswa'";


$query = mysqli_query($connect, $sql);

if($query){
    header('Location: tampilan.php');
}else{
    header('Location: editsiswa.php?status=gagal');
}
}

?>