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
    <!-- Page Festival -->
    <div class="detail-program">
        <section class="detail-card">
            <img src="{{ asset('images/program4.jpg') }}" class="card-img-top" alt="Program Relawan">
            <h3>Safari & Festival Literasi</h3>
            <p>Kami mengadakan kegiatan tahunan Safari Literasi untuk memperkuat minat baca anak-anak dan mengajak mereka mengeksplorasi kreativitas, membangun kepercayaan diri, serta mengembangkan jiwa berkompetisi dan kerjasama.</p>
            <p>Setiap tahun, Safari Literasi memiliki tema yang berbeda. Pada tahun 2023, TBM Bale Baca Cijayanti mengangkat tema <strong>Merajut Nostalgia dan Mewarisi Kearifan Lokal Melalui Safari Literasi TBM Cinta Permainan Tradisional</strong>. Dalam rangka memeriahkan kegiatan ini, TBM BBC juga mengajak TBM lain di kecamatan Babakan Madang untuk berpartisipasi. Diharapkan kolaborasi ini dapat mempengaruhi perkembangan TBM lain di wilayah tersebut agar lebih aktif dalam mengadakan kegiatan literasi yang menyenangkan bagi anak-anak.</p>
            <p>Selama sebulan, panitia dan volunteer Safari Literasi mengunjungi 7 TBM di Babakan Madang, memperkenalkan permainan tradisional kepada anak-anak. Puncaknya adalah festival literasi dengan perlombaan permainan tradisional antar 7 TBM. Selain itu, anak-anak menampilkan tarian tradisional, pameran mainan tradisional, dan perpustakaan keliling.</p>
            <p>Safari Literasi oleh Taman Bacaan Balebaca Cijayanti bertujuan meningkatkan minat baca dan pengetahuan budaya lokal anak-anak. Anda bisa berkontribusi sebagai donatur dengan mengklik tombol di bawah!</p>
            <button type="button" class="btn btn-light">Bermitra dengan Kami!</button>
        </section>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>