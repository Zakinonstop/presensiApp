<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Absen;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function timeZone($location)
    {
        return  date_default_timezone_set($location);
    }

    public function index()
    {
        $this->timeZone('Asia/Jakarta');
        $user_id  = Auth::user()->id;
        $date = date("Y-m-d");
        $cek_absen = Absen::where(['user_id' => $user_id, 'date' => $date])
            ->get()
            ->first();



        if (isset($cek_absen)) {
            $info = [
                "status" => "anda belum presensi"
            ];
        }

        // if (is_null($cek_absen)) {
        //     $info  = array([
        //         "status" => "Anda belum melakukan Presensi",
        //         "btnIn" => " ",
        //         "btnOut" => "disable",
        //     ]);
        // } elseif ($cek_absen->time_out == NULL) {
        //     $info  = array([
        //         "status" => "Jangan Lupa Presensi Keluar",
        //         "btnIn" => "disable",
        //         "btnOut" => "",
        //     ]);
        // } else {
        //     $info  = array([
        //         "status" => "Presensi telah selesai",
        //         "btnIn" => "disable",
        //         "btnOut" => "disable",
        //     ]);
        // }

        $cek_absen = Absen::where(['date' => $date, 'user_id' => $user_id])
            ->get()
            ->first();


        $data_absen = Absen::where('user_id', $user_id)
            ->orderBy('date', 'desc')
            ->paginate(8);

        if (!isset($cek_absen)) {
            $info  = array(
                "status" => "Anda belum melakukan Presensi",
                "btnIn" => "enable",
                "btnOut" => "disabled",
            );
        } elseif (isset($cek_absen)) {
            if ($cek_absen->time_out == NULL) {
                $info  = array(
                    "status" => "Jangan Lupa Presensi Keluar yaa..",
                    "btnIn" => "disabled",
                    "btnOut" => "",
                );
            } else {
                $info  = array(
                    "status" => "Presensi Selesai.",
                    "btnIn" => "disabled",
                    "btnOut" => "disabled",
                );
            }
        }


        return view('home', compact('data_absen', 'cek_absen', 'info'));
    }

    public function absen(Request $request)
    {
        $user_id = Auth::user()->id;
        $date = date("Y-m-d");
        $time = date("H:i:s");
        $note = $request->note;

        $absen = new Absen;

        if (isset($request->btnIn)) {
            $cek_double = $absen->where(['date' => $date, 'user_id' => $user_id])
                ->count();

            if ($cek_double > 0) {
                return redirect()->back();
            }

            $absen->create([
                'user_id' => $user_id,
                'date' => $date,
                'time_in' => $time,
                'note' => $note,
            ]);

            return redirect()->back();
            // return "absen masuk";
        } elseif (isset($request->btnOut)) {

            // $absen = Absen::find($user_id);
            // $absen->time_out = $time;
            // $absen->note = $note;
            // $absen->save();

            // $absen->where(['date' => $date, 'user_id' => $user_id])
            //     ->update([
            //         'time_out' => $time,
            //         'note' => $note
            //     ]);

            $absen = DB::table('Absen')
                ->where('user_id', $user_id)
                ->update([
                    'time_out' => $time,
                    'note' => $note
                ]);
            return redirect()->back();
            // return "absen keluar";
        }

        return $request->all();
    }
}
