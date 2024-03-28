@extends('layout.main')

@section('title', 'Update Stok')

@section ('content')
<h1>Update Stok</h1>

<form action="/produk-stok/{{$stok->id}}" method="post">
    @csrf
    @method('put')
    <label for="NamaProduk" class="form-label">Nama Produk</label>
    <input type="text" name="NamaProduk" id="NamaProduk" class="form-control w-50" value="{{$stok->NamaProduk}}" readonly>
    <label for="Stok" class="form-label">Stok</label>
    <input type="text" name="Stok" id="Stok" class="form-control w-50" value="{{$stok->Stok}}">
    <button type="submit" class="btn btn-success mt-3">Update</button>
</form>

<style>
    /* Add CSS style to visually indicate the readonly state */
    input[readonly] {
        background-color: #f8f9fa; /* Use any background color you prefer */
        border: 1px solid #ced4da; /* Add a border to visually differentiate it */
    }
</style>
@endsection