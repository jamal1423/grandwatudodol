@extends('panel.layout.main')
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">GWD</h1>
    <ul>
        <li><a href="#">Galeri</a></li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation" novalidate="novalidate" action="/dashboard/post-galeri" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom01">Foto Galeri</label>
                            @error('image')
                                <p class="text-danger" style="margin-left: 30px;">{{ $message }}</p>
                            @enderror
                            <div id="dropzone1" style="width: 100%;height:300px;margin-top: 0px;">
                                <div style="width:33%;">Select Image</div>
                                <input type="file" name="image" accept="image/png, image/gif, image/jpeg" />
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Tambahkan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection