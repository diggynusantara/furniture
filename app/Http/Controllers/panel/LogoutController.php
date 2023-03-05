<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        session()->forget('user');
        return redirect()->route('panel.login')->with(['message' => 'Berhasil keluar', 'alert' => 'success']);
    }
}
