<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Kelas as AppKelas;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    //
    public function index()
    {
        $kelas = AppKelas::all();
        // dump($kelas);

        return view('kelas.kelas', ['kelas' => $kelas]);
    }

    public function formKelas()
    {
        return view('kelas.formTambahKelas');
    }


    public function insert(Request $request)
    {
        $validasi = $request->validate([
            'nama_kelas' => 'required|max:255',
        ]);

        $nama_kelas = $validasi['nama_kelas'];

        DB::insert("insert into kelas(nama_kelas, created_at, updated_at)
        values('$nama_kelas', now(), now())");

        return redirect('/kelas')->with('insert', 'Data Berhasil di Tambah !');
    }


    public function delete($id)
    {
        $kelas = AppKelas::find($id);
        $kelas->delete();

        return redirect('/kelas')->with('delete', 'Data Berhasil di Hapus !');
    }


    public function formEditKelas($id)
    {
        $kelas = AppKelas::findOrFail($id);

        return view('kelas.formEditKelas', ['kelas' => $kelas]);
    }


    public function update(Request $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->nama_kelas);

        $kelas = AppKelas::findOrFail($id);

        $kelas->update($data);


        return redirect('/kelas')->with('update', 'Data Berhasil di Edit !');
    }
}
