<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;
use App\Models\Sampah;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        return view ('admin.index');
    }

    public function user()
    {
        $users = User::all();
        return view ('admin.tabel-user', ['users' => $users]);
    }

    public function konfirmasi()
    {
        $data = Sampah::join('users', 'users.id', '=', 'sampahs.user_id')
            ->join('pengirimans', 'pengirimans.user_id', '=', 'users.id')
            ->where('sampahs.confirm', '=', 0)
            ->get([
                'sampahs.id',
                'users.name',
                'pengirimans.alamat',
                'pengirimans.telepon',
                'sampahs.sampah',
                'sampahs.jenis',
                'sampahs.massa',
                'sampahs.harga',
                'sampahs.confirm',
            ]);
        return view ('admin.konfirmasi', ['datas' => $data]);
    }

    public function konfirmasi_sampah(Request $request, Sampah $sampah)
    {
        Sampah::where('id', $sampah->id)->update(['confirm' => 1]);
        return redirect()->route('admin.konfirmasi')->with('pesan', 'Data berhasil dikonfirmasi!');
    }

    public function show_konfirmasi(Request $request, Sampah $sampah)
    {
        $datas = Sampah::join('users', 'users.id', '=', 'sampahs.user_id')
            ->join('pengirimans', 'pengirimans.user_id', '=', 'users.id')
            ->where('sampahs.id', '=', $sampah->id)
            ->get([
                'sampahs.id',
                'users.name',
                'pengirimans.alamat',
                'pengirimans.telepon',
                'sampahs.sampah',
                'sampahs.jenis',
                'sampahs.massa',
                'sampahs.harga',
                'sampahs.confirm',
            ]);
        return view ('admin.show', ['data' => $datas]);
    }

    public function pesanan(){
        $data = Sampah::join('users', 'users.id', '=', 'sampahs.user_id')
            ->join('pengirimans', 'pengirimans.user_id', '=', 'users.id')
            ->get([
                'sampahs.id',
                'users.name',
                'pengirimans.alamat',
                'pengirimans.telepon',
                'sampahs.sampah',
                'sampahs.jenis',
                'sampahs.massa',
                'sampahs.harga',
                'sampahs.confirm',
            ]);
        return view ('admin.pesanan', ['datas' => $data]);
    }

    public function destroy(Sampah $sampah)
    {
        Sampah::destroy($sampah->id);
        return redirect()->route('admin.pesanan')->with('pesan', 'Data berhasil dihapus!');
    }
}
