<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Text;

class SettingController extends Controller
{
    public function __construct(){
        $this->text = new Text();
    }

    public function index(){
        $text = $this->text->getById(1);
        return view('panel.admin.setting.index',compact('text'));
    }

    public function edit(Request $request){
        $this->text->ubah($request->id, [
            'tentang'       => $request->tentang,
            'tempat'        => $request->tempat,
            'fb'            => $request->fb,
            'wa'            => $request->wa,
            'ig'            => $request->ig,
            'toko'          => $request->toko,
        ]);
        return redirect()->route('panel.admin.setting.index')->with(['message' => 'Setting Berhasil Diedit', 'alert' => 'success']);
    }
}
