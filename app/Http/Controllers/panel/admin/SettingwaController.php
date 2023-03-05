<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Text;

class SettingwaController extends Controller
{
    public function __construct(){
        $this->text = new Text();
    }

    public function index(){
        $text = $this->text->getById(1);
        return view('panel.admin.settingwa.index',compact('text'));
    }

    public function edit(Request $request){
        $this->text->ubah($request->id, [
            'pesan'         => $request->pesan,
            'pesan_kontak'  => $request->pesan_kontak,
        ]);
        return redirect()->route('panel.admin.settingwa.index')->with(['message' => 'Setting Whatsapp Berhasil Diedit', 'alert' => 'success']);
    }
}
