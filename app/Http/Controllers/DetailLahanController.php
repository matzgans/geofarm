<?php

namespace App\Http\Controllers;

use App\Models\Detail_lahan;
use Illuminate\Http\Request;
use App\Models\Lahan;

class DetailLahanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Lahan::all();
        return view('detail_lahan.detail-lahan-index' ,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        dd($id);
        return view('detail_lahan.detail-lahan-create');
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
     * @param  \App\Models\Detail_lahan  $detail_lahan
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_lahan $detail_lahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail_lahan  $detail_lahan
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail_lahan $detail_lahan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail_lahan  $detail_lahan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail_lahan $detail_lahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail_lahan  $detail_lahan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail_lahan $detail_lahan)
    {
        //
    }
}
