<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use DB;

class ProdukItem extends Model
{
    protected $table = "produk_item";

    public function pagination($keyword){
        return ProdukItem::when($keyword, function ($query) use ($keyword) {
            $query->where('produk.produk', 'like', "%{$keyword}%");
            $query->where('produk_item.produk', 'like', "%{$keyword}%");
        })->select('produk_item.*','produk.produk as parent_produk')
        ->leftJoin('produk','produk_item.id_produk','produk.id')
        ->paginate(10);
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

    public function pesan($id){
        $produk = DB::table('produk')->where('id',$id)->first();
        $text = DB::table('text')->where('id',1)->first();
        $text = $text->pesan;
        $explode = explode('[barang]',$text);
        $text = $explode[0].$produk->produk.$explode[1];
        $explode = explode('[deskripsi]',$text);
        $text = $explode[0].$produk->deskripsi.$explode[1];
        $explode = explode('[harga]',$text);
        $text = $explode[0]."Rp " . number_format($produk->harga,2,',','.').$explode[1];
        return $text;
    }
}
