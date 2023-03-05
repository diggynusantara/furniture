<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Text extends Model
{
    protected $table = "text";

    public function getAll(){
        return DB::table($this->table)->get();
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
