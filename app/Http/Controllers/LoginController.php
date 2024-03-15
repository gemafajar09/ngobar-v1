<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use stdClass;

class LoginController extends Controller
{
    public function index(){
        $data['cache'] = Cache::get('remember');
        return view('frontend.auth.login',$data);
    }

    public function regis(){
        return view('frontend.auth.register');
    } 

    // function LoginRequest berfugsi untuk menangkap nilai name dari inputan form yang sudah di validasi
    public function login(LoginRequest $r){
        if($r->validated()){
            // hapus cache sebelumnya
            Cache::forget("remember");
            
            // buat data object
            $cache = new stdClass();
            if($r->has("remember")){
                $cache->email = $r->email;
                $cache->password = $r->password;
                $cache->remember = true;
            }
            // buat data cache dengan durasi selama 4 jam
            Cache::add('remember', $cache ,now()->addHours(4));

            try {
                if (Auth::guard('web')->attempt(['email' => $r->email, 'password' => $r->password])) {
                    return redirect('home')->with("pesan","Berhasil Login");
                }  
            } catch (\Throwable $th) {
                throw $th;
                // jika login gagal maka kembali ke halaman login dengan mengirim pesan
                // return back()->with("pesan","Pastikan email dan password benar");
            }
            
        }
        return back()->with("pesan","Pastikan email dan password benar");
    }

    public function register(RegisterRequest $r){
        if($r->validated()){
            $regis = User::create([
                'name' => $r->name,
                'email' => $r->email,
                'password' => Hash::make($r->password)
            ]);

            if($regis){
                return redirect('/');
            }else{
                return back();
            }
        }
    }
}
