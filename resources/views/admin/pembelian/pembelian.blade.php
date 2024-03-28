@extends('layout.main')

@section('title', 'Produks')

@section('content')
<h1>Pembelian List</h1>
    <div class="mt-4 d-flex justify-content-end">
        <a href="#" class="btn btn-primary">New Pembelian</a>
    </div>


    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Pelanggan</th>
                    <th>Tanggal Penjualan</th>
                    <th>Total Harga </th>
                    <th>Dibuat Oleh</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
               
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#" class="btn btn-primary">Lihat</a>
                            <a href="#" class="btn btn-primary">Unduh Bukti</a>
                            <a href="#" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>
    </div>
@endsection