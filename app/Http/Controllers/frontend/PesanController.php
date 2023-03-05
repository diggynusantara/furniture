<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\model\Produk;
use DB;

class PesanController extends Controller
{
    public function __construct(){
        $this->produk = new Produk();
    }

    public function pesan($id){
        $text = $this->produk->pesan($id);
        $t = DB::table('text')->where('id',1)->first();
        return Redirect::to("https://wa.me/".$t->wa."?text=".urlencode($text));
    }
}
