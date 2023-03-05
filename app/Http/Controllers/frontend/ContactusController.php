<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;

class ContactusController extends Controller
{
    public function index(Request $request){
        $text = DB::table('text')->where('id',1)->first();
        $top = DB::table('image')->where('page','Contact Us Image Top')->first();
        return view('frontend.contactus.index', compact('top','text'));
    }

    public function pesan(Request $request){
        $text = DB::table('text')->where('id',1)->first();
        $text = DB::table('text')->where('id',1)->first();
        $pesan = $text->pesan_kontak;
        $explode = explode('[nama_lengkap]',$pesan);
        $pesan = $explode[0].$request->name.$explode[1];
        $explode = explode('[email]',$pesan);
        $pesan = $explode[0].$request->email.$explode[1];
        $explode = explode('[pesan]',$pesan);
        $pesan = $explode[0].$request->message.$explode[1];
        return Redirect::away("https://wa.me/".$text->wa."?text=".urlencode($pesan));

    }
}
