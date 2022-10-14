<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Lahan, Petani};

class LandingController extends Controller
{
    public function index()
    {
        $data = Lahan::get();
        return view('landing.index', compact('data'));
    }
    
    public function dashboard()
    {
        $data = Lahan::get();
        $countPetani = Petani::count();
        $countLahan = Lahan::count();
        $active = "dashboard";
        return view('dashboard', compact('data', 'countPetani', 'countLahan','active'));
    }
}
