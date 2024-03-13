<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use stdClass;

class LoginController extends Controller
{
    public function index(){
        $data['cache'] = Cache::get('remember');
        return view('frontend.auth.login',$data);
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
            if (Auth::guard('web')->attempt(['email' => $r->email, 'password' => $r->password])) {
                return redirect('home')->with("pesan","Berhasil Login");
            }  
        }
        // jika login gagal maka kembali ke halaman login dengan mengirim pesan
        return back()->with("pesan","Pastikan email dan password benar");
    }
}
