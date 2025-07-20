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
            <img src="{{ asset('images/program3.jpg') }}" class="card-img-top" alt="Program Relawan">
            <h3>Event Kolaborasi</h3>
            <p>TBM Balebaca Cijayanti (BBC) mengundang instansi, komunitas, dan individu untuk berpartisipasi dalam kegiatan literasi. Beberapa kolaborasi yang telah dilakukan:</p>
            <ul>
                <li><strong>Sabtu Ceria x Fino Badut</strong> (29 Juni 2024): Bermain dan berkarya dimana anak-anak dapat menggambar, mewarnai, mendengar cerita, dan menyaksikan sulap badut.</li>
                <li><strong>Khitanan Massal x LPM Dompet Dhuafa</strong> (30 Juni 2024): BErkolaborasi untuk menyediakan layanan khitanan & obat-obatan.</li>
                <li><strong>Cerdaskan Bangsa bersama BRIDS x  Indorelawan</strong> (29 Juli 2024): Peresmian saung baru Bale Baca Cijayanti, disertai rangkaian acara mengajar bersama karyawan BRI Danareksa Sekuritas.</li>
                <li><strong>Sikat Gigi</strong> (13 Agustus 2023): Anak-anak belajar merawat gigi dengan Dr. Eva Ardelia.</li>
                <li><strong>Pelatihan Manajemen Perpustakaan</strong> (12 Agustus 2023): Mahasiswa KKN Universitas Djuanda dan TBM BBC berdiskusi tentang strategi pengelolaan perpustakaan.</li>
            </ul>
            <p>TBM BBC terus berkomitmen membangun literasi dan memberikan manfaat positif bagi masyarakat. Anda bisa berkontribusi sebagai donatur dengan mengklik tombol di bawah!</p>
            <button type="button" class="btn btn-light">Bermitra dengan Kami!</button>
        </section>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>