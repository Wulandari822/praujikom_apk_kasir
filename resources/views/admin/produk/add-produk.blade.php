@extends('layout.main')

@section('title', 'Add Produk')

@section ('content')
<h1>Add Produk</h1>


<form action="/produk-add" method="post">
    @csrf
    <label for="NamaProduk" class="form-label">Nama Produk</label>
    <input type="text" name="NamaProduk" id="NamaProduk" class="form-control w-50">
    <label for="Harga" class="form-label">Harga</label>
    <input type="text" name="Harga" id="Harga" class="form-control w-50">
    <label for="Stok" class="form-label">Stok</label>
    <input type="text" name="Stok" id="Stok" class="form-control w-50">
    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>

@endsection