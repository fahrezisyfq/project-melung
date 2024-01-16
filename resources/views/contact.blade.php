@extends('layouts.main')

@section('container')
     <section class="Contact">
        <div class="konten">
            <h2>Hubungi Kami</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum delectus fuga earum nisi beatae fugit vitae quo corrupti. Impedit, explicabo!</p>
        </div>
        <div class="container">
            <div class="kontakinfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Alamat</h3>
                        <p>Melung, Kedungbanteng <br>Banyumas, Jawa Tengah <br> Kode Pos 53152</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Nomor Handphone</h3>
                        <p>0857 2625 2441</p>
                    </div>
                </div>
                <div class="box">
                    <div class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>melung@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="kontakform">
                <form>
                    <h2>Kirim Pesan</h2>
                    <div class="inputBox">
                        <input type="text" name="" id="">
                        <span>Nama Lengkap</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="" id="">
                        <span>Email</span>
                    </div>
                    <div class="inputBox">
                        <textarea required="required"></textarea>
                        <span>Kirim pesanmu....</span>
                    </div>
                    <div class="inputBox">
                        <input type="submit" name="" id="" value="Kirim">
                    </div>
                </form>
            </div>
        </div>
     </section>
@endsection