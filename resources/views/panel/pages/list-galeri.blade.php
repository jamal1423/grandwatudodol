@extends('panel.layout.main')
@section('content')
    <div class="breadcrumb">
        <h1 class="mr-2">GWD</h1>
        <ul>
            <li><a href="#">List Galeri</a></li>
        </ul>
    </div>
    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        @foreach($galeri as $gal)
        <div class="col-md-4 mb-4">
            <div class="card text-left">
                <div class="card-body">
                    <img class="d-flex w-100" src="{{ asset('/image-galeri/' . $gal->image) }}" alt="First slide">
                    <a class="btn btn-danger btn-rounded mt-2" id="galeri-del-{{ $gal->id }}" onClick="galeriDel(this)" data-id="{{ $gal->id }}" href="#"> <i class="nav-icon i-Close-Window"></i> Hapus</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="modal fade" id="delGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Foto</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <form action="/dashboard/delete-galeri" method="post">
                @csrf
                @method('delete')
                    <div class="modal-body">
                        <input type="hidden" id="id-del" name="id_del">
                        <input type="hidden" id="oldImages" name="oldImages">
                        <p class="text-center">Yakin akan hapus foto ini?</p>
                        <div id="dropzone1">
                            <div id="img"></div>
                        </div>
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