<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BBC</title>

    <!-- Embed Style -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar">
        @include('navbar')
    </nav>
    <!-- Page Beranda -->
    <div class="beranda">
        <section class="jumbotron">
            <div class="img-jumbotron">
                <img src="{{ asset('images/jumbotron.jpg') }}" alt="Jumbotron Image" class="img-fluid">
            </div>
            <div class="hero-text">
                <blockquote>
                    <p>Berkolaborasi Membangun Desa Lewat Gerakan</p>
                    <h5><strong>#LiterasiUntukCijayanti</strong></h5>
                </blockquote>
                <button type="button" class="btn">Hubungi Kami!</button>
            </div>
        </section>

        <section class="feature-stats">
            <div class="border1 stat">
                <img src="{{ asset('images/stat1.svg') }}" alt="Icon Donasi Buku">
                <div class="tag">
                    <h2>1,500</h2>
                    <p>Donasi Buku</p>
                </div>
            </div>
            <div class="border2 stat">
                <img src="{{ asset('images/stat2.svg') }}" alt="Icon Total Relawan">
                <div class="tag">
                    <h2>319</h2>
                    <p>Total Relawan</p>
                </div> 
            </div>
            <div class="border3 stat">
                <img src="{{ asset('images/stat3.svg') }}" alt="Icon Anak Didik">
                <div class="tag">
                    <h2>207</h2>
                    <p>Anak Didik</p>
                </div>
            </div>
        </section>

        <section class="about-display">
            <div class="about-me">
                <h1>Tentang TBM BBC</h1>
                <div class="container">
                    <div class="logo">
                        <img src="{{ asset('images/logo.jpg') }}" alt="Logo TBM BBC" class="img-fluid">
                    </div>
                    <blockquote>
                        <p><strong>Taman Baca Masyarakat (TBM) Bale Baca Cijayanti</strong> adalah wadah dalam menumbuhkan minat baca untuk memperkaya pengalaman belajar warga Cijayanti. Kami juga hadir sebagai fasilitator dalam diskusi maupun inkubasi produk dan jasa hasil inovasi karya terbaik masyarakat sekitar.</p>
                    </blockquote>
                </div>
            </div>
        </section>

        <section class="join-us">
            <blockquote>
                <h1>Kenapa Kamu Harus Jadi Bagian dari <strong>Pegiat Literasi di TBM Bale Baca Cijayanti?</strong></h1>
            </blockquote>
            <div class="prog-kasuh">
                <div class="img">
                    <img src="{{ asset('images/prog-kasuh.jpg') }}" alt="Program Kasuh">
                </div>
                <div class="text">
                    <p class="top">Kak Ade adalah <strong>1 dari 207 murid</strong> di TBM BBC. Setelah belajar 5 tahun, kini Kak Ade <strong>berhasil belajar menulis dan membaca.</strong></p>
                    <p class="middle">Masih banyak Kak Ade lainnya yang ingin belajar tapi terhalang biaya, dan TBM BBC hadir bersama mitra dan Kakak Asuh untuk mendukung hal tersebut.</p>
                    <p class="bottom">Kamu bisa lho ikut berkontribusi untuk membantu banyak murid di TBM BBC. Yuk isi form di bawah!</p>
                </div>
            </div>
        </section>

        <section class="colaborate">
            <div class="container">
                <h1>Isi Data Diri untuk Berkolaborasi!</h1>
                <form action="">
                    <div class="mb-3">
                        <label for="nama" class="form-label text-white">Nama Kamu</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                    </div>

                    <div class="mb-3">
                        <label for="whatsapp" class="form-label text-white">Nomor Whatsapp</label>
                        <input type="text" class="form-control" id="whatsapp" placeholder="08xxxxxxxxxx">
                    </div>

                    <div class="mb-3">
                        <label for="institusi" class="form-label text-white">Asal Institusi</label>
                        <input type="text" class="form-control" id="institusi" placeholder="Nama institusi">
                    </div>

                    <div class="mb-3">
                        <label for="alasan" class="form-label text-white">Alasan menghubungi TBM BBC</label>
                        <input type="text" class="form-control" id="alasan" placeholder="Tuliskan alasan Anda">
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-light rounded-pill px-4 fw-semibold">Kirim</button>
                    </div>
                </form>
            </div>
        </section>

        <section class="contact-us">
            @include('contactus')
        </section>

        <footer>
            @include('footer')
        </footer>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>