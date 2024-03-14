@extends('layout.main')

@section('title','dashboard')

@section('content')
<h3>Welcome, !</h3>

<!-- cards-->
<div class="row mt-4">
    <div class="col-4">
        <div class="books card-data">
        <div class="row">
            <div class="col-6">
                <i class="bi bi-bookmarks"></i>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-end ">
                <div class="desc">
                    Barang
                </div>
                <div class="count">
                    
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="category card-data">
        <div class="row">
            <div class="col-6">
            <i class="bi bi-tags"></i>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-end ">
                <div class="desc">
                    Stok
                </div>
                <div class="count">
                
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-4">
        <div class="user card-data">
        <div class="row">
            <div class="col-6">
            <i class="bi bi-person"></i>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center align-items-end ">
                <div class="desc">
                    Petugas
                </div>
                <div class="count">
               
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<!-- End Crdds -->

<!-- Table Rent logs -->

<div class="mt-4">
    <table class="table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7"
                    class="text-center">No Data</td>
            </tr>
        </tbody>
    </table>
</div>

<!-- End CTable -->


@endsection