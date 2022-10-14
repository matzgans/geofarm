<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lahan;

class LandingController extends Controller
{
    public function index()
    {
        $data = Lahan::get();
        return view('welcome', compact('data'));
    }
    
    public function dashboard()
    {
        $data = Lahan::get();
        return view('dashboard', compact('data'));
    }
}
