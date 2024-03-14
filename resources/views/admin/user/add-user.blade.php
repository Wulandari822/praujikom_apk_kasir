@extends('layout.main')

@section('title', 'Add Users')

@section ('content')
<h1>Add User</h1>


<form action="/users-add" method="post">
    @csrf
    <label for="NamaPelanggan" class="form-label">Name</label>
    <input type="text" name="NamaPelanggan" id="NamaPelanggan" class="form-control w-50">
    <label for="NomorTelepon" class="form-label">Phone</label>
    <input type="text" name="NomorTelepon" id="NomorTelepon" class="form-control w-50">
    <label for="Alamat" class="form-label">Address</label>
    <input type="text" name="Alamat" id="Alamat" class="form-control w-50">
    <button type="submit" class="btn btn-success mt-3">Save</button>
</form>

@endsection