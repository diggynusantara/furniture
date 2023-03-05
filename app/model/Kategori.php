<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Kategori extends Model
{
    protected $table = "kategori";

    public function pagination($keyword){
        return Kategori::when($keyword, function ($query) use ($keyword) {
            $query->where('kategori', 'like', "%{$keyword}%");
        })->paginate(10);
    }

    public function getAll(){
        return DB::table($this->table)
                ->orderBy('kategori','ASC')
                ->get();
    }

    public function ubah($id, $data){
        return DB::table($this->table)->where('id','=',$id)->update($data);
    }

    public function getById($id){
        return DB::table($this->table)->where('id','=',$id)->first();
    }

    public function hapus($id){
        return DB::table($this->table)->where('id','=',$id)->delete();
    }

    public function simpan($data){
        return DB::table($this->table)->insert($data);
    }
}
