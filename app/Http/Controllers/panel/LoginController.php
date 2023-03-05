<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\User;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function __construct(){
        $this->user = new User();
    }

    public function index(){
        return view('auth.login');
    }

    public function loginProses(Request $request){
        $user = $this->user->getByUsername($request->username);
        if($user){
            // var_dump($request->password);
            // dd($user);
            if($user->password == $request->password){
                session(['user' => json_encode($user)]);
                return redirect()->route('panel.admin.home.index');
            } else {
                return Redirect::back()->with(['message' => 'Kata sandi salah', 'alert' => 'danger']);
            }
        } else {
            return Redirect::back()->with(['message' => 'Kode akses tidak tersedia', 'alert' => 'danger']);
        }
    }
}
