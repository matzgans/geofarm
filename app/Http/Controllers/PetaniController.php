<?php

namespace App\Http\Controllers;

use App\Models\{Petani, User};
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PetaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Petani::orderBy('id','desc')->get();
        $countPetani = Petani::count();
        $active = "petani";
        return view('petani.petani-index', compact('data', 'countPetani', 'active'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active = "petani";
        return view('petani.petani-create', compact('active'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = new User;
        $user->name = $request->nama_kelompok;
        $user->email = strtolower(str_replace(' ', '.', $request->nama_kelompok.'@gmail.com'));
        $user->password = bcrypt('poktan123');
        $user->role = 'petani';
        $user->remember_token = Str::random(60);
        $user->save();
        $request->request->add(['user_id'=> $user->id]);
        
        $data = Petani::create([
            'nama_kelompok'=>$request->nama_kelompok,
            'desa'=>$request->desa,
            'foto'=>$request->foto,
            'user_id'=>$request->user_id,
        ]);

        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('petani.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Petani::FindOrFail($id);
        $active = "petani";
        return view('petani.petani-show', compact('data','active'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Petani::FindOrFail($id);
        $active = "petani";
        return view('petani.petani-edit',compact('data','active'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Petani::FindOrFail($id);
        $data->user->update([
            'name'=>$request->nama_kelompok,
            'email'=>strtolower(str_replace(' ','.', $request->nama_kelompok.'.com')),
        ]);

        if($request->foto == null){
            $data->update([
                'nama_kelompok'=>$request->nama_kelompok,
                'nik'=>$request->nik,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'foto'=>$data->foto,
                'alamat'=>$request->alamat,
            ]);
            return redirect()->back();
        }else{
            if (file_exists(public_path() . '/foto/'.$data->foto)) {
                unlink(public_path() . '/foto/'.$data->foto);
            }
           
            $data->update([
                'nama_kelompok'=>$request->nama_kelompok,
                'nik'=>$request->nik,
                'tempat_lahir'=>$request->tempat_lahir,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'foto'=>$request->foto,
                'alamat'=>$request->alamat,
            ]);
            if($request->hasFile('foto')){
               
                $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
        }
        return redirect()->back();
        
        // if(isEmpty($request->foto)){
        //     $data->update([
        //         'nama'=>$request->nama,
        //         'nik'=>$request->nik,
        //         'tempat_lahir'=>$request->tempat_lahir,
        //         'tanggal_lahir'=>$request->tanggal_lahir,
        //         'foto'=>$data->foto,
        //         'alamat'=>$request->alamat,
        //     ]);
        //     return redirect()->back();
        // }
        // if($request->foto != null){
        //     if (file_exists(public_path() . '/foto/'.$data->foto)) {
        //         unlink(public_path() . '/foto/'.$data->foto);
        //     }
           
        //     $data->update([
        //         'nama'=>$request->nama,
        //         'nik'=>$request->nik,
        //         'tempat_lahir'=>$request->tempat_lahir,
        //         'tanggal_lahir'=>$request->tanggal_lahir,
        //         'foto'=>$request->foto,
        //         'alamat'=>$request->alamat,
        //     ]);
        //     if($request->hasFile('foto')){
               
        //         $request->file('foto')->move('foto/', $request->file('foto')->getClientOriginalName());
        //         $data->foto = $request->file('foto')->getClientOriginalName();
        //         $data->save();
        //     }
        // }
        // return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petani  $petani
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Petani::FindOrFail($id);
        if (file_exists(public_path() . '/foto/'.$data->foto)) {
            unlink(public_path() . '/foto/'.$data->foto);
            $data->delete();
            $data->user->delete();
        }
        $data->delete();
        $data->user->delete();
        return redirect()->back();
        
    }
}
