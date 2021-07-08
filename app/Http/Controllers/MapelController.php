<?php

namespace App\Http\Controllers;

use App\Mapel as AppMapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Laravel\Ui\Presets\React;

class MapelController extends Controller
{
    //
    public function index()
    {
        $mapel = AppMapel::all();
        // dump($mapel);

        return view('mapel.mapel', ['mapel' => $mapel]);
    }

    public function formMapel()
    {
        return view('mapel.formTambahMapel',);
    }

    public function formEditMapel($id)
    {
        $mapel = AppMapel::findOrFail($id);

        return view('mapel.formEditMapel', ['mapel' => $mapel]);
    }

    public function insert(Request $request)
    {
        $validasi = $request->validate([
            'nama_mapel' => 'required|max:255',
        ]);

        $nama_mapel = $validasi['nama_mapel'];

        DB::insert("insert into mapel(nama_mapel, created_at, updated_at)
        values('$nama_mapel', now(), now())");

        return redirect('/mapel');
    }

    public function delete($id)
    {
        $mapel = AppMapel::find($id);
        $mapel->delete();

        return redirect('/mapel');
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_mapel);

        $mapel = AppMapel::findOrFail($id);

        $mapel->update($data);


        return redirect('/mapel');
    }
}
