@extends('website.layout.main')
@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight bg-header bg-header-mobile jarak-bawah-mobile" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center txt-header-mobile">
                <h1 class="mb-3 bread">Paket Wisata</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="/home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Detail Paket Wisata <i class="ion-ios-arrow-forward"></i></span></p>
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
            @foreach($detailPaket as $paket)
            <div class="col-md-12 ftco-animate">
                <div class="project-wrap">
                    <a href="#" class="img" style="background-image: url('../../image-paket-wisata/{{ $paket->image }}');height: 500px;"></a>
                    <div class="text p-4">
                        Bagikan ke : 
                        <a class="btn btn-success" style="background-color: #4caf50;margin-bottom:5px;" target="_blank" href="https://wa.me/?text={{$baseUrl.$paket->slug}}" role="button"> <span class="icon icon-whatsapp"></span> WhatsApp</a>
                        <a class="btn btn-info" style="background-color: #3b5998;margin-bottom:5px;" target="_blank" href="http://www.facebook.com/sharer.php?u={{$baseUrl.$paket->slug}}" role="button"> <span class="icon icon-facebook"></span> Facebook</a>
                        <a class="btn btn-success" style="background-color: #03a9f4;margin-bottom:5px;" target="_blank" href="http://twitter.com/share?text={{$baseUrl.$paket->slug}}" role="button"> <span class="icon icon-twitter"></span> Twitter</a>
                    </div>
                    <div class="text p-4">
                        <h3><a href="#">{{ $paket->title }}</a></h3>
                        <p class="location"> {!! $paket->harga !!}</p>
                        <h3><a href="#">Fasilitas</a></h3>
                        {!! $paket->fasilitas !!}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection