<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Tampilan;

class TampilanhomeController extends Controller
{
    public function __construct(){
        $this->tampilan = new Tampilan();
    }

    public function index(){
        $slider = $this->tampilan->getAll();
        return view('panel.admin.tampilan.home.index',compact('slider'));
    }

    public function add(Request $request){
        date_default_timezone_set("Asia/Bangkok");
        $filename = '';
 		if($request->file('gambar')){
            $file = $request->file('gambar');
            $tujuan_upload = 'public/tampilan/';
            $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move($tujuan_upload,$filename);
         }
        $this->tampilan->simpan([
            'posisi'            => $request->posisi,
            'page'              => $request->page,
            'status'            => $request->status,
            'gambar'            => $filename
        ]);
        return redirect()->route('panel.admin.tampilan.home.index')->with(['message' => 'Berhasil', 'alert' => 'success']);
    }

    public function get_by_id(Request $request){
        $tampilan = $this->tampilan->getById($request->id);
        return json_encode($tampilan);
    }

    public function edit(Request $request){
        $tampilan = $this->tampilan->getById($request->id);
        $filename = $tampilan->gambar;
        if($request->gambar){
            date_default_timezone_set("Asia/Bangkok");
            $file = $request->file('gambar');
            $tujuan_upload = 'public/tampilan/';
            $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move($tujuan_upload,$filename);
            // unlink('public/tampilan/'.$tampilan->gambar);
        }
        $this->tampilan->ubah($request->id, [
            'status'            => $request->status,
            'posisi'            => $request->posisi,
            'gambar'            => $filename,
            'page'              => $request->page,
        ]);
        return redirect()->route('panel.admin.tampilan.home.index')->with(['message' => 'Berhasil', 'alert' => 'success']);
    }

    public function hapus($id){
        $tampilan = $this->tampilan->getById($id);
        unlink('public/tampilan/'.$tampilan->gambar);
        $this->tampilan->hapus($id);
        return redirect()->route('panel.admin.tampilan.home.index')->with(['message' => 'Slider Berhasil Dihapus', 'alert' => 'success']);
    }
}
