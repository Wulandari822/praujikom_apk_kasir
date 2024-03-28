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

    public function usersDestroy($id){
        $user = Pelanggan::where('id', $id)->first();
        $user->delete();
        return redirect ('users')->with('status', 'User Deleted Successfully');
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
        // Validate data
        $validated = $request->validate([
            'NamaProduk' => 'required',
            'Harga' => 'required',
            'Stok' => 'required',
        ]);
    
        // Menambahkan "Rp." ke inputan harga sebelum disimpan ke database
        $harga = 'Rp. ' . $request->Harga ;

    
        $newName = '';
    
        if($request->file('img')){
            $extension = $request->file('img')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('img')->storeAs('foto', $newName);
        }
    
        $request['foto'] = $newName;
    
        $produk = Produk::create([
            'NamaProduk' =>  $request->NamaProduk,
            'Harga' =>  $harga,
            'Stok' =>  $request->Stok,
            'img' => $newName,
        ]);
    
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

        // Menambahkan "Rp." ke inputan harga sebelum disimpan ke database
        $harga = 'Rp. ' . $request->Harga ;


        $produk = Produk::where('id', $id)->first();
        $produk->update([
            'NamaProduk' => $request->NamaProduk,
            'Harga' => $harga,
            'Stok' => $request->Stok,
        ]);
        
        return redirect ('produk')->with('status', 'Produk Updated Successfully.');
    }

    public function produkStokEdit($id)
    {
        $stok = Produk::where('id', $id)->first();
        return view ('admin.produk.update-stok', ['stok' => $stok]);
    }


    public function produkStokUpdate(Request $request, $id)
    {
        $validated = $request->validate([
            'Stok' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update(['Stok' => $request->Stok]);
        return redirect('produk')->with('status', 'Stok Updated Successfully.');
    }

    public function produkDestroy($id){
        $produk = Produk::where('id', $id)->first();
        $produk->delete();
        return redirect ('produk')->with('status', 'Produk Deleted Successfully');
    }

    public function pembelian()
    {
        return view('admin.pembelian.pembelian');
    }
}
