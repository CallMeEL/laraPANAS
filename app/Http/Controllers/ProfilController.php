<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index(){
        return view('form-fotoprofil');
    }

    public function prosesFileUpload(Request $request){
       $request->validate([
        'foto' => 'required|file|image|max:1000',
       ]);
       $extFile = $request->foto->getClientOriginalExtension();
       $namaFile = 'profil-'.time().".".$extFile;
       $path = $request->foto->move('image',$namaFile);
       echo "Variabel path berisi: $path <br>";

       $pathBaru = asset('image/'.$namaFile);
       return view('home.halaman-beranda');
    }
}
