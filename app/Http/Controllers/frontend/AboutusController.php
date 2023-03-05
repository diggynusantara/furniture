<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class AboutusController extends Controller
{
    public function index(Request $request){
        $tim = DB::table('tim')->get();
        $service = DB::table('service')->get();
        $top = DB::table('image')->where('page','About Us Image Top')->first();
        $bottom = DB::table('image')->where('page','Home Image Bottom')->first();
        $bottom_about = DB::table('image')->where('page','About Us Image Bottom')->first();
        $text = DB::table('text')->where('id',1)->first();
        return view('frontend.aboutus.index', compact('tim','top','bottom','service','text','bottom_about'));
    }
}
