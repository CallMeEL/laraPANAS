<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Sampah;

class SampahController extends Controller
{
    public function index(){
        $sampah = Sampah::where('user_id', auth()->user()->id)->where('confirm', '=', 1)->get();
        return view('sampah.tabel-sampah', ['sampahs' => $sampah]);
    }

    public function create(){
        return view('sampah.form-sampah');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'sampah' => 'required|min:1|max:255',
            'jenis' => 'required',
            'massa' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Sampah::create($validateData);
        return redirect()->route('sampah.tabelsampah')->with('pesan', 'Data berhasil ditambahkan, Silahkan tunggu konfirmasi dari admin');
    }

    public function show(Sampah $sampah){
        $result = Sampah::find($sampah->id);
        return view('sampah.show', ['sampah' => $result]);
    }

    public function edit(Sampah $sampah){
        return view('sampah.edit', ['sampah' => $sampah]);
    }

    public function update(Request $request, Sampah $sampah){
        $validateData = $request->validate([
            'sampah' => 'required|min:1|max:255',
            'jenis' => 'required',
            'massa' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Sampah::where('id', $sampah->id)->update($validateData);
        return redirect()->route('sampah.tabelsampah')->with('pesan', 'Data berhasil diubah!');
    }

    public function destroy(Sampah $sampah){
        Sampah::destroy($sampah->id);
        return redirect()->route('sampah.tabelsampah')->with('pesan', 'Data berhasil dihapus!');
    }
}
