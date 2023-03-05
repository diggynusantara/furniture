<?php

namespace App\Http\Controllers\panel\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\Service;

class ServiceController extends Controller
{
    public function __construct(){
        $this->service = new Service();
    }

    public function index(Request $request){
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $service = $this->service->pagination($keyword);
        $service->appends($request->only('keyword'));
        return view('panel.admin.service.index',compact('service'));
    }

    public function add(Request $request){
        date_default_timezone_set("Asia/Bangkok");
        $this->service->simpan([
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi

        ]);
        return redirect()->route('panel.admin.service.index')->with(['message' => 'Service Berhasil Ditambah', 'alert' => 'success']);
    }

    public function edit(Request $request){
        $this->service->ubah($request->id, [
            'judul'      => $request->judul,
            'deskripsi'  => $request->deskripsi
        ]);
        return redirect()->route('panel.admin.service.index')->with(['message' => 'Service Berhasil Diedit', 'alert' => 'success']);
    }

    public function get_by_id(Request $request){
        $service = $this->service->getById($request->id);
        return json_encode($service);
    }

    public function hapus($id){
        $service = $this->service->getById($id);
        $this->service->hapus($id);
        return redirect()->route('panel.admin.service.index')->with(['message' => 'Service Berhasil Dihapus', 'alert' => 'success']);
    }
}
