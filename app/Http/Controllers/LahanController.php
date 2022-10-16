<?php

namespace App\Http\Controllers;

use App\Models\{Lahan, Petani};
use Illuminate\Http\Request;

class LahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lahan::all();
<<<<<<< Updated upstream
        $active = 'lahan';
        return view('lahan.lahan-index', compact('data','active'));
=======
        $item = Lahan::where('petani_id', auth()->user()->petani->id)->first();
        dd($item->created_at);
        return view('lahan.lahan-index', compact('data'));
>>>>>>> Stashed changes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Petani::get();
        $active = 'lahan';
        return view('lahan.lahan-create', compact('data', 'active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lahan::create([
            'luas'=>$request->luas,
            'status_pengairan'=>$request->status_pengairan,
            'lat'=>$request->lat,
            'long'=>$request->long,
            'petani_id'=>auth()->user()->petani->id,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function show(Lahan $lahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Lahan $lahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lahan $lahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lahan  $lahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lahan $lahan)
    {
        //
    }
}
