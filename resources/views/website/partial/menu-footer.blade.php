<!--WA chat-->
<div style="z-index:999;" id="WAButton"></div>

<footer class="ftco-footer bg-bottom" style="background-image: url(image-komponen/footer-bg.jpg);">
    <div class="container">
        <div class="row mb-5">
            @foreach($kontak as $kntk)
            @endforeach
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Grand Watudodol</h2>
                    <p>Jadikan Tour Anda Luar Biasa Bersama Kami</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="{{ $kntk->ig }}"><span class="icon-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="{{ $kntk->ig }}"><span class="icon-tiktok"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Wisata Favorite</h2>
                    <ul class="list-unstyled">
                        <li><a href="/paket-wisata" class="py-2 d-block">Pulau Tabuhan</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Pulau Menjangan</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Snorkling</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Diving</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Camping</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Fishing</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Edukasi Lobster</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Kuliner Lobster</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Edukasi Transplantasi Terumbu Karang</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Link Terkait</h2>
                    <ul class="list-unstyled">
                        <li><a href="/destinasi-wisata" class="py-2 d-block">Destinasi Wisata</a></li>
                        <li><a href="/paket-wisata" class="py-2 d-block">Paket Wisata</a></li>
                        <li><a href="/galeri" class="py-2 d-block">Galeri</a></li>
                        <li><a href="/kontak" class="py-2 d-block">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Hubungi Kami</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{ $kntk->alamat }}</span></li>
                            <li><a href="#"><span class="icon icon-whatsapp"></span><span class="text">{{ $kntk->no_wa }}</span></a></li>
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $kntk->email }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Grand Watudodol
                </p>
            </div>
        </div>
    </div>
</footer>
@push('script')
    <script>
        $(function() {
            $('#WAButton').floatingWhatsApp({
                phone: '{{ $kntk->no_wa }}',
                headerTitle: 'Hubungi kami di WhatsApp!', //Popup Title
                popupMessage: 'Hi, Anda butuh bantuan?', //Popup Message
                showPopup: true, //Enables popup display
                buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
                position: "right"    
            });
        });
    </script>
@endpush
<!-- loader -->
<!-- <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->