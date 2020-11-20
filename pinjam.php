<?php 
include 'koneksi.php';

if(isset($_POST['submit'])) {
    $pinjam = $_POST['kd_pinjam'];
    $buku = $_POST['kd_buku'];
    $tanggal = $_POST['tgl_pinjam'];
    $anggota = $_POST['kd_anggota'];

    $query = "INSERT INTO tb_peminjaman VALUES ('".$pinjam."', '".$buku."', '".$tanggal."', '".$anggota."');" ;
    $result = mysqli_query($conn, $query);
    if($result) {
            header("Location: lihatPinjam.php");
    }else{
        echo "Data tidak Terkirim";
    }
}
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

                <a class="tombol tombol-pesan" href="pinjam.php">Pinjam</a>
                <a class="tombol tombol-pesan" href="pinjam.php">Lihat</a>

            </div>
            <div class="kotak">
                <h3>Menu Anggota</h3>
                <p>
                    Isi Form Peminjaman dengan Klik Tombol di bawah ini
                </p>

                <a class="tombol tombol-pesan" href="anggota.php">Pinjam</a>
                <a class="tombol tombol-pesan" href="anggota.php">Pinjam</a>
            </div>
            <div class="kotak">
                <h3>Menu Buku</h3>
                <p>
                    Isi Form Peminjaman dengan Klik Tombol di bawah ini
                </p>

                <a class="tombol tombol-pesan" href="pinjam.php">Pinjam</a>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h2>Masukan data pinjam</h2>
                <form method="post">
                    <table>
                        <tr>
                            <td>KODE PINJAM</td>
                            <td>:</td>
                            <td><input type="text" name="kd_pinjam" placeholder="contoh: P001" ></td>
                        </tr>
                        <tr>
                            <td>KODE BUKU</td>
                            <td>:</td>
                            <td><input type="text" name="kd_buku" placeholder="contoh: B0001" ></td>
                        </tr>
                        <tr>
                            <td>TANGGAL PINJAM</td>
                            <td>:</td>
                            <td><input type="text" name="tgl_pinjam" placeholder="contoh: yyyy-mm-dd" ></td>
                        </tr>
                        <tr>
                            <td>KODE ANGGOTA</td>
                            <td>:</td>
                            <td><input type="text" name="kd_anggota" placeholder="contoh: A0001"></td>
                        </tr>

                        <tr>


                            <td colspan="3">
                                <center>
                                    <input type="submit" name="submit">
                                </center>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>


        <footer>
            @copyright 2019 || by Rio Sulistiyo Putra
        </footer>

    </div>

</body>
</html>?>