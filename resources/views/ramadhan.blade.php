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
    <!-- Page Event Kolaborasi -->
    <div class="detail-program">
        <section class="detail-card">
            <img src="{{ asset('images/program6.jpg') }}" class="card-img-top" alt="Program Relawan">
            <h3>Festival Ramadhan</h3>
            <p>Festival Ramadhan, diadakan tahunan oleh TBM Bale Baca Cijayanti, memeriahkan bulan suci Ramadan dengan berbagai kegiatan. TBM bekerja sama dengan mitra untuk menyelenggarakan acara seperti:</p>
            <ul>
                <li>Sosialisasi Kesehatan Gigi</li>
                <li>Kegiatan Belajar (membaca, menulis, matematika)</li>
                <li>Perpustakaan Keliling</li>
                <li>Games Seru</li>
                <li>Berbagi Takjil dan Buka Bersama</li>
                <li>Mengaji dan Ceramah</li>
                <li>Santunan Lansia</li>
                <li>Nonton Bareng Sejarah Nabi dan Rosul</li>
                <li>Storytelling</li>
            </ul>
            <p>Festival ini memperkaya pengetahuan dan pengalaman literasi masyarakat. Anda bisa berkontribusi sebagai donatur dengan mengklik tombol di bawah!</p>
            <button type="button" class="btn btn-light">Bermitra dengan Kami!</button>
        </section>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>