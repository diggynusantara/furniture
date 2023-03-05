<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\ProdukItem;
use App\model\Produk;

class ProdukItemController extends Controller
{
    public function __construct(){
        $this->produk = new Produk();
        $this->produkItem = new ProdukItem();
    }

    public function index(Request $request){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $produkItem = $this->produkItem->pagination($keyword);
        $produkItem->appends($request->only('keyword'));
        $produk = $this->produk->getAll();
        return view('panel.admin.produk-item.index',compact('produkItem','produk'));
    }

    public function add(Request $request){
        date_default_timezone_set("Asia/Bangkok");
 		$file = $request->file('gambar');
        $tujuan_upload = 'public/produk-item/';
        $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
        $file->move($tujuan_upload,$filename);
        $this->produkItem->simpan([
            'id_produk'         => $request->produk,
            'produk'            => $request->produkItem,
            'deskripsi'         => $request->deskripsi,
            'harga'             => $request->harga,
            'gambar'            => $filename
        ]);
        return redirect()->route('panel.admin.produk-item.index')->with(['message' => 'Produk Berhasil Ditambah', 'alert' => 'success']);
    }

    public function edit(Request $request){
        $produkItem = $this->produkItem->getById($request->id);
        $filename = $produkItem->gambar;
        if($request->gambar){
            date_default_timezone_set("Asia/Bangkok");
            $file = $request->file('gambar');
            $tujuan_upload = 'public/produk-item/';
            $filename = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move($tujuan_upload,$filename);
        }
        $this->produkItem->ubah($request->id, [
            'id_produk'         => $request->produk,
            'produk'            => $request->produkItem,
            'deskripsi'         => $request->deskripsi,
            'harga'             => $request->harga,
            'gambar'            => $filename
        ]);
        return redirect()->route('panel.admin.produk-item.index')->with(['message' => 'Produk Berhasil Diedit', 'alert' => 'success']);
    }

    public function get_by_id(Request $request){
        $produk = $this->produkItem->getById($request->id);
        return json_encode($produk);
    }

    public function hapus($id){
        $this->produkItem->hapus($id);
        return redirect()->route('panel.admin.produk-item.index')->with(['message' => 'Produk Berhasil Dihapus', 'alert' => 'success']);
    }
}
