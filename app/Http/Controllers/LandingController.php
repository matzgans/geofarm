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
        if(auth()->user()->role != 'pegawai'){
            $petanis = auth()->user()->petani->lahans;
            return view('dashboard', compact('petanis'));
        }
        $countPetani = Petani::count();
        $countLahan = Lahan::count();
        return view('dashboard', compact('data', 'countPetani', 'countLahan'));
    }
}
