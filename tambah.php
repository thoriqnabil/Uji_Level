<?php
include 'koneksi.php';  

if (isset($_POST['tambah'])){
    $id_siswa = $_POST ['id_siswa'];
    $nisn_siswa = $_POST ['nisn_siswa'];
    $nama_siswa = $_POST ['nama_siswa'];
    $alamat = $_POST ['alamat'];
    $nomor_telepon = $_POST ['nomor_telepon'];
    $ttl = $_POST ['ttl'];

    $sql = "INSERT INTO pelanggan (id_pelanggan, nama_pelanggan, alamat, telepon,email) VALUES('$id_pelanggan','$nama_pelanggan','$alamat','$telepon','$email')";

    $query = mysqli_query ($connect,$sql);

    if($query){
        header('Location: tampilan.php');
    } else{
        header('Location: tambah.php?status=gagal');
    }
}
?>