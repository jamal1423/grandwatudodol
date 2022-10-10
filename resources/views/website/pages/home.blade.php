@extends('website.layout.main')
@section('content')
    <div class="hero-wrap bg-header bg-header-mobile jarak-bawah-mobile" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 text text-center ftco-animate txt-header-mobile" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Grand Watudodol - Bangsring - Banyuwangi</p>
                    <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Jadikan Tour Anda Luar Biasa Bersama Kami</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-counter img" id="section-counter" style="top: 50px;">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch" style="background-image:url('image-komponen/gal-11.jpg');"></div>
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">Jadikan Tur Anda Berkesan dan Aman Bersama Kami</h2>
                            <p>Selamat datang di Grand Watudodol.
                            <br>
                            Selamat menikmati keindahan pantai pohon kelapa, dan hamparan pasir hitam, keindahan Pulau Tabuhan, serta destinasi lainnya. 
                            Dan kami siap menemani liburan Anda di Watudodol. Jadikan liburan Anda berkesan bersama kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Destinasi Wisata</h2>
                </div>
            </div>
            <div class="row">
                @foreach($destinasi as $dest)
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url('image-destinasi/{{ $dest->image }}');"></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection