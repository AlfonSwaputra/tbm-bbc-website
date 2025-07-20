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
    <!-- Page Puan -->
    <div class="detail-program">
        <section class="detail-card">
            <img src="{{ asset('images/program3.jpg') }}" class="card-img-top" alt="Program Relawan">
            <h3>Puan Berkarya</h3>
            <p>Dalam rangka pengembangan literasi berbasis inklusi, serta melawan isu kesetaraan gender, TBM Bale Baca Cijayanti membangun program pemberdayaan perempuan. Lewat Program Puan Berdaya, kami harapkan semakin banyak perempuan dengan keterampilan yang cukup untuk dapat lebih mandiri dan meningktakan ekonomi sosial keluarga.</p>
            <p>Program ini diprioritaskan untuk kalangan ibu-ibu dengan usia produktif namun tidak menutup kemungkinan jika ada pemuda/bapak-bapak yang berminat belajar. Beberapa acara di Program Puan Berdaya meliputi:</p>
            <ul class="list-puan">
                <li>Pelatihan pengembangan diri</li>
                <li>Pelatihan memasak</li>
                <li>Sosialisasi kesehatan anak</li>
            </ul>
            <p>Anda bisa berkontribusi menudukung para perempuan di Desa CIjayanti dengan mengklik tombol di bawah!</p>
            <button type="button" class="btn btn-light">Bermitra dengan Kami!</button>
        </section>
    </div>
    
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </body>
</html>