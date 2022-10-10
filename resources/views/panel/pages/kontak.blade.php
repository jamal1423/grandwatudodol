@extends('panel.layout.main')
@section('content')
<div class="breadcrumb">
    <h1 class="mr-2">GWD</h1>
    <ul>
        <li><a href="#">Kontak</a></li>
    </ul>
</div>
<div class="separator-breadcrumb border-top"></div>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <form class="needs-validation" novalidate="novalidate" action="/dashboard/update-kontak" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-row">
                        @foreach($kontakData as $kontak)
                        <div class="col-md-12 mb-3">
                            <label for="validationCustom02">Alamat</label>
                            <input type="hidden" name="id" value="{{ $kontak->id }}">
                            <input class="form-control @error('alamat') is-invalid @enderror" id="validationCustom02" type="text" value="{{ old('alamat', $kontak->alamat) }}" name="alamat" placeholder="Alamat" required="required">
                            @error('alamat')
                                <div class="invalid-feedback"></div>
                                <span class="text-danger" style="font-size:11px;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">No. WA</label>
                            <input class="form-control @error('no_wa') is-invalid @enderror" id="validationCustom02" type="text" value="{{ old('no_wa', $kontak->no_wa) }}" name="no_wa" placeholder="No. WA" required="required">
                            @error('no_wa')
                                <div class="invalid-feedback"></div>
                                <span class="text-danger" style="font-size:11px;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email</label>
                            <input class="form-control @error('email') is-invalid @enderror" id="validationCustom02" type="text" value="{{ old('email', $kontak->email) }}" name="email" placeholder="Email" required="required">
                            @error('email')
                                <div class="invalid-feedback"></div>
                                <span class="text-danger" style="font-size:11px;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Instagram</label>
                            <input class="form-control @error('ig') is-invalid @enderror" id="validationCustom02" type="text" value="{{ old('ig', $kontak->ig) }}" name="ig" placeholder="Instagram" required="required">
                            @error('ig')
                                <div class="invalid-feedback"></div>
                                <span class="text-danger" style="font-size:11px;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Facebook</label>
                            <input class="form-control @error('fb') is-invalid @enderror" id="validationCustom02" type="text" value="{{ old('fb', $kontak->fb) }}" name="fb" placeholder="Facebook" required="required">
                            @error('fb')
                                <div class="invalid-feedback"></div>
                                <span class="text-danger" style="font-size:11px;">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        @endforeach
                    </div>
                    
                    <button class="btn btn-primary" type="submit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection