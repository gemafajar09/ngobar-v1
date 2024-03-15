@extends('frontend.auth.template')

@section('title')
Register
@endsection

@section('content')

<div class="text-center content-center font-bold text-xl">Register</div>
    <hr class="mt-5">
    @if(session('pesan') ?? false)
    <div class="text-center p-2 bg-red-300 text-white rounded-md">{{ session('pesan') }}</div>
    @endif
    <form action="{{route('register-add')}}" method="post">
        @csrf
        <div class="mt-3 p-3 flex flex-col">
            <label for="">
                Name
                @if( $errors->has('name') )
                <span class="text-red-400">{{ $errors->first('name') }}</span>
                @endif
            </label>
            <input type="text" name="name" value="{{ old('name') }}"
                @class([ 
                    'rounded-md', 
                    'border', 
                    'p-2', 
                    'mt-2', 
                    'border-gray-500',
                    'border-red-500'=> $errors->has('name') ?? false,
            ])/>
            <label for="">
                Email
                @if( $errors->has('email') )
                <span class="text-red-400">{{ $errors->first('email') }}</span>
                @endif
            </label>
            <input type="email" name="email" value="{{ old('email') }}"
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

        <div class="flex justify-end p-3">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-400 text-white p-2 w-24 rounded-md">Register</button>
        </div>

    </form>
    <div class="p-3 flex justify-between">
        <div>
            <span>
                Sudah Punya Akun?
            </span>
            <a class="font-bold hover:text-blue-500" href="#">Login</a>
        </div>
    </div>

@endsection
