<?php

namespace App\Http\Controllers;

use App\Models\{Poktan, Petani, Desa};
use Illuminate\Http\Request;

class PoktanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = 'poktan';

        $data = Poktan::all();
        $desa = Desa::get();
        $petani = Petani::get();

        return view('poktan.poktan-index', compact('data', 'active', 'desa', 'petani'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function show(Poktan $poktan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function edit(Poktan $poktan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Poktan $poktan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Poktan  $poktan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Poktan $poktan)
    {
        //
    }
}
