@extends('panel.layout.main')
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">GWD</h1>
    <ul>
        <li><a href="#">Edit Destinasi Wisata</a></li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation" novalidate="novalidate" action="/dashboard/update-paket-wisata" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Gambar Paket</label>
                            @error('image')
                                <p class="text-danger" style="margin-left: 30px;">{{ $message }}</p>
                            @enderror
                            <div id="dropzone1" style="width: 100%;height:300px;margin-top: 0px;">
                                <div style="width:40%;"></div>
                                <img src="{{ asset('/image-paket-wisata/' . $detail_paket->image) }}" class="img-fluid" alt="Product Image">
                                <input type="file" name="image" accept="image/png, image/gif, image/jpeg" />
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Title</label>
                            <input class="form-control @error('title') is-invalid @enderror" id="validationCustom02" type="text" value="{{ old('title', $detail_paket->title) }}" name="title" placeholder="Title" required="required">
                            <input class="form-control @error('oldTitle') is-invalid @enderror" id="validationCustom02" type="hidden" value="{{ old('oldTitle', $detail_paket->title) }}" name="oldTitle" placeholder="Title" required="required">
                            @error('title')
                                <div class="invalid-feedback"></div>
                                <span class="text-danger" style="font-size:11px;">
                                    {{ $message }}
                                </span>
                            @enderror
                            <input type="hidden" value="{{ $detail_paket->id }}" id="id" name="id">
                            <input type="hidden" value="{{ $detail_paket->image }}" name="oldImage" id="oldImage">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Harga</label>
                            <input id="harga" type="hidden" name="harga" value="{{ old('harga', $detail_paket->harga) }}">
                            <trix-editor input="harga"></trix-editor>
                            @error('harga')
                                <p class="text-danger" style="font-size:11px;">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Fasilitas</label>
                            <input id="fasilitas" type="hidden" name="fasilitas" value="{{ old('fasilitas', $detail_paket->fasilitas) }}">
                            <trix-editor input="fasilitas"></trix-editor>
                            @error('fasilitas')
                                <p class="text-danger" style="font-size:11px;">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection