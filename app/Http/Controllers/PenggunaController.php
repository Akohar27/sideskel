<?php

namespace App\Http\Controllers;

use App\Pengguna;
use Illuminate\Http\Request;
use App\Http\Requests\PenggunaRequest;
use Session;

class PenggunaController extends Controller
{
    public function index()
    {
        $daftar_pengguna = Pengguna::paginate(25);
        return view('pengguna.index', compact('daftar_pengguna'));
    }

    public function destroy(Pengguna $pengguna)
    {
        $pengguna->delete();
        Session::flash('pesan', '1 Pengguna Berhasil Dihapus');
        return redirect('pengguna');
    }
}
