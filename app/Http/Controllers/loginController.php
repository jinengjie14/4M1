<?php
/**
 * Created by PhpStorm.
 * User: leeeeee
 * Date: 2017/10/11
 * Time: 10:35
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class loginController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function auth(Request $request)
    {
        if(Auth::attempt(['name' => $request->get('username'), 'password' => $request->get('userpwd')])){
            session(['isAdmin' => 'true']);
            session(['name' => $request->get('username')]);
            return redirect('/admin/score');
        }
        return redirect('/admin/login')->with('status', '管理员密码有误');
    }
}