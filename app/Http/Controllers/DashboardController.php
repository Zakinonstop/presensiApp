<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //tampilkan menu dashboard
    public function index()
    {
        return view('dashboard');
    }
}
