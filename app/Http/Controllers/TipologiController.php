<?php

namespace App\Http\Controllers;

use App\Tipologi;
use Illuminate\Http\Request;
use App\Http\Requests\TipologiRequest;
use Session;

class TipologiController extends Controller
{
    public function index()
    {
        $daftar_tipologi = Tipologi::all();
        return view('tipologi.index', compact('daftar_tipologi'));
    }

    public function create()
    {
        return view('tipologi.create');
    }

    public function store(TipologiRequest $request)
    {
        Tipologi::create($request->all());
        Session::flash('pesan', '1 Tipologi Berhasil Disimpan');
        return redirect('tipologi');
    }

    public function edit(Tipologi $tipologi)
    {
        return view('tipologi.edit', compact('tipologi'));
    }

    public function update(TipologiRequest $request, Tipologi $tipologi)
    {
        $tipologi->update($request->all());
        Session::flash('pesan', '1 Tipologi Berhasil Diupdate');
        return redirect('tipologi');
    }

    public function destroy(Tipologi $tipologi)
    {
        $tipologi->delete();
        Session::flash('pesan', '1 Tipologi Berhasil Dihapus');
        return redirect('tipologi');
    }
}
