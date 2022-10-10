@extends('panel.layout.main')
@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">GWD</h1>
        <ul>
            <li><a href="#">List Destinasi Wisata</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        @foreach($destinasi as $dest)
        <div class="col-md-4 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ $dest->title }}</h4>
                    <p>{!! $dest->deskripsi !!}</p>
                    <img class="d-flex w-100" src="{{ asset('/image-destinasi/' . $dest->image) }}" alt="First slide">
                    <a class="btn btn-info btn-rounded mt-2" href="/dashboard/detail-destinasi-wisata/{{ base64_encode($dest->id) }}"> <i class="nav-icon i-Pen-2"></i> Edit</a>
                    <a class="btn btn-danger btn-rounded mt-2" id="dest-del-{{ $dest->id }}" onClick="destDel(this)" data-id="{{ $dest->id }}" href="#"> <i class="nav-icon i-Close-Window"></i> Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
        <!-- <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#exampleModal">Launch demo modal</button> -->
    </div>

    <div class="modal fade" id="delDestinasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Destinasi Wisata</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="/dashboard/delete-destinasi-wisata" method="post">
                @csrf
                @method('delete')
                    <div class="modal-body">
                        <input type="hidden" id="id-del" name="id_del">
                        <input type="hidden" id="oldImages" name="oldImages">
                        <p>Yakin akan hapus destinasi <strong id="title-del"></strong></p>
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