@extends('frontend.layout.template')
@section('title', 'Tambah Kategori')
@section('content')
    <div class="flex justify-center my-8">
        <div class="max-w-xl w-full border border-grey-300 rounded-lg shadow p-4">
            <h1 class="text-slate-800 text-xl text-center font-semibold">Halaman Tambah Kategori</h1>
            <form action="{{ route('simpan-kategori') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="my-4">
                    <label for="" class=" block text-sm font-semibold text-slate-700"> Nama Kategori</label>
                    <input type="text"
                        class="block w-full p-2 border border-grey-400 text-xs rounded-lg my-2 @error('nama_kategori') border-red-500 @enderror"
                        placeholder="Masukkan Nama Kategori" name="nama_kategori" value="{{ old('nama_kategori') }}">
                    <div class="text-xs text-red-500">
                        @error('nama_kategori')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <a href="/kategori" class="bg-red-500 hover:bg-red-700 text-white text-xs py-2 px-4 rounded">Kembali</a>
                <button class="bg-blue-500 hover:bg-blue-700 text-white text-xs py-2 px-4 rounded">Simpan</button>
            </form>
        </div>
    </div>
@endsection
