@extends('website.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight bg-header bg-header-mobile jarak-bawah-mobile" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center txt-header-mobile">
                <h1 class="mb-3 bread">Paket Wisata</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Paket Wisata <i class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center pb-4">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4">Tujuan Wisata</h2>
            </div>
        </div>
        <div class="row">
            @foreach($paket as $pkt)
            <div class="col-md-4 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url('image-paket-wisata/{{ $pkt->image }}');"></a>
                    <div class="text p-4">
                        <a href="/detail-paket-wisata/{{ $pkt->slug }}"><span class="price"> Detail Paket </span></a>
                        <h3><a href="#">{{ $pkt->title }}</a></h3>
                        <p class="location"> {!! $pkt->harga !!}</p>
                        <h3><a href="#">Fasilitas</a></h3>
                        {!! Str::limit($pkt->fasilitas,35) !!} <br>
                        <a style="margin-top:5px;" href="/detail-paket-wisata/{{ $pkt->slug  }}"> Selengkapnya..</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection