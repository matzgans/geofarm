<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reponse;

class ReponseController extends Controller
{
    public function index()
    {
        $active = 'respon';
        $data = Reponse::all();
        return view('respon.respon-index', compact('active', 'data'));
    }

    public function store(Request $request)
    {
        Reponse::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'lahan_id'=>$request->lahan_id,
            'response'=>$request->response,
        ]);
        return redirect()->back();
    }
}
