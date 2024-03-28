@extends('layout.main')

@section('title','Users')

@section('content')
<h1>User List</h1>
<div class="mt-4 d-flex justify-content-end">
    <a href="/users-add" class="btn btn-primary">New User</a>
</div>



<div class="mt-5">
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>No. Telp</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $item)
            <tr>
                <td>{{$item->NamaPelanggan}}</td>
                <td>{{$item->NomorTelepon}}</td>
                <td>{{$item->Alamat}}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="/users-delete/{{$item->id}}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection