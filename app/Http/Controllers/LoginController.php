<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
     

    // hàm sử lý việc login
    public function postlogin(){
        dd($request->all());

    }
}
