
<!DOCTYPE html>
<html lang="id">
<kepala>
    <meta charset="UTF-8">
    <meta nama="viewport" konten="lebar=lebar-perangkat, skala-awal=1.0">
    <title>SMK IT Al-Ma'mun</title>
    <tautan href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="lembar gaya">
    <link rel="stylesheet" href="aset/gaya.css">
    <gaya>
        tubuh {
            warna latar belakang: #f8f9fa;
            warna: #343a40;
            font-family: 'Poppins', sans-serif;
            perilaku gulir: halus;
        }
        bilah navigasi {
            latar belakang: gradien-linier (90 derajat, #1e3c72, #2a5298);
            bayangan kotak: 0 4px 8px rgba(0, 0, 0, 0.2);
            posisi: lengket;
            atas: 0;
            indeks z: 1000;
        }
        .navbar-merek, .nav-link {
            warna: putih !penting;
            transisi: 0,3 detik;
        }
        .nav-link:arahkan kursor {
            warna: #f8d210 !penting;
        }
        judul {
            latar belakang: url('assets/banner.jpg') tidak ada pengulangan tengah tengah/sampul;
            tinggi: 60vh;
            tampilan: fleksibel;
            sejajarkan-item: tengah;
            justify-content: tengah;
            teks-ratakan: tengah;
            warna: putih;
            ukuran font: 2.5rem;
            bobot font: tebal;
            bayangan teks: 3px 3px 7px rgba(0,0,0,0.7);
            animasi: fadeIn 1,5 detik masuk-keluar dengan mudah;
            posisi: relatif;
            overflow: tersembunyi;
        }
        header::sebelum {
            isi: '';
            posisi: absolut;
            atas: 0;
            kiri: 0;
            lebar: 100%;
            tinggi: 100%;
            latar belakang: rgba(0, 0, 0, 0.4);
        }
        .bagian-konten {
            bantalan: 80px 0;
            transisi: 0,5 detik;
        }
        .bagian-konten:arahkan kursor {
            transformasi: skala(1.02);
        }
        .kartu:arahkan kursor {
            transformasi: translateY(-5px);
            bayangan kotak: 0 piksel 4 piksel 15 piksel rgba(0, 0, 0, 0.2);
            transisi: 0,3 detik;
        }
        .ikon-sosial {
            margin: 0 10px;
            warna: putih;
            ukuran font: 24px;
            transisi: 0,3 detik;
        }
        .ikon-sosial a:arahkan kursor {
            warna: #f8d210;
        }
        .form-kontrol:fokus {
            bayangan kotak: 0 0 10px rgba(30, 60, 114, 0.5);
            warna batas: #1e3c72;
        }
        .kembali ke atas {
            posisi: tetap;
            bawah: 20px;
            kanan: 20px;
            latar belakang: #1e3c72;
            warna: putih;
            bantalan: 10px 15px;
            radius batas: 50%;
            kursor: penunjuk;
            tampilan: tidak ada;
        }
        memudar {
            opasitas: 0;
            transformasi: translateY(20px);
            animasi: fadeInUp 1 detik ke depan;
        }
        @keyframes memudarInUp {
            dari {
                opasitas: 0;
                transformasi: translateY(20px);
            }
            ke {
                opasitas: 1;
                transformasi: translateY(0);
            }
        }
    </gaya>
</kepala>
<tubuh>
    <nav class="navbar navbar-expand-lg">
        <div kelas="wadah">
            <a class="navbar-brand" href="index.php">SMK IT Al-Ma'mun</a>
            <tombol kelas="navbar-toggler" jenis="tombol" data-bs-toggle="ciutkan" data-bs-target="#navbarNav">
                <span class="ikon-pengalih-navbar"></span>
            </tombol>
            <div class="ciutkan navbar-runtuh" ​​id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="halaman/profil.php">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/program.php">Program Keahlian</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/berita.php">Berita</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/kontak.php">Kontak</a></li>
                Bahasa Indonesia:
            Bahasa Indonesia:
        Bahasa Indonesia:
    </nav>
    
    <judul>
        <div class="memudar">
            <h1>Selamat Datang di SMKS IT Al-Ma'mun</h1>
            <p>Sekolah Kejuruan Berbasis Teknologi</p>
        Bahasa Indonesia:
    </judul>
    
    <footer class="bg-teks gelap-teks putih-tengah p-3">
        <p>© 2025 SMK IT Al-Ma'mun | <span class="social-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
        Bahasa Indonesia:
    </catatan kaki>
    
    <tombol class="kembali ke atas" onclick="gulir ke Atas()">⇧</tombol>
    <skrip>
        jendela.onscroll = fungsi() {
            document.querySelector('.back-to-top').style.display = window.scrollY > 300 ? 'block' : 'none';
        Bahasa Indonesia: };
        fungsi scrollToTop() {
            window.scrollTo({ top: 0, perilaku: 'halus' });
        }
    </skrip>
</tubuh>
Bahasa Indonesia:
