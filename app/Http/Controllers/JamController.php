<?php

namespace App\Http\Controllers;

use App\Jam as AppJam;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class JamController extends Controller
{
    //get
    public function index()
    {
        $jam = AppJam::all();
        // dump($jam);

        return view('jam.jam', ['jam' => $jam]);
    }

    public function formJam()
    {
        return view('jam.formTambahJam',);
    }

    public function insert(Request $request)
    {
        $validasi = $request->validate([
            'jam_ke' => 'required',
            'jam_masuk' => 'required',
            'jam_keluar' => 'required',
        ]);

        $jam_ke = $validasi['jam_ke'];
        $jam_masuk = $validasi['jam_masuk'];
        $jam_keluar = $validasi['jam_keluar'];

        DB::insert("insert into jam(jam_ke,jam_masuk, jam_keluar, created_at, updated_at)
        values('$jam_ke','$jam_masuk','$jam_keluar', now(), now())");

        return redirect('/jam')->with('insert', 'Data Berhasil Ditambahkah !');
    }

    public function delete($id)
    {
        $jam = AppJam::find($id);
        $jam->delete();

        return redirect('/jam')->with('delete', 'Data Berhasil Dihapus !');
    }


    public function formEditJam($id)
    {
        $jam = AppJam::findOrFail($id);

        return view('jam.formEditJam', ['jam' => $jam]);
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $data['slug'] = Str::slug($request->jam_ke);
        // $data['slug'] = Str::slug($request->jam_masuk);
        // $data['slug'] = Str::slug($request->jam_keluar);

        $jam = AppJam::findOrFail($id);

        $jam->update($data);


        return redirect('/jam')->with('update', 'Data Berhasil Diedit !');
    }
}
