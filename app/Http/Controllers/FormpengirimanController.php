<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Pengiriman;

class FormpengirimanController extends Controller
{
    public function create()
    {
        return view('pengiriman.form-pengiriman');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama' => 'required|min:0|max:100',
            'telepon' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Pengiriman::create($validateData);
        return redirect()->route('pengiriman.datapenjualan')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function datapenjualan()
    {
        $pengiriman = Pengiriman::where('user_id', auth()->user()->id)->get();
        return view('pengiriman.tabel-data', ['pengirimans' => $pengiriman]);
    }

    public function tampil(Pengiriman $pengiriman)
    {
        $result = Pengiriman::find($pengiriman->id);
        return view('pengiriman.show', ['pengiriman' => $result]);
    }

    public function edit(Pengiriman $pengiriman)
    {
        return view('pengiriman.edit',['pengiriman' => $pengiriman]);
    }


    public function update(Request $request, Pengiriman $pengiriman){
        $validateData = $request->validate([
            'nama' => 'required|min:0|max:100',
            'telepon' => 'required|numeric',
            'alamat' => 'required',
        ]);

        $validateData['user_id'] = auth()->user()->id;

        Pengiriman::where('id',$pengiriman->id)->update($validateData);
        return redirect()->route('pengiriman.tampil',['pengiriman' => $pengiriman->id])
            ->with('pesan',"Update Data Berhasil");
    }

    public function destroy(Pengiriman $pengiriman)
    {
        $pengiriman->delete();
        return redirect()->route('pengiriman.datapenjualan')
            ->with('pesan',"Hapus Data Berhasil");
    }
}
