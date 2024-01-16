@extends('layouts.main')

@section('container')
 <!-- konten wisata -->
 <section >
  <div class="about">
      <h1>Pagubugan Melung</h1>
  </div>
  <div class="container">
      <div class="content-gambar">
          <img src="Image/melung1.jpg" alt="" srcset="">
      </div>
      <div class="content-teks">
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
               when an unknown printer took a galley of type and scrambled it to make a type 
               specimen book. It has survived not only five centuries, but also the leap into 
               electronic typesetting, remaining essentially unchanged</p>
         
      </div>
  </div>
</section>

<section class="keterangan">
  <div class="container">
      <div class="Wisatainfo">
          <div class="box">
              <div class="icon"><i class="fa fa-info" aria-hidden="true"></i></div>
              <div class="text">
                  <h3>Fasilitas</h3>
                  <p>&#x2713; Toilet</p>
                  <p>&#x2713; Lahan parkir luas</p>
                  <p>&#x2713; Warung-warung</p>
                  <p>&#x2713; Spot foto menarik</p>
              </div>
          </div>
          <div class="box">
              <div class="icon"><i class="fa fa-ticket" aria-hidden="true"></i></div>
              <div class="text">
                  <h3>Tiket masuk</h3>
                  <p>Tiket masuk Rp 10.000/orang</p>
              </div>
          </div>
          <div class="box">
              <div class="icon"><i class="fa fa-car" aria-hidden="true"></i></div>
              <div class="text">
                  <h3>Parkir kendaraan</h3>
                  <p>Motor Rp 2.000 <br> Mobil Rp. 5.000</p>
              </div>
          </div>
      </div>
      <div class="maps-wisata">
          <h1>Peta Wisata</h1>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.180701258128!2d109.2051368741131!3d-7.
          3335929721281365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ff53f21362edd%3A0xb3deeb8d6c37ef9d!2s
          Wisata%20Pagubugan%20Melung!5e0!3m2!1sen!2sid!4v1705254362490!5m2!1sen!2sid" width="600" height="450" 
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      
  </div>
</section>
<!-- konten wisata  end -->



@endsection