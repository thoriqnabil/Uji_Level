<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM datasiswa WHERE id_siswa='$id_siswa'";
$query = mysqli_query($connect, $sql);
$pel = mysqli_fetch_array($query);

if(mysqli_num_rows($query) < 1){
    die ("data tidak ditemukan");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="editsiswa.php" method="post">
        <h3>Tambah Data Pelanggan</h3>
        <p><label>Id : <input value="<?php echo $pel ['id_siswa']?>" required="required" type="hidden" name="id_siswa"></label></p>

        <p><label>NISN : <input value="<?php echo $pel ['nisn_siswa']?>" required="required" type="number" name="nisn_siswa"></label></p>
        
        <p><label>Nama : <input value="<?php echo $pel ['nama_siswa']?>" required="required" type="text" name="nama_siswa"></label></p>
        
        <p><label>Alamat : <textarea required="required" name="alamat" cols="30" rows="5"><?php echo $pel ['alamat']?></textarea></label></p>
        
        <p><label>Nomor Telepon : <input value="<?php echo $pel ['no_telepon']?>" required="required" type="number" name="no_telepon"></label></p>
        
        <p><label>TTL : <input value="<?php echo $pel ['ttl']?>" required="required" type="text" name="ttl"></label></p>
        <input type="submit" name="tambah" value="tambah">
    </form>
</body>
</html>