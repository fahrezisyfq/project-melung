@extends('layouts.main')

@section('container')

 <!-- Hero Section start -->
<section class="hero" id="home">
  <main class="content">
    <h1>Selamat Datang, di <span><br>DESA WISATA MELUNG</span></h1>
    <p>
      Menjadikan alam sebagai icon utama, budaya serta kearifan lokal
    </p>
  </main>
</section>
<!-- Hero Section end -->


    
<!-- wisata Section Start -->
<section id="wisata" class="wisata" >
  <div class="row">
    <div class="wisata-img" data-aos="fade-right">
      <img src="image/melung1.jpg" alt="wisata melung" />
    </div>
    <div class="content" data-aos="fade-left">
      <h3>Nikmati Wisata Desa Melung</h3>
      <p>
        Desa wisata ini memukau dengan suasana yang hijau dan sejuk, dihiasi oleh keindahan alam yang menakjubkan. Terselip di antara pepohonan rindang dan lahan hijau, desa ini menawarkan ketenangan yang luar biasa sambil membiarkan pengunjungnya merasakan kelezatan udara segar dan kehijauan yang memanjakan mata.
      </p>
    </div>
    
  </div>
 
</section>
<!-- wisata Section End -->

<!-- produk Section Start -->
<section id="produk" class="produk">
  <div class="row">
    <div class="content">
      <h3>Nikmati produk Desa Melung</h3>
      <p>
        Di desa wisata ini, pengunjung dapat menikmati keindahan alam yang memukau sambil mengeksplorasi beragam produk lokal yang unik.
      </p>
      <p>
        Terdapat KopiLung dan kerajinan tangan tradisional, yang semuanya dapat dibeli sebagai kenang-kenangan autentik dari pengalaman yang tak terlupakan di desa ini.
      </p>
    </div>
    <div class="produk-img">
      <img src="image/kopilung.jpg" alt="produk melung" />
    </div>
  </div>
  
</section>
<!-- produk Section End -->

{{-- galerry section start --}}
<section class="gallery" id="gallery"> 
  <h1>Spot Foto Menarik</h1>
  <div class="container-gallery">
    <div class="thumbnail">
      <img src="image/1.jpeg">
    </div>
    <div class="thumbnail">
      <img src="image/2.jpg">
    </div>
    <div class="thumbnail">
      <img src="image/3.jpeg">
    </div>
    <div class="thumbnail">
      <img src="image/4.jpg">
    </div>
    <div class="thumbnail">
      <img src="image/5.jpg">
    </div>
    <div class="thumbnail">
      <img src="image/6.jpg">
    </div>
    <div class="thumbnail">
      <img src="image/melung1.jpg">
    </div>
    <div class="thumbnail">
      <img src="image/melung1.jpg">
    </div>
    <div class="thumbnail">
      <img src="image/melung1.jpg">
    </div>
  </div>
</section>

{{-- galerry section end --}}
@endsection