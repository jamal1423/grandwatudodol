@extends('website.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight bg-kontak bg-kontak-mobile jarak-bawah-mobile"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center txt-header-mobile">
                <h1 class="mb-3 bread">Hubungi Kami</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Hubungi Kami <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>

@foreach($kontak as $kn)
@endforeach
<section class="ftco-section ftco-no-pb contact-section">
    <div class="container">
    <div class="row d-flex contact-info">
        <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-map-signs"></span>
            </div>
            <h3 class="mb-2">Alamat</h3>
            <p>{{ $kn->alamat }}</p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-whatsapp"></span>
            </div>
            <h3 class="mb-2">WhatsApp</h3>
            <p><a href="tel://{{ $kn->no_wa }}">{{ $kn->no_wa }}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-paper-plane"></span>
            </div>
            <h3 class="mb-2">Alamat Email</h3>
            <p><a href="mailto:{{ $kn->email }}">{{ $kn->email }}</a></p>
            </div>
        </div>
        <div class="col-md-3 d-flex">
        <div class="align-self-stretch box p-4 text-center">
            <div class="icon d-flex align-items-center justify-content-center">
                <span class="icon-globe"></span>
            </div>
            <h3 class="mb-2">Website</h3>
            <p><a href="#">grandwatudodol.com</a></p>
            </div>
        </div>
    </div>
    </div>
</section>
        
<section class="ftco-section contact-section">
    <div class="container">
    <div class="row block-9">
        <div class="col-md-12 d-flex">
        
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15800.167862103004!2d114.40356211979993!3d-8.097203029307604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd147b5930e5603%3A0x56ab9ae9ba452b4f!2sWisata%20grand%20Watudodol!5e0!3m2!1sen!2sid!4v1585457347069!5m2!1sen!2sid" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        
        </div>
    </div>
    </div>
</section>
@endsection