<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function index(Request $request){
        $top = DB::table('image')->where('page','Product Image Top')->first();
        // $produk = DB::table('produk')
        //             ->select('produk.*','kategori.kategori')
        //             ->leftJoin('kategori','produk.id_kategori','kategori.id')
        //             ->orderBy('produk.id','desc')
        //             ->get();
        // foreach ($produk as $key => $value) {
        //     $value->text_wa = 'Saya Memesan Barang%0a';
        //     $value->text_wa .= $value->produk.'%0a';
        // }
        $kategori = DB::table('kategori')->orderBy('kategori','ASC')->get();
        $text = DB::table('text')->where('id',1)->first();
        return view('frontend.product.index', compact('top','kategori','text'));
    }

    public function produkItem(Request $request, $idKategori){
        $top = DB::table('image')->where('page','Product Image Top')->first();
        $produkItem = DB::table('produk_item')
                    ->select('produk_item.*','produk.produk as parent_produk')
                    ->leftJoin('produk','produk_item.id_produk','produk.id')
                    ->orderBy('produk_item.id','desc')
                    ->get();
        foreach ($produkItem as $key => $value) {
            $value->text_wa = 'Saya Memesan Barang%0a';
            $value->text_wa .= $value->produk.'%0a';
        }
        $produk = DB::table('produk')->orderBy('produk','ASC')->get();
        $text = DB::table('text')->where('id',1)->first();
        return view('frontend.product.produk-item', compact('produkItem','top','produk','text'));
    }

    public function produkItemDetail($id_produk, $id_produk_item){
        $top = DB::table('image')->where('page','Product Image Top')->first();
        $text = DB::table('text')->where('id',1)->first();
        $produkItem = DB::table('produk_item')
            ->select('produk_item.*','produk.produk as parent_produk')
            ->leftJoin('produk','produk_item.id_produk','produk.id')
            ->where('produk_item.id','=',$id_produk_item)
            ->first();
        return view('frontend.product.produk-item-detail', compact('text','top','produkItem'));
    }
}
