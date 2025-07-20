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
    <!-- Page Muda -->
    <div class="detail-program">
        <section class="detail-card">
            <img src="{{ asset('images/program2.jpg') }}" class="card-img-top" alt="Program Relawan">
            <h3>Muda Berdaya</h3>
            <p>Taman Bacaan Masyarakat (TBM) Bale Baca Cijayanti, didirikan oleh Dwi Sulistia Ningsih, meluncurkan Program Internal Upgrading untuk mempererat hubungan antar anggota pengurus sukarela dan untuk masyarakat luas. Rangkaian acara program ini meliputi:</p>
            <ul>
                <li><strong>Expert Talk:</strong> Kegiatan sharing session bersama ahli yang membahas berbagai tema, seperti: Workshop Pendekatan TBM untuk CSR, Gali Potensi: Tips Membangun CV dan Self Branding, dsb</li>
                <li><strong>Internal Upgrading dan Makrab:</strong> Menginap bersama di saung TBM, makan malam, karaoke, dan kegiatan seru lainnya.</li>
            </ul>
            <p>Program ini memperkuat kekeluargaan anggota pengurus dan mendukung literasi digital. TBM Bale Baca Cijayanti terus berkomitmen memberikan dampak positif bagi masyarakat Desa Cijayanti dan sekitarnya.</p>
            <button type="button" class="btn btn-light">Bermitra dengan Kami!</button>
        </section>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>