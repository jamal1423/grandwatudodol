@extends('panel.layout.main')
@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">GWD</h1>
        <ul>
            <li><a href="#">List Paket Wisata</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        @foreach($paket as $pkt)
        <div class="col-md-4 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ $pkt->title }}</h4>
                    <p>{!! $pkt->harga !!}</p>
                    <h4 class="card-title mb-3">Fasilitas</h4>
                    <p>{!! $pkt->fasilitas !!}</p>
                    <img class="d-flex w-100" src="{{ asset('/image-paket-wisata/' . $pkt->image) }}" alt="First slide">
                    <a class="btn btn-info btn-rounded mt-2" href="/dashboard/detail-paket-wisata/{{ base64_encode($pkt->id) }}"> <i class="nav-icon i-Pen-2"></i> Edit</a>
                    <a class="btn btn-danger btn-rounded mt-2" id="paket-del-{{ $pkt->id }}" onClick="paketDel(this)" data-id="{{ $pkt->id }}" href="#"> <i class="nav-icon i-Close-Window"></i> Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="modal fade" id="delPaket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Paket Wisata</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="/dashboard/delete-paket-wisata" method="post">
                @csrf
                @method('delete')
                    <div class="modal-body">
                        <input type="hidden" id="id-del" name="id_del">
                        <input type="hidden" id="oldImages" name="oldImages">
                        <p>Yakin akan hapus paket wisata <strong id="title-del"></strong></p>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                        <button class="btn btn-danger ml-2" type="submit">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection