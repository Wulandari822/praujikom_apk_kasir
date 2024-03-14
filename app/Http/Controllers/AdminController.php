<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;
use App\Models\Produk;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function users()
    {
        $users = Pelanggan::all();
        return view('admin.user.user' , ['users' => $users]);
    }

    public function usersAdd()
    {
        
        return view ('admin.user.add-user');
    }

    public function usersStore(Request $request)
    {
         //validate data masuk apa engga
         $validated = $request->validate([
            'NamaPelanggan' => 'required',
            'NomorTelepon' => 'required',
            'Alamat' => 'required',
        ]);

       //memasukkan data ke database kita
       $user = Pelanggan::create($request->all());
       return redirect('users')->with('status', 'User Added Successfully.');
    }

    public function produk()
    {
        $produks = Produk::all();
        return view('admin.produk.produk', ['produks' => $produks]);
    }

    public function produkAdd()
    {
        
        return view ('admin.produk.add-produk');
    }

    public function produkStore(Request $request)
    {
         //validate data masuk apa engga
         $validated = $request->validate([
            'NamaProduk' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
        ]);

       //memasukkan data ke database kita
       $produks = Produk::create($request->all());
       return redirect('produk')->with('status', 'Produk Added Successfully.');
    }
    
    public function produkEdit($id){
        $produk = Produk::where('id', $id)->first();
        return view ('admin.produk.edit-produk', ['produk' => $produk]);
    }
    
    public function produkUpdate(Request $request, $id){
        $validated = $request->validate([
            'NamaProduk' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
        ]);

        $produk = Produk::where('id', $id)->first();
        $produk->update($request->all());
        $produk->id = null;
        return redirect ('produk')->with('status', 'Produk Updated Successfully.');
    }
}
