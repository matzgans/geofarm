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
        $data = Lahan::where('petani_id', auth()->user()->petani->id)->get();
        $detail_lahan = Detail_lahan::join('lahans','lahans.id','=','detail_lahans.lahan_id')
            ->select('detail_lahans.*','lahans.id')
            ->where('lahans.petani_id',auth()->user()->petani->id)->get();
        $active = 'dashboard';
        $active = 'detaillahan';
        return view('detail_lahan.detail-lahan-index' ,compact('data','active', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $data = Lahan::FindOrFail($id);
        $active = 'detaillahan';
        $active = 'dashboard';
        return view('detail_lahan.detail-lahan-create', compact('data', 'active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $jum_tanggal = date('Y-m-d', strtotime('+10 days', strtotime($request->tanggal_penanaman)));
        $request->request->add([
            'lahan_id'=>$id,
            'tanggal_panen'=>$jum_tanggal,
        ]);
        $data = Detail_lahan::create($request->all());
        if ($request->hasFile('foto_lahan')) {
            $request->file('foto_lahan')->move('foto_lahan/', $request->file('foto_lahan')->getClientOriginalName());
            $data->foto_lahan = $request->file('foto_lahan')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('detail_lahan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Detail_lahan  $detail_lahan
     * @return \Illuminate\Http\Response
     */
    public function show(Detail_lahan $detail_lahan)
    {
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
