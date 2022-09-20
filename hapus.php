<?php 
include 'koneksi.php';

$id_pel = $_GET['id_siswa'];

$sql = "DELETE FROM datasiswa WHERE id_siswa='$id_pel'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: tampilan.php');
}else{
    header('Location: hapus.php?status=gagal');
}
?>