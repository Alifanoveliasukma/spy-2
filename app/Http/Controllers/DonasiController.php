<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    //
    public function index()
    {
        $donasi = Donasi::all();
        return view('admin.admin', compact(['donasi']));
    }

    public function tambah()
    {
        return view('donasi.create');
    }

    public function store(Request $request) 
    {
        $donasi = Donasi::create($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $donasi->gambar = $request->file('gambar')->getClientOriginalName();
            $donasi->save();
        }
        return redirect('/tambah');   
    }

    public function edit($id)
    {
        $donasi = Donasi::find($id);
        return view('donasi.edit', compact(['donasi']));
    }

    public function update (Request $request, $id)
    {
        $donasi = Donasi::find($id);
        $donasi->update($request->all());
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $donasi->gambar = $request->file('gambar')->getClientOriginalName();
            $donasi->save();
        }
        return redirect('/donasi');
    }

    public function delete($id)
    {
        $donasi = Donasi::find($id);
        $donasi->delete();
        return redirect('/donasi');
    }
}
