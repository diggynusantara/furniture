<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;

class User extends Model
{
    protected $table = "user";

    public function getByUsername($username){
        return DB::table($this->table)->where('username','=',$username)->first();
    }

    public function ubah($id, $data){
        return DB::table($this->table)->where('id','=',$id)->update($data);
    }

    public function hapus($id){
        return DB::table($this->table)->where('id','=',$id)->delete();
    }

    public function simpan($data){
        return DB::table($this->table)->insert($data);
    }
}
