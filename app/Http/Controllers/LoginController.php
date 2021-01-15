<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;


class LoginController extends Controller
{
    // Ham hien thi view nhap thong tin login
    public function index()
    {
        // Lay thong tin user dang dang nhap
         //dd($user = Auth::user());

        if (Auth::check()) {
            return redirect()->route('categories.index');
        }

        return view('login');
    }

    // Ham xu ly viec login
    public function postLogin(Request $request)
    {
        // use Auth;
        $data = $request->only('email', 'password');
        // Kiem tra login su dung Auth
        if (Auth::attempt($data)) {
            return redirect()->route('categories.index');
        }

        return redirect()->route('get-login');
        // redirect()->back();
    }

    
    public function logout()
    {
        Auth::logout();

        return redirect()->route('get-login');
    } 

    public function register(){
        return view('register');
    }

    public function registerStore(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required|email|unique:user',
            'password'=> 'required',
            'confirm_password'=> 'required|same:password',
            'address'=> 'required',

        ],[
            'name.required'=> '*không được để trống name product *',
            'password.required'=> '*không được để trống password *',
            'address.required'=> '*không được để trống địa chỉ *',
            'confirm_password.required'=> '*không được để trống confirm_password *',
            'email.required'=> '*không được để trống  giá email *',
            'email.email'=> '* email không đúng định dạng *',
            'confirm_password.same'=> '*mật khẩu không giống nhau *',
        ]);
    }
}