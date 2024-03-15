@extends('frontend.auth.template')

@section('title')
LOGIN
@endsection

@section('content')

    <div class="text-center content-center font-bold text-xl">Login</div>
    <hr class="mt-5">
    @if(session('pesan') ?? false)
    <div class="text-center p-2 bg-red-300 text-white rounded-md">{{ session('pesan') }}</div>
    @endif
    <form action="{{route('login')}}" method="post">
        @csrf
        <div class="mt-3 p-3 flex flex-col">
            <label for="">
                Email
                @if( $errors->has('email') )
                <span class="text-red-400">{{ $errors->first('email') }}</span>
                @endif
            </label>
            <input type="email" name="email" value="{{ $cache->email ?? old('email') }}"
                @class([ 
                    'rounded-md', 
                    'border', 
                    'p-2', 
                    'mt-2', 
                    'border-gray-500',
                    'border-red-500'=> $errors->has('email') ?? false,
            ])/>


            <label for="">
                Password
                @if($errors->has('password'))
                <span class="text-red-400">{{$errors->first('password')}}</span>
                @endif
            </label>
            <input type="password" name="password" value="{{ $cache->password ?? old('password') }}"
                @class([ 
                    'rounded-md', 
                    'border', 
                    'p-2', 
                    'mt-2', 
                    'border-gray-500',
                    'border-red-500'=> $errors->has('password') ?? false,
            
            ])/>

        </div>

        <div class="flex justify-between p-3">
            <div class="flex items-center gap-2">
                <input type="checkbox" name="remember" value="1" @checked(old('remember', $cache->remember ??
                false)) > Remember Me
            </div>
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-400 text-white p-2 w-24 rounded-md">Login</button>
        </div>

    </form>
    <div class="p-3 flex justify-between">
        <div>
            <span>
                Belum Punya Akun?
            </span>
            <a class="font-bold hover:text-blue-500" href="{{route('register')}}">Daftar</a>
        </div>
        <a href="#" class="t-3 hover:text-blue-400 flex justify-center">
            Lupa Password?
        </a>
    </div>

@endsection