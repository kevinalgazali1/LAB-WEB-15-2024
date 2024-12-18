@extends('layouts.main')

@section('content')
  <!-- teks -->
  <div class="teks">
    <br />
    <br />
    <br />
    <br />
    <div class="container-fluid text-center">
      <div class="container">
        <h1 style="font-size: 50px;">Explore All Books Here</h1>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center">
    <div class="container">
      <div class="inputan">
        <input type="text" id="search-input" class="search-input" placeholder="Cari Buku">
        <img class="search-button" src="assets/search.png" alt="" width="43px" style="padding-right: 20px;">
      </div>
      <br>
      <div class="text-center" style="background-color: #cc9600; height: 1px; width: 1120px; border-radius: 50px;">
      </div>
    </div>
  </div>
  <!-- teks end -->

  <!-- Bagian Isinya -->
  <div class="container-card">
    <br />
    <br />
    <div class="book-jus">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 d-flex justify-content-center">
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem" data-title="172 Days">
              <a href="172days.html">
                <img src="assets/image_book/172_Days.jpg" href="172days.html" class="card-img-top" alt="card" /></a>
              <div class="card-body">
                <h5  style="color: #000000">172 Days</h5>
                <p class="card-text">
                  by Nadzira Shafa
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 90.000,00</h5>
                <div id="stock-172days">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">100</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem" data-title="Loneliness is My BF">
              <a>
                <img src="assets/image_book/lonliness.jpg" class="card-img-top" alt="..." /></a>
              <div class="card-body">
                <h5  style="color: #000000">Loneliness is My BF</h5>
                <p class="card-text">
                  by Alvi Syahrin
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 99.000,00</h5>
                <div id="stock-loneliness">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">150</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem" data-title="The Midnight Library">
              <a>
                <img src="assets/image_book/the_midnight_library_cov.jpg" class="card-img-top" alt="..." /></a>
              <div class="card-body">
                <h5  style="color: #000000">The Midnight Library</h5>
                <p class="card-text">
                  by Matt Haig
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 120.000,00</h5>
                <div id="stock-themidnight">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">90</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem" data-title="Funiculi Funicula">
              <a href="funiculiFunicula.html">
                <img src="assets/image_book/Funiculi_Funicula_cov.jpg" class="card-img-top" alt="..." /></a>
              <div class="card-body">
                <h5  style="color: #000000">Funiculi Funicula<br /></h5>
                <p class="card-text">
                  by Toshikazu Kawaguchi
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 50.000,00</h5>
                <div id="stock-funiculi">
                  <h5 style="color: #000000">Stok : <span class="stock-value"  style="color: #000000">50</span></h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- card 1 end -->
  <!-- card 2 -->
  <div class="container-card">
    <br />
    <div class="book-jus">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4 d-flex justify-content-center">
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem" data-title="Laut Bercerita">
              <a>
                <img src="assets/image_book/Laut-Bercerita.jpg" class="card-img-top" alt="card" /></a>
              <div class="card-body">
                <h5  style="color: #000000">Laut Bercerita</h5>
                <p class="card-text">
                  by Leila S. Chudori
                </p>
                <br>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 115.000,00</h5>
                <div id="stock-laut" style="color: #000000">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">200</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem" data-title="Bedebah di Ujung Tanduk">
              <a>
                <img src="assets/image_book/bedebah.jpg" class="card-img-top" alt="..." /></a>
              <div class="card-body">
                <h5  style="color: #000">Bedebah di Ujung Tanduk</h5>
                <p class="card-text">
                  by Tere Liye
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 88.110,00</h5>
                <div id="stock-bedebah" style="color: #000000">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">120</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem" data-title="Jika Kita Tak Pernah Jadi Apa-apa">
              <a>
                <img src="assets/image_book/Jika-Kita-Tak-Pernah-Jadi-Apa-apa-Alvi-Syahrin.jpg" class="card-img-top"
                  alt="..." /></a>
              <div class="card-body">
                <h5  style="color: #000000">Jika Kita Tak Pernah Jadi Apa-apa</h5>
                <p class="card-text">
                  by Alvi Syahrin
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 74.400,00</h5>
                <div id="stock-jika" style="color: #000000">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">20</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem" data-title="Sebuah Seni Untuk Bersikap Bodo Amat">
              <a>
                <img src="assets/image_book/Sebuah-Seni-Untuk-Bersikap-Bodo-Amat.jpg" class="card-img-top"
                  alt="..." /></a>
              <div class="card-body">
                <h5 style="color: #000000">Sebuah Seni Untuk Bersikap Bodo Amat<br /></h5>
                <p class="card-text" >
                  by Mark Manson
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5  style="color: #000000">Rp. 49.000,00</h5>
                <div id="stock-sebuah">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">40</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem; display: none;" data-title="Death Note">
              <a>
                <img src="assets/image_book/Death-Note.jpg" class="card-img-top" alt="card" /></a>
              <div class="card-body">
                <h5  style="color: #000000">Death Note</h5>
                <p class="card-text">
                  by Tsugumi Ohba
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 273.000,00</h5>
                <div id="stock-death" style="color: #000000">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">190</span></h5>
                </div>
                <br>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem; display: none;" data-title="Spy x Family">
              <a>
                <img src="assets/image_book/Spy_x_Family_01.jpg" class="card-img-top" alt="..." /></a>
              <div class="card-body">
                <h5  style="color: #000000">Spy x Family</h5>
                <p class="card-text">
                  by Tatsuya Endo
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 65.000,00</h5>
                <div id="stock-spy" style="color: #000000">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">150</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem; display: none;" data-title="Attack on Titan">
              <a href="attackOnTitan.html">
                <img src="assets/image_book/attack_on_titan.jpg" class="card-img-top" alt="..." /></a>
              <div class="card-body">
                <h5  style="color: #000000">Attack on Titan</h5>
                <p class="card-text">
                  by Hajimei Isayama
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 61.000,00</h5>
                <div id="stock-attack" style="color: #000000">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">85</span></h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col d-flex justify-content-center">
            <div class="card" style="width: 16rem; display: none;" data-title="Haikyuu!">
              <a>
                <img src="assets/image_book/haikyuu.jpg" class="card-img-top" alt="..." /></a>
              <div class="card-body">
                <h5  style="color: #000000">Haikyuu!<br /></h5>
                <p class="card-text">
                  by Haruichi Furudate
                </p>
                <div class="buttoncard">
                  <a href="" class="btn">
                    <img src="assets/cartP.png" alt="" />Add To Cart</a>
                </div>
                <h5 style="color: #000000">Rp. 87.000,00</h5>
                <div style="color: #000000">
                  <h5 style="color: #000000">Stok : <span class="stock-value" style="color: #000000">95</span></h5>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <br />

  <!-- card 2 end -->

  <!-- shopping cart -->
  <div class="container-fluid">
    <div class="container d-flex justify-content-end">
      <a>
        <img src="assets/shopping-cart.png" alt="" width="50px">
      </a>
    </div>
  </div>
  <br />
  <br />
  <br>
  <!-- shopping cart end -->
  <!-- Isi end -->
@endsection