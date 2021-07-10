<?php

namespace App\Http\Controllers;

use App\Jadwal as AppJadwal;
use App\Jam as AppJam;
use App\Mapel as AppMapel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class JadwalController extends Controller
{
    //lihat jadwal
    public function index()
    {
        $jadwal = AppJadwal::with(['mapel', 'jam'])->get();
        return view('jadwal.jadwal', ['jadwal' => $jadwal]);
    }


    public function formJadwal()
    {
        $jam = AppJam::all();
        $mapel = AppMapel::all();

        // return view('jam.jam', ['jam' => $jam]);

        return view('jadwal.formTambahJadwal', compact('jam', 'mapel'));
    }


    public function insert(Request $request)
    {
        // $jadwal = AppJadwal::all();


        $validasi = $request->validate([
            'hari' => '',
            'jam_ke' => '',
            'nama_mapel' => '',
        ]);

        $hari = $validasi['hari'];
        $jam_ke = $validasi['jam_ke'];
        $nama_mapel = $validasi['nama_mapel'];

        $jadwal = DB::table('jadwal')
            ->where('hari', '=', $hari)
            ->where('jam_id', '=', $jam_ke)
            ->get();

        if (count($jadwal) > 0) {
            // $request->session()->flash('status', 'Task was successful!');
            return redirect('/tambahJadwal')->with('status', 'Hari dan Jam tersebut sudah terpakai !');
        } else {

            DB::insert("insert into jadwal(hari, jam_id, mapel_id, created_at, updated_at)
        values('$hari','$jam_ke','$nama_mapel', now(), now())");
        }

        return redirect('/jadwal')->with('insert', 'Data Berhasil di Tambah !');
    }


    public function delete($id)
    {
        $jadwal = AppJadwal::find($id);
        $jadwal->delete();

        return redirect('/jadwal')->with('delJadwal', 'Data Berhasil Dihapus !');
    }


    public function formEditJadwal($id)
    {
        // $jadwal = AppJadwal::findOrFail($id);
        $jad = AppJadwal::with('jam', 'mapel')->findOrNew($id);
        $jam = AppJam::all();
        $mapel = AppMapel::all();
        // $jad = AppJadwal::findOrFail($id);
        // dd($jadwal);

        return view('jadwal.formEditJadwal', compact('jad', 'jam', 'mapel'));
    }


    public function update(Request $request, AppJadwal $jadwal)
    {
        $jadwal->update([
            'hari' => $request->hari,
            'jam_id' => $request->jam_id,
            'mapel_id' => $request->mapel_id,
            'created_at' => now(),
        ]);

        return redirect('/jadwal')->with('update', 'Data Berhasil Di Edit !');
    }
}
