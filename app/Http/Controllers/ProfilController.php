<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //

    public function index()
    {
        $profil = User::with('kelas')->get();
        // dump($profil);
        return view('profil.profil', ['profil' => $profil]);
    }
}
