<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">GWD<span>Grand Watudodol</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(Request::is('home')) active @endif"><a href="/home" class="nav-link">Home</a></li>
                <li class="nav-item @if(Request::is('destinasi-wisata')) active @endif"><a href="/destinasi-wisata" class="nav-link">Destinasi Wisata</a></li>
                <li class="nav-item @if(Request::is('paket-wisata')) active @endif"><a href="/paket-wisata" class="nav-link">Paket Wisata</a></li>
                <li class="nav-item @if(Request::is('galeri')) active @endif"><a href="/galeri" class="nav-link">Galeri</a></li>
                <li class="nav-item @if(Request::is('kontak')) active @endif"><a href="/kontak" class="nav-link">Kontak</a></li>
            </ul>
        </div>
    </div>
</nav>