<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reponse;
use Illuminate\Validation\Rules\Unique;

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
        $request->validate([
            'nama'=>['required'],
            'email'=>['required', 'unique:reponses'],
        ]);
        Reponse::create([
            'nama'=>$request->nama,
            'email'=>$request->email,
            'lahan_id'=>$request->lahan_id,
            'response'=>$request->response,
        ]);
        return redirect()->back();
    }
}
