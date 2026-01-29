@extends('layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="d-flex justify-content-between mb-4">
            <h2>Tambah Produk Baru</h2>
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('products.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <strong>Nama Produk:</strong>
                <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <strong>Harga:</strong>
                <input type="number" name="price" class="form-control" placeholder="Masukkan Harga">
            </div>
        </div>
        <div class="col-md-12 mb-3">
            <div class="form-group">
                <strong>Deskripsi:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Deskripsi produk"></textarea>
            </div>
        </div>
        <div class="col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
@endsection
