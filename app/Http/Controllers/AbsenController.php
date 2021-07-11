<?php

namespace App\Http\Controllers;

use App\Absen as AppAbsen;

use Illuminate\Http\Request;

class AbsenController extends Controller
{
    //
    public function index()
    {
        $presensi = AppAbsen::with('user')->get();
        // dump($absen);

        return view('presensi.presensi', compact('presensi'));
    }


    public function delete($id)
    {
        $presensi = AppAbsen::find($id);
        $presensi->delete();

        return redirect('/presensi')->with('delete', 'Data Berhasil di Hapus !');
    }
}
