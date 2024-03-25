@extends('frontend.layout.template')
@section('title', 'Data Kategori')
@section('content')
    <div class="flex justify-center mt-4">
        <div class="max-w-screen-lg w-full">
            <div class="flex justify-end mb-2">
                <a href="{{route('tambah-kategori')}}"
                    class="bg-blue-500 hover:bg-blue-700 text-white text-xs py-2 px-4 rounded"><i class="fa fa-plus"></i>
                    Tambah Data</a>
            </div>
            <table class="table-auto border border-gray-400 mx-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border border-gray-400 bg-gray-100">No</th>
                        <th class="px-4 py-2 border border-gray-400 bg-gray-100">Nama Kategori</th>
                        <th class="px-4 py-2 border border-gray-400 bg-gray-100">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kategori as $no => $data)
                        <tr>
                            <td class="px-4 py-2 border border-gray-400">{{ $no + 1 }}</td>
                            <td class="px-4 py-2 border border-gray-400">{{ $data->nama_kategori }}</td>
                            <td class="px-4 py-2 border border-gray-400">
                                <a href="{{ route('edit-kategori', $data->id) }}"
                                    class="py-1 px-2 bg-green-500 hover:bg-green-700 text-xs text-white rounded"><i
                                        class="fa fa-edit"></i></a>
                                <a href="{{ route('delete-kategori', $data->id)}}"
                                    class="py-1 px-2 bg-red-500 hover:bg-red-700 text-xs text-white rounded"><i
                                        class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
