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
                <a class="tombol tombol-pesan" href="lihatPinjam.php">Lihat</a><br>

            </div>
            <div class="kotak">
                <h3>Menu Anggota</h3>
                <p>
                    Isi Form Peminjaman dengan Klik Tombol di bawah ini
                </p>

                <a class="tombol tombol-pesan" href="anggota.php.php">Daftar</a><br>
                <a class="tombol tombol-pesan" href="lihatAnggota.php">Lihat</a>
            </div>
            <div class="kotak">
                <h3>Menu Buku</h3>
                <p>
                    Isi Form Peminjaman dengan Klik Tombol di bawah ini
                </p>

                <a class="tombol tombol-pesan" href="pinjam.php">menu buku</a><br>
                <a class="tombol tombol-pesan" href="pinjam.php">Lihat</a>
            </div>
        </div>

        <div class="menu-tengah">
            <div class="kotak">
                <h2>Dasar dasar penguasaan Pemprograman web</h2>
                <span class="tanggal-posting">Di terbitkan pada tahun 2018</span>

                <img src="./gambar/buku.jpg" alt="Sate Ayam">

                <p>Buku ini terdiri dari beberapa bab.  Bab pertama membahas tentang pengenalan internet dan web, bab dua tentang HTML dasar, bab tiga tentang HTML lanjut, dan bab empat tentang membuat web personal sederhana. Selanjutnya untuk bab  lima tentang mengenal CSS, bab enam tentang membuat Web Komersil, dan terakhir bab tujuh tentang javascript.</p>
                <a class="tombol tombol-lengkap" href="#">Pinjam Sekarang</a>
            </div>
        </div>


        <footer>
            @copyright 2019 || by Rio Sulistiyo Putra
        </footer>

    </div>

</body>
</html>?>