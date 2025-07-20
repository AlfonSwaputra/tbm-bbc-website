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
    <!-- Page Program -->
    <div class="program">
        <section class="program-cards">
            <div class="title-program">
                <h1>Program #LiterasiuntukCijayanti</h1>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-text">
                            <a href="{{ route('literasi') }}" class="program-name">Literasi Cilik</a>
                        </div>
                        <img src="{{ asset('images/program1.jpg') }}" class="card-img-top" alt="Program Relawan">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-text">
                            <a href="{{ route('muda') }}" class="program-name">Muda Berdaya</a>
                        </div>
                        <img src="{{ asset('images/program2.jpg') }}" class="card-img-top" alt="Program Relawan">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-text">
                            <a href="{{ route('puan') }}" class="program-name">Puan Berkarya</a>
                        </div>
                        <img src="{{ asset('images/program3.jpg') }}" class="card-img-top" alt="Program Relawan">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-text">
                            <a href="{{ route('festival') }}" class="program-name">Festival Literasi</a>
                        </div>
                        <img src="{{ asset('images/program4.jpg') }}" class="card-img-top" alt="Program Relawan">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-text">
                            <a href="{{ route('event') }}" class="program-name">Event Kolaborasi</a>
                        </div>
                        <img src="{{ asset('images/program5.jpg') }}" class="card-img-top" alt="Program Relawan">
                        <div class="overlay"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-text">
                            <a href="{{ route('ramadhan') }}" class="program-name">Festival Ramadhan</a>
                        </div>
                        <img src="{{ asset('images/program6.jpg') }}" class="card-img-top" alt="Program Relawan">
                        <div class="overlay"></div>
                    </div>
                </div>
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