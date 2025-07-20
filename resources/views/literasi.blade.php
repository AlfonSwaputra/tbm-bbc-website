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
    <!-- Page Literasi -->
    <div class="detail-program">
        <section class="detail-card">
            <img src="{{ asset('images/program1.jpg') }}" class="card-img-top" alt="Program Relawan">
            <h3>Literasi Cilik</h3>
            <p>Program ini merupakan program mingguan yang diadakan secara rutin setiap seminggu dua kali. Program CALISTUNG ini terbagi menjadi tiga kelas yaitu:</p>
            <ol>
                <li>
                    <h4>Kelas Calistung A (Membaca, Menulis, dan Berhitung)</h4>
                    <ul>
                        <li>Rentang Usia: 3-6 tahun</li>
                        <li>Deskripsi: Program ini ditujukan untuk anak-anak yang belum bisa membaca, menulis, dan berhitung. Kami menyediakan fasilitas, tenaga pengajar yang kompeten untuk membantu mereka mengembangkan keterampilan dasar ini.
                        </li>
                    </ul>
                </li>

                <li>
                    <h4>Kelas Calistung B</h4>
                    <ul>
                        <li>Rentang Usia: 6-8 tahun</li>
                        <li>Deskripsi:</strong> Program ini cocok untuk anak-anak yang sudah bisa membedakan huruf dan angka. Tenaga pengajar kami akan membantu melancarkan proses belajar membaca mereka.</li>
                    </ul>
                </li>

                <li>
                    <h4>Kelas Gemar Membaca</h4>
                    <ul>
                        <li>Target Usia: Anak-anak SD kelas 4, 5, dan 6</li>
                        <li>Deskripsi: Fokus pengajaran dalam kelas ini adalah memperdalam pemahaman membaca anak didik. Metode yang kami terapkan adalah dengan membiarkan anak membaca, memahami apa yang mereka baca, dan kemudian mempresentasikannya di depan teman-teman sekelas.</li>
                    </ul>
                </li>
            </ol>
            <p>Kamu bisa lho berkontribusi dalam program Literasi Cilik dengan menjadi donatur kami. Yuk klik tombol di bawah!</p>
            <button type="button" class="btn btn-light">Bermitra dengan Kami!</button>
        </section>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>