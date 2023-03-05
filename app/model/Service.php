<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;

class Service extends Model
{
    protected $table = "service";

    public function pagination($keyword){
        return Service::when($keyword, function ($query) use ($keyword) {
            $query->where('judul', 'like', "%{$keyword}%");
        })->paginate(10);
    }

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
