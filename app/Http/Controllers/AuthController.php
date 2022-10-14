<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Pegawai, User};
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function registerproses(Request $request)
    {

        $request->validate([
            'nama'=>['required','max:100'],
            'nik'=>['required', 'unique:pegawais'],
            'tempat_lahir'=>['required'],
            'tanggal_lahir'=>['required'],
            'alamat'=>['required'],
            'foto'=>['required'],
            'email'=>['required', 'email'],
            'password'=>['required'],
            'current_password'=>['required'],
        ]);

        if($request->current_password != $request->password){
            return redirect()->back()->with('message', 'perhatikan password anda');
        }else{
            $user = new User;
            $user->name = $request->nama;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->role = 'pegawai';
            $user->remember_token = Str::random(60);
            $user->save();
            
            $request->request->add(['user_id'=>$user->id]);
            $data = Pegawai::create($request->all());
            if($request->hasfile('foto')){
                $request->file('foto')->move('pegawai/',$request->file('foto')->getClientOriginalName());
                $data->foto = $request->file('foto')->getClientOriginalName();
                $data->save();
            }
            return redirect()->route('login');

        }
    }

    public function login()
    {
        return view('auth.login');
    }

    public function loginproses(Request $request)
    {
        $request->validate([
            'email'=>['required', 'email'],
            'password'=>['required'],
            'current_password'=>['required'],
        ]);

        if($request->password != $request->current_password){
            return redirect()->back()->with('message', 'Periksa Password Anda');
        }
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard');
        }else{
            return redirect()->back()->with('message', 'Periksa Email Password'); 
        }
        dd($request);
    }

    public function logout()
    {
        auth::logout();
        return redirect()->route('login');
    }
}
