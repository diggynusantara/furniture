<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Tim;

class TimController extends Controller
{
    public function __construct(){
        $this->tim = new Tim();
    }

    public function index(Request $request){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $tim = $this->tim->pagination($keyword);
        $tim->appends($request->only('keyword'));
        return view('panel.admin.tim.index',compact('tim'));
    }

    public function add(Request $request){
        date_default_timezone_set("Asia/Bangkok");
 		$file = $request->file('gambar');
        $tujuan_upload = 'public/tim/';
        $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
        $file->move($tujuan_upload,$filename);
        $this->tim->simpan([
            'nama'       => $request->nama,
            'posisi'     => $request->posisi,
            'deskripsi'  => $request->deskripsi,
            'gambar'     => $filename,
            'facebook'   => $request->facebook,
            'whatsapp'   => $request->whatsapp,
            'instagram'  => $request->instagram

        ]);
        return redirect()->route('panel.admin.tim.index')->with(['message' => 'Tim Berhasil Ditambah', 'alert' => 'success']);
    }

    public function edit(Request $request){
        $tim = $this->tim->getById($request->id);
        $filename = $tim->gambar;
        if($request->gambar){
            date_default_timezone_set("Asia/Bangkok");
            $file = $request->file('gambar');
            $tujuan_upload = 'public/tim/';
            $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move($tujuan_upload,$filename);
            unlink('public/tim/'.$tim->gambar);
        }
        $this->tim->ubah($request->id, [
            'nama'       => $request->nama,
            'posisi'     => $request->posisi,
            'deskripsi'  => $request->deskripsi,
            'gambar'     => $filename,
            'facebook'   => $request->facebook,
            'whatsapp'   => $request->whatsapp,
            'instagram'  => $request->instagram
        ]);
        return redirect()->route('panel.admin.tim.index')->with(['message' => 'Tim Berhasil Diedit', 'alert' => 'success']);
    }

    public function get_by_id(Request $request){
        $tim = $this->tim->getById($request->id);
        return json_encode($tim);
    }

    public function hapus($id){
        $tim = $this->tim->getById($id);
        unlink('public/tim/'.$tim->gambar);
        $this->tim->hapus($id);
        return redirect()->route('panel.admin.tim.index')->with(['message' => 'Tim Berhasil Dihapus', 'alert' => 'success']);
    }
}
