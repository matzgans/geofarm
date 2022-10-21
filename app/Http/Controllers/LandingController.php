<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Detail_lahan, Lahan, Petani, Pegawai};

class LandingController extends Controller
{
    public function index()
    {
        $data = Lahan::get();
        $petani = Petani::all();
        $pegawai = Pegawai::all();
        $detail_lahan = Detail_lahan::all();
        return view('landing.index', compact('data', 'petani', 'detail_lahan', 'pegawai'));
    }
    
    public function dashboard(Request $request)
    {
        $data = Lahan::get();
        // if($request->petani){
        //     // $petani = $request->petani;
        //     $lahan2 = Lahan::where('petani_id',auth()->user()->petani->id)
        // }

        if(auth()->user()->role != 'pegawai'){
            $petanis = auth()->user()->petani->lahans;
            $lahans = Lahan::where('petani_id', auth()->user()->petani->id)->get();
            $active = 'dashboard';
            $lahan = Lahan::where('petani_id','=',auth()->user()->petani->id)->first();
            // return dd($lahan);
            $sawah = Detail_lahan::join('lahans','lahans.id','=','detail_lahans.lahan_id')
            ->select('detail_lahans.*','lahans.id')
            ->where('lahans.petani_id',auth()->user()->petani->id)
            ->where('nama','sawah')
            ->count();
            $jum_tanam = Detail_lahan::join('lahans','lahans.id','=','detail_lahans.lahan_id')
            ->select('detail_lahans.*','lahans.id')
            ->where('lahans.petani_id',auth()->user()->petani->id)
            ->count();
            // $sawah = Detail_lahan::where('lahan_id',$lahan->id)->get();
 
            $lahan1 = Lahan::where('petani_id','=',auth()->user()->petani->id)->get()->count();
            if($lahan1 != null){
                
                $countSawah = $sawah;
                $countTanam = $jum_tanam;
                return view('dashboard', compact('petanis','active','countSawah', 'countTanam', 'lahan1'));
            }
            $lahan1 = 0;
            $countLahan = 0;
            $countSawah = 0;
            $countSawah = 0;
            $countTanam = 0;
            return view('dashboard', compact('petanis','active','countLahan','countSawah', 'countTanam', 'lahan1'));
        }
        $countPetani = Petani::count();
        $countLahan = Lahan::count();
        $countSawah = Detail_lahan::where('nama', 'sawah')->count();
        $countJagung = Detail_lahan::where('nama', 'jagung')->count();
        $countTanam = Detail_lahan::count();
        $active = 'dashboard';
        return view('dashboard', compact('data', 'countPetani', 'countLahan', 'active', 'countSawah', 'countTanam', 'countJagung'));
    }
}
