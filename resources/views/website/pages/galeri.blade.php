@extends('website.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight bg-galeri bg-galeri-mobile jarak-bawah-mobile" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center txt-header-mobile">
                <h1 class="mb-3 bread">Galeri</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Galeri <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
        <div class="col-md-12 heading-section text-center ftco-animate">
        <h2 class="mb-4">Dokumentasi</h2>
        </div>
    </div>
    <div class="row">
        @foreach($galeri as $gal)
        <div class="col-md-4 ftco-animate">
            <div class="project-wrap">
                <a href="#" class="img" style="background-image: url('image-galeri/{{ $gal->image }}');"></a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection