<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Kategori extends Model
{
    public function TampilData()
    {
        return DB::table('kategoris')->get();
    }

    public function TambahData($data)
    {
        DB::table('kategoris')->insert($data);
    }

    public function getKategoriById($id)
    {
        $kategori = DB::table('kategoris')->where('id','=',$id)->first();
        return $kategori;
    }

    public function updateKategori($id, $data)
    {
        $update = DB::table('kategoris')->where('id','=',$id)->update($data);
        return $update;
    }

    public function deleteKategori($id)
    {
        $delete = DB::table('kategoris')->where('id','=',$id)->delete();
        return $delete;
    }
}
