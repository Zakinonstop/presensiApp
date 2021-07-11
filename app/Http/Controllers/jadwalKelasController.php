<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class jadwalKelasController extends Controller
{
    //
    public function index()
    {
        // $user = User::findorFail($id);
        return view('jadwalKelas.jadwalKelas');
    }
    /*  $keyword = $request->get('keyword');

    $jadwal = AppJadwal::with(['mapel', 'jam', 'kelas'])->get();
    $kelas = AppKelas::all();
    $CariKelas = AppKelas::all();

    if ($keyword) {
        $jadwal = AppJadwal::with(['mapel', 'jam', 'kelas'])
            ->where('kelas_id', '=', "$keyword")
            ->get();

        // $jadwal = AppJadwal::where('kelas_id', '=', "$keyword");
        // $jadwal = AppJadwal::with(['mapel', 'jam', 'kelas'])->where('kelas_id', '=', "$keyword");
        // dd($jadwal);
    }
    return view('jadwal.jadwal', compact('jadwal', 'kelas', 'CariKelas')); */
}
