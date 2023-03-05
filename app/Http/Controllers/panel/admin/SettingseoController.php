<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Text;

class SettingseoController extends Controller
{
    public function __construct(){
        $this->text = new Text();
    }

    public function index(){
        $text = $this->text->getById(1);
        // dd(json_decode($text->home));
        if($text->home){
            $text->home_author = json_decode($text->home)->author;
            $text->home_keyword = json_decode($text->home)->keyword;
            $text->home_description = json_decode($text->home)->description;
        }

        if($text->product){
            $text->product_author = json_decode($text->product)->author;
            $text->product_keyword = json_decode($text->product)->keyword;
            $text->product_description = json_decode($text->product)->description;
        }

        if($text->about){
            $text->about_author = json_decode($text->about)->author;
            $text->about_keyword = json_decode($text->about)->keyword;
            $text->about_description = json_decode($text->about)->description;
        }

        if($text->contact){
            $text->contact_author = json_decode($text->contact)->author;
            $text->contact_keyword = json_decode($text->contact)->keyword;
            $text->contact_description = json_decode($text->contact)->description;
        }
        return view('panel.admin.settingseo.index',compact('text'));
    }

    public function edit(Request $request){
        $data = (Object)[
            'author'        => $request->author,
            'keyword'       => $request->keyword,
            'description'   => $request->description,
        ];
        $this->text->ubah($request->id, [
            $request->page => json_encode($data)
        ]);
        return redirect()->route('panel.admin.settingseo.index')->with(['message' => 'Setting Seo Berhasil Diedit', 'alert' => 'success']);
    }
}
