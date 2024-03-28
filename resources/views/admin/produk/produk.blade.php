@extends('layout.main')

@section('title', 'Produks')

@section('content')
    <h1>Produk List</h1>
    <div class="mt-4 d-flex justify-content-end">
        <a href="/produk-add" class="btn btn-primary">New Produk</a>
    </div>



    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Produk</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produks as $item)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/foto/' . $item->foto) }}" alt="" width="50crvipx">
                        </td>
                        <td>{{ $item->NamaProduk }}</td>
                        <td>{{ $item->Harga }}</td>
                        <td>{{ $item->Stok }}</td>
                        <td>
                            <a href="/produk-edit/{{ $item->id }}" class="btn btn-primary">Edit</a>
                            <a href="/produk-stok/{{ $item->id }}" class="btn btn-primary">Update Stok</a>
                            <a href="/produk-delete/{{ $item->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

@endsection
