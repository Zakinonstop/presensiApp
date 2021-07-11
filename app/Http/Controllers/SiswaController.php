<?php

namespace App\Http\Controllers;

use AppSiswa;
use App\User;
use App\Kelas as AppKelas;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    //
    public function index()
    {
        $siswa = User::with('kelas')->get();
        // dump($siswa);
        return view('siswa.siswa', ['siswa' => $siswa]);
    }


    public function delete($id)
    {
        $siswa = User::find($id);
        $siswa->delete();

        return redirect('/dataSiswa')->with('delete', 'Data Berhasil di Hapus !');
    }


    public function formSiswa()
    {

        $kelas = AppKelas::all();

        return view('siswa.formTambahSiswa', compact('kelas'));
    }
}
