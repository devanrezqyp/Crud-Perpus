<?php 
include 'koneksi.php';
$query = "SELECT * FROM tb_anggota";
$result = mysqli_fetch_all(mysqli_query($conn, $query), MYSQLI_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Responsive</title>
    <link rel="stylesheet" href="./css/tampilan.css">
</head>
<body>

    <div class="badan-utama">

        <header>
            <h2>Perpustakan Online</h2>
            <p>Perpustakaan Online menyediakan semua buku yang kalian butuhkan</p>
        </header>

        <nav class="navigasi">
            <ul>
                <li><a class="active" href="#home">Home</a></li>
                <li><a href="#berita">Menu</a></li>
                <li><a href="#kontak">About</a></li>
                <li><a href="#tentang">Store</a></li>
            </ul>
        </nav>

        <div class="banner">
            <img src="./gambar/perpus.jpg" alt="Perpustakaan Online">
        </div>

        <div class="menu-kiri">
            <div class="kotak">
                <h3>Menu Pinjam</h3>
                <p>
                    Isi Form Peminjaman dengan Klik Tombol di bawah ini
                </p>

                <a class="tombol tombol-pesan" href="pinjam.php">Pinjam</a><br>
                <a class="tombol tombol-pesan" href="pinjam.php">Lihat</a>

            </div>
            <div class="kotak">
                <h3>Menu Anggota</h3>
                <p>
                    Isi Form pendaftaran anggota dengan Klik Tombol di bawah ini
                </p>

                <a class="tombol tombol-pesan" href="anggota.php">Daftar</a><br>
                  <a class="tombol tombol-pesan" href="anggota.php">Lihat</a>
            </div>
            <div class="kotak">
                <h3>Menu Buku</h3>
                <p>
                    Isi Form untuk melihat menu buku dengan Klik Tombol di bawah ini
                </p>

                <a class="tombol tombol-pesan" href="pinjam.php">menu buku</a><br>
                <a class="tombol tombol-pesan" href="pinjam.php">Lihat</a>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h2>Daftar Anggota</h2>
                <table border="1">
                    <tr>
                        <th>No</th>
                        <th>Kode Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Alamat Anggota</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php $no=1; foreach($result as $row) : ?>
                    <tr>
                        <td><?php echo $no; $no++;?></td>
                        <td><?=$row['kode_anggota']?></td>
                        <td><?=$row['nama_anggota']?></td>
                        <td><?=$row['alamat_anggota']?></td>
                        <td><a href="editAnggota.php?kd_anggota=<?=$row['kode_anggota']?>&nama_anggota=<?=$row['nama_anggota']?>&alamat_anggota=<?=$row['alamat_anggota']?>">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>


    <footer>
        @copyright 2019 || by Rio Sulistiyo Putra
    </footer>

</div>

</body>
</html>?>