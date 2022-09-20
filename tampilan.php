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
    <link rel="stylesheet" href="DataSiswa.css">
</head>
<body>
    <div class="sidebar">
        <h2>StarbhakPustaka</h2>
        <img src="https://avatars.githubusercontent.com/u/8860691?s=200&v=4" alt="">
        <hr>
        <img class="gambar1" src="user (1).png" alt="">
        <div class="data">
            <p>Data Siswa</p>
        </div>
        <img class="gambar" src="book.png" alt="">
        <div class="buku">
            <p>Data Buku</p>
        </div>
    </div>

    <div class="background">
        <div class="background2"><p>Data Siswa</p></div>

        <div class="background3">
            <div class="tampilanphp">
                <h4><a href="datasiswa(1).html">[+] Tambah Baru</a></h4>
                <table border="1" cellspacing = "0" cellpadding = "5" >
                    <tr>
                        <th>Id</th>
                        <th>NISN</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>TTL</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $sql = "SELECT * FROM datasiswa";
                    $query = mysqli_query($connect,$sql);
                    while($pel = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td>".$pel['id_siswa']."</td>";
                        echo "<td>".$pel['nisn_siswa']."</td>";
                        echo "<td>".$pel['nama_siswa']."</td>";
                        echo "<td>".$pel['alamat']."</td>";
                        echo "<td>".$pel['no_telepon']."</td>";
                        echo "<td>".$pel['ttl']."</td>";
                        echo "<td>
                            <a href='formeditsiswa.php?id_siswa=".$pel['id_siswa']."'>Edit</a> |
                            <a href='hapus.php?id_siswa=".$pel['id_siswa']."'>Hapus</a>
                            </td>";
                        echo "</tr>";
                        }
                    ?>
                </div>
            </table>
        </div>
    </div>
    <div class="dashbord">
        <h3>Dashboard</h3>
    </div>

</body>
</html>