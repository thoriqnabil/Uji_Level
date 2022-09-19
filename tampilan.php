<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <h3>Data Siswa</h3>
    <h4><a href="datasiswa.html"></a>[+] Tambah Baru</h4>
    <table border="1" >
        <tr>
                <th>Id</th>
                <th>NISN</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No Telepon</th>
                <th>TTL</th>
            </tr>
            <?php
        $sql = "SELECT * FROM datasiswa";
        $query = mysqli_query($connect,$sql);
        while($pel = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$pel['id_siswa']."</td>";
            echo "<td>".$pel['nama_siswa']."</td>";
            echo "<td>".$pel['alamat']."</td>";
            echo "<td>".$pel['telepon']."</td>";
            echo "<td>".$pel['ttl']."</td>";
            echo "<td>
                    <a href='formedit.php?id_siswa=".$pel['id_siswa']."'>Edit</a> |
                    <a href='hapus.php?id_siswa=".$pel['id_siswa']."'>Hapus</a>
                    </td>";
            echo "</tr>";
            }
            ?>
    </table>
</body>
</html>