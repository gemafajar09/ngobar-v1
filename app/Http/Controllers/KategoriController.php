<?php

namespace App\Http\Controllers;

use App\Http\Requests\KategoriRequest;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    private $Kategori;
    public function __construct()
    {
        $this->Kategori = new Kategori();
    }
    public function index()
    {
        $data = [
            'kategori' => $this->Kategori->TampilData(),
        ];
        return view('frontend.kategori.index', $data);
    }

    public function tambah()
    {
        return view('frontend.kategori.tambah');
    }

    public function simpan(KategoriRequest $request)
    {
        if ($request->validated()) {
            $data = [
                'nama_kategori' => $request->nama_kategori
            ];
            $this->Kategori->TambahData($data);
            return redirect('/kategori');
        }
    }

    public function edit($id)
    {
        $kategori = $this->Kategori->getKategoriById($id);
        $data = [
            'kategori' => $kategori,
        ];
        return view('frontend.kategori.edit', $data);
    }

    public function update(KategoriRequest $request, $id)
    {
        if ($request->validated()) {
            $data = [
                'nama_kategori' => $request->nama_kategori
            ];
            $update = $this->Kategori->updateKategori($id, $data);
            if(!$update){
                return redirect()->route("edit-kategori",$id);
            }
            return redirect()->route('kategori');
        }
    }

    public function delete($id) 
    {
        $delete = $this->Kategori->deleteKategori($id);
        return redirect()->route("kategori");
    }

}
