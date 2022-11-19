<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $active = "berita";
        $data = Berita::where('pegawai_id', auth()->user()->pegawai->id)->get();
        return view('berita.berita-index', compact('active', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "berita";
        return view('berita.berita-create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Berita::create([
            'judul'=>$request->judul,
            'konten'=>$request->konten,
            'pegawai_id'=>auth()->user()->pegawai->id,
            'thumbnail'=>$request->thumbnail,
        ]);
        if ($request->hasFile('thumbnail')) {
            $request->file('thumbnail')->move('thumbnail/', $request->file('thumbnail')->getClientOriginalName());
            $data->thumbnail = $request->file('thumbnail')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('berita.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data =  Berita::FindOrFail($id);
        $active = "berita edit";
        return view('berita.berita-edit', compact('active', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data = Berita::FindOrFail($id);
        if($request->thumbnail == null){
            $data->update([
                'judul'=>$request->judul,
                'konten'=>$request->konten,
                'pegawai_id'=>auth()->user()->pegawai->id,
                'thumbnail'=>$request->thumbnail,
            ]);
            return redirect()->back();
        }else{
            if (file_exists(public_path() . '/thumbnail/'.$data->thumbnail)) {
                unlink(public_path() . '/thumbnail/'.$data->thumbnail);
            }
           
            $data->update([
                'judul'=>$request->judul,
                'konten'=>$request->konten,
                'pegawai_id'=>auth()->user()->pegawai->id,
                'thumbnail'=>$request->thumbnail,
            ]);
            if ($request->hasFile('thumbnail')) {
                $request->file('thumbnail')->move('thumbnail/', $request->file('thumbnail')->getClientOriginalName());
                $data->thumbnail = $request->file('thumbnail')->getClientOriginalName();
                $data->save();
            }
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Berita::FindOrFail($id);
        if (file_exists(public_path() . '/thumbnail/'.$data->thumbnail)) {
            unlink(public_path() . '/thumbnail/'.$data->thumbnail);
            $data->delete();
        }
        $data->delete();
        return redirect()->back();
    }
}
