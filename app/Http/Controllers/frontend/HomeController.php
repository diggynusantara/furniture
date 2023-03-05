<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index(Request $request){
        $produk = DB::table('produk_item')
            ->select('produk_item.*','produk.produk as parent_produk')
            ->leftJoin('produk','produk_item.id_produk','produk.id')
            ->limit(6)->get();
        foreach ($produk as $key => $value) {
            $value->text_wa = 'Saya Memesan Barang%0a';
            $value->text_wa .= $value->produk.'%0a';
        }
        $text = DB::table('text')->where('id',1)->first();
        $slider = DB::table('image')->where('page','Home Slider')->where('status','Aktif')->orderBy('posisi','asc')->get();
        $bottom = DB::table('image')->where('page','Home Image Bottom')->first();
        return view('frontend.home.index', compact('produk','slider','bottom','text'));
    }
}
