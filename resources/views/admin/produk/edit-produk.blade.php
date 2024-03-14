@extends('layout.main')

@section('title', 'Update Produk')

@section ('content')
<h1>Update category</h1>


<form action="/produk-edit/{{$produk->id}}" method="post">
    @csrf
    @method('put')
    <label for="NamaProduk" class="form-label">Nama Produk</label>
    <input type="text" name="NamaProduk" id="NamaProduk" class="form-control w-50" value="{{$produk->NamaProduk}}">
    <label for="Harga" class="form-label">Harga</label>
    <input type="text" name="Harga" id="Harga" class="form-control w-50" value="{{$produk->Harga}}">
    <label for="Stok" class="form-label">Stok</label>
    <input type="text" name="Stok" id="Stok" class="form-control w-50" value="{{$produk->Stok}}">
    <button type="submit" class="btn btn-success mt-3">Update</button>
</form>

@endsection