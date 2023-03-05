<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Produk;
use App\model\Kategori;

class ProdukController extends Controller
{
    public function __construct(){
        $this->kategori = new Kategori();
        $this->produk = new Produk();
    }

    public function index(Request $request){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $produk = $this->produk->pagination($keyword);
        $produk->appends($request->only('keyword'));
        $kategori = $this->kategori->getAll();
        return view('panel.admin.produk.index',compact('produk','kategori'));
    }

    public function add(Request $request){
        $this->produk->simpan([
            'id_kategori'       => $request->kategori,
            'produk'            => $request->produk
        ]);
        return redirect()->route('panel.admin.produk.index')->with(['message' => 'Produk Berhasil Ditambah', 'alert' => 'success']);
    }

    public function edit(Request $request){
        $this->produk->ubah($request->id, [
            'id_kategori'       => $request->kategori,
            'produk'            => $request->produk
        ]);
        return redirect()->route('panel.admin.produk.index')->with(['message' => 'Produk Berhasil Diedit', 'alert' => 'success']);
    }

    public function get_by_id(Request $request){
        $produk = $this->produk->getById($request->id);
        return json_encode($produk);
    }

    public function hapus($id){
        $this->produk->hapus($id);
        return redirect()->route('panel.admin.produk.index')->with(['message' => 'Produk Berhasil Dihapus', 'alert' => 'success']);
    }
}
