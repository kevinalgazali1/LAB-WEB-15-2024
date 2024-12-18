@extends('layouts.main')

@section('content')
<!-- IMAGE -->
<div class="container-img">
    <div class="image">
        <img src="assets/background.png" alt="" width="100%" height="600px">
    </div>
</div>

<!-- IMAGE END -->

<!-- bagian dua -->
<div class="container-fluid  text-center">
    <div class="container">
        <div class="overlay">
            <h1>The Book Lover's Dreamland Awaits!</h1>
            <p>Selamat datang di surga pecinta buku terbaik! Bergabunglah dengan komunitas kami dan berkontribusi pada
                perpustakaan cerita yang terus berkembang, di mana setiap buku memiliki peluang untuk menginspirasi
                orang
                baru.</p>
        </div>
    </div>
</div>
<!-- end dua -->

<!-- Ketiga  -->
<h1 class="text-center gradient-text" style="font-weight: bold; margin-top: 100px;">Pilihan Terbaik Kami</h1>
<div class="text-center"
    style="background-color: #cc9600; height: 1px; width: 300px; border-radius: 50px; margin: 0 auto;"></div>
<div class="container-card">
    <br />
    <div class="book-jus">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                <div class="col">
                    <div class="card" style="width: 16rem" data-title="Death Note">
                        <a>
                            <img src="assets/image_book/Death-Note.jpg" class="card-img-top mt-4 rounded" alt="card"
                                style=" height: 300px; width: 200px; display: block; margin: 0 auto;transition: transform 0.3s ease;" /></a>
                        <div class="card-body text-center" style="transition: transform 0.3s ease;">
                            <h5 class="card-title" style="color: #000000">Death Note</h5>
                            <p class="card-text">
                                by Tsugumi Ohba
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem" data-title="Spy x Family">
                        <a>
                            <img src="assets/image_book/Spy_x_Family_01.jpg" class="card-img-top mt-4 rounded" alt="..."
                                style=" height: 300px; width: 200px; display: block; margin: 0 auto;transition: transform 0.3s ease;" /></a>
                        <div class="card-body text-center" style="transition: transform 0.3s ease;">
                            <h5 class="card-title" style="color: #000000">Spy x Family</h5>
                            <p class="card-text">
                                by Tatsuya Endo
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem" data-title="Attack on Titan">
                        <a>
                            <img src="assets/image_book/attack_on_titan.jpg" class="card-img-top mt-4 rounded" alt="..."
                                style=" height: 300px; width: 200px; display: block; margin: 0 auto; transition: transform 0.3s ease;" /></a>
                        <div class="card-body text-center" style="transition: transform 0.3s ease;">
                            <h5 class="card-title" style="color: #000000">Attack on Titan</h5>
                            <p class="card-text">
                                by Hajimei Isayama
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 16rem" data-title="Haikyuu!">
                        <a>
                            <img src="assets/image_book/haikyuu.jpg" class="card-img-top mt-4 rounded" alt="..."
                                style=" height: 300px; width: 200px; display: block; margin: 0 auto; transition: transform 0.3s ease;" /></a>
                        <div class="card-body text-center" style="transition: transform 0.3s ease;">
                            <h5 class="card-title" style="color: #000000">Haikyuu!</h5>
                            <p class="card-text">
                                by Haruichi Furudate
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- ketiga end -->
@endsection