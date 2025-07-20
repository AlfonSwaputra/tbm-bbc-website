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
    <!-- Page Mitra -->
    <div class="mitra">
        <section class="jumbotron">
            <div class="img-jumbotron">
                <img src="{{ asset('images/mitra-jumbotron.jpg') }}" alt="Jumbotron Image" class="img-fluid">
            </div>
            <div class="hero-text">
                <blockquote>
                    <h1>Mari Berkolaborasi bersama Bale Baca Cijayanti!</h1>
                    <p>Kami percaya setiap hal baik akan lebih berdampak besar dengan berkolaborasi dalam setiap kegiatan. Yuk mulai dari jadi Kakak Asuh, klik tombol di bawah untuk daftar!</p>
                </blockquote>
                <button type="button" class="btn">Jadi Kakak Asuh!</button>
            </div>
        </section>

        <section class="mentor">
            <div class="title">
                <h1>Program Kakak Asuh</h1>
            </div>
            <div class="about">
                <p>Program Kakak Asuh adalah program donatur rutin bulanan untuk membantu proses kegiatan belajar mengajar peserta didik TBM Bale Baca Cijayanti.</p>
                <img src="{{ asset('images/mentor.jpg') }}" alt="Mentor Image">
            </div>
            <div class="why-to-join">
                <blockquote>
                    <h4>Mengapa perlu ikut Program Kakak Asuh?</h4>
                    <p>Bale Baca Cijayanti merupakan yayasan pegiat literasi yang telah bergerak lebih dari 5 tahun untuk memfasilitasi lebih dari 200 adik-adik di Desa Cijayanti  untuk mendapatkan pembelajaran tambahan diluar sekolah formal dan kegiatan literasi lainnya.</p>
                </blockquote>
                <div class="img">
                    <img src="{{ asset('images/prog-kasuh.jpg') }}" alt="Program Kasuh">
                </div>
            </div>
        </section>

        <section class="testimonial">
            <div class="testi">
                <div class="img">
                    <img src="{{ asset('images/testi1.png') }}" alt="Testimonial Image 1">
                </div>
                <blockquote>
                    <span>“Kami berharap dengan dibangunnya saung baca ini dapat meningkatkan semangat dan kenyamanan adik-adik saat belajar, dan juga dapat meningkatkan kualitas edukasi di Desa Cijayanti secara keberlanjutan, agar adik-adik dapat mencapai cita-cita yang diimpikan.”</span>
                    <p class="name"><strong>Laksono Widodo</strong></p>
                    <p class="position">Direktur Utama BRI Danareksa Sekuritas</p>
                </blockquote>
            </div>
            <div class="testi">
                <div class="img">
                    <img src="{{ asset('images/testi2.png') }}" alt="Testimonial Image 2">
                </div>
                <blockquote>
                    <span>“Harapannya teman-teman BBC tetap konsisten tetap semangat tentu tidak mudah mengelola balai baca ditengah gempuran media sosial, game online, dan lain sebagainya. Pasti dorongan untuk tidak lagi membaca buku itu sangat tinggi ditengah anak-anak ataupun kita remaja. Tapi tetap semangat karena apa yang sudah dilakukan oleh BBC ini luar biasa, semoga kedepannya kita bisa kerja sama lagi.”</span>
                    <p class="name"><strong>Dr. Helen Diana Vida, S.Sos., M.I.Kom</strong></p>
                    <p class="position">Dosen Ilmu Komunikasi Fisipol</p>
                    <p class="institution">Universitas Kristen Indonesia</p>
                </blockquote>
            </div>
        </section>

        <section class="mitra-section">
            <div class="title">
                <h1>Mitra Pemerintah dan Swasta:</h1>
            </div>
            <div class="top-mitra">
                <img src="{{ asset('images/top-mitra/bri.jpg') }}" alt="Top Mitra Image 1">
                <img src="{{ asset('images/top-mitra/narasi.jpg') }}" alt="Top Mitra Image 2">
                <img src="{{ asset('images/top-mitra/lenovo.jpg') }}" alt="Top Mitra Image 3">
                <img src="{{ asset('images/top-mitra/adira.jpg') }}" alt="Top Mitra Image 4">
                <img src="{{ asset('images/top-mitra/dd.jpg') }}" alt="Top Mitra Image 5">
                <img src="{{ asset('images/top-mitra/ud.djaya.jpg') }}" alt="Top Mitra Image 6">
                <img src="{{ asset('images/top-mitra/indorelawan.jpg') }}" alt="Top Mitra Image 7">
                <img src="{{ asset('images/top-mitra/emina.jpg') }}" alt="Top Mitra Image 8">
                <img src="{{ asset('images/top-mitra/bip.jpg') }}" alt="Top Mitra Image 9">
                <img src="{{ asset('images/top-mitra/sbr.jpg') }}" alt="Top Mitra Image 10">
                <img src="{{ asset('images/top-mitra/amaliah.jpg') }}" alt="Top Mitra Image 11">
                <img src="{{ asset('images/top-mitra/idkpjb.jpg') }}" alt="Top Mitra Image 12">
                <img src="{{ asset('images/top-mitra/pemkabbogor.jpg') }}" alt="Top Mitra Image 13">
                <img src="{{ asset('images/top-mitra/kemnaker.jpg') }}" alt="Top Mitra Image 14">
                <img src="{{ asset('images/top-mitra/kemenpora.jpg') }}" alt="Top Mitra Image 15">
                <img src="{{ asset('images/top-mitra/fifgroup.jpg') }}" alt="Top Mitra Image 16">
                <img src="{{ asset('images/top-mitra/taf.jpg') }}" alt="Top Mitra Image 17">
                <img src="{{ asset('images/top-mitra/loreal.jpg') }}" alt="Top Mitra Image 18">
                <img src="{{ asset('images/top-mitra/dss.jpg') }}" alt="Top Mitra Image 19">
                <img src="{{ asset('images/top-mitra/bells.jpg') }}" alt="Top Mitra Image 20">
                <img src="{{ asset('images/top-mitra/pijar.jpg') }}" alt="Top Mitra Image 21">
            </div>
            <div class="title">
                <h1>Mitra Media dan Komunitas:</h1>
            </div>
            <div class="bottom-mitra">
                <img src="{{ asset('images/bottom-mitra/bogormengabdi.jpg') }}" alt="Bottom Mitra Image 1">
                <img src="{{ asset('images/bottom-mitra/daaitv.jpg') }}" alt="Bottom Mitra Image 2">
                <img src="{{ asset('images/bottom-mitra/inilahkoran.jpg') }}" alt="Bottom Mitra Image 3">
                <img src="{{ asset('images/bottom-mitra/tribunnews.jpg') }}" alt="Bottom Mitra Image 4">
                <img src="{{ asset('images/bottom-mitra/goodnews.jpg') }}" alt="Bottom Mitra Image 5">
                <img src="{{ asset('images/bottom-mitra/btv.jpg') }}" alt="Bottom Mitra Image 6">
                <img src="{{ asset('images/bottom-mitra/idnl.jpg') }}" alt="Bottom Mitra Image 7">
                <img src="{{ asset('images/bottom-mitra/finobadut.jpg') }}" alt="Bottom Mitra Image 8">
                <img src="{{ asset('images/bottom-mitra/asaberdaya.jpg') }}" alt="Bottom Mitra Image 9">
                <img src="{{ asset('images/bottom-mitra/kmb.jpg') }}" alt="Bottom Mitra Image 10">
                <img src="{{ asset('images/bottom-mitra/generasiliterasi.jpg') }}" alt="Bottom Mitra Image 11">
                <img src="{{ asset('images/bottom-mitra/saungbacaurang.jpg') }}" alt="Bottom Mitra Image 12">
                <img src="{{ asset('images/bottom-mitra/idbjb.jpg') }}" alt="Bottom Mitra Image 13">
                <img src="{{ asset('images/bottom-mitra/teruntukproject.jpg') }}" alt="Bottom Mitra Image 14">
                <img src="{{ asset('images/bottom-mitra/tbm.jpg') }}" alt="Bottom Mitra Image 15">
                <img src="{{ asset('images/bottom-mitra/nyalanesia.jpg') }}" alt="Bottom Mitra Image 16">
                <img src="{{ asset('images/bottom-mitra/tbrr.jpg') }}" alt="Bottom Mitra Image 17">
                <img src="{{ asset('images/bottom-mitra/desamind.jpg') }}" alt="Bottom Mitra Image 18">
                <img src="{{ asset('images/bottom-mitra/patriotdesa.jpg') }}" alt="Bottom Mitra Image 19">
                <img src="{{ asset('images/bottom-mitra/dun.jpg') }}" alt="Bottom Mitra Image 20">
                <img src="{{ asset('images/bottom-mitra/adwaadiba.jpg') }}" alt="Bottom Mitra Image 21">
                <img src="{{ asset('images/bottom-mitra/binarbaca.jpg') }}" alt="Bottom Mitra Image 22">
                <img src="{{ asset('images/bottom-mitra/tarunacemerlang.jpg') }}" alt="Bottom Mitra Image 23">
                <img src="{{ asset('images/bottom-mitra/pdbkb.jpg') }}" alt="Bottom Mitra Image 24">
                <img src="{{ asset('images/bottom-mitra/forumtbm.jpg') }}" alt="Bottom Mitra Image 25">
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