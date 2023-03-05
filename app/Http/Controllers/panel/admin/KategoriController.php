<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Kategori;

class KategoriController extends Controller
{
    public function __construct(){
        $this->kategori = new Kategori();
    }

    public function index(Request $request){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $kategori = $this->kategori->pagination($keyword);
        $kategori->appends($request->only('keyword'));
        return view('panel.admin.kategori.index',compact('kategori'));
    }

    public function add(Request $request){
        date_default_timezone_set("Asia/Bangkok");
 		$file = $request->file('gambar');
        $tujuan_upload = 'public/kategori/';
        $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
        $file->move($tujuan_upload,$filename);
        $this->kategori->simpan([
            'kategori'      => $request->kategori,
            'deskripsi'         => $request->deskripsi,
            'gambar'            => $filename
        ]);
        return redirect()->route('panel.admin.kategori.index')->with(['message' => 'Kategori Berhasil Ditambah', 'alert' => 'success']);
    }

    public function edit(Request $request){
        $kategori = $this->kategori->getById($request->id);
        $filename = $kategori->gambar;
        if($request->gambar){
            date_default_timezone_set("Asia/Bangkok");
            $file = $request->file('gambar');
            $tujuan_upload = 'public/kategori/';
            $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move($tujuan_upload,$filename);
        }
        $this->kategori->ubah($request->id, [
            'kategori'    => $request->kategori,
            'deskripsi'         => $request->deskripsi,
            'gambar'            => $filename,
        ]);
        return redirect()->route('panel.admin.kategori.index')->with(['message' => 'Kategori Berhasil Diedit', 'alert' => 'success']);
    }

    public function get_by_id(Request $request){
        $kategori = $this->kategori->getById($request->id);
        return json_encode($kategori);
    }

    public function hapus($id){
        $this->kategori->hapus($id);
        return redirect()->route('panel.admin.kategori.index')->with(['message' => 'Kategori Berhasil Dihapus', 'alert' => 'success']);
    }
}
