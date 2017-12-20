<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;

class LoginController extends Controller
{
    public function master()
    {
        return view('admin.master');
    }

    public function username()
    {
        $user = Auth::user();

        return 'username';
    }

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function getLoginAdmin()
    {
        if (!Auth::check()) {
            return view('admin.login');
        } else {
            return redirect('admin/master');
        }
    }

    public function postLoginAdmin(LoginRequest $request){
        $login = [
            'username' => $request->username,
            'password' => $request->password,
            'role' => config('setting.role.admin'),
        ];

        if (Auth::attempt($login)) {
            return redirect()->intended('admin/master')->with(['flash'=>'success','messages' => trans('admin/login.wellcome')]);
        }else {
            return redirect()->back()->with(['flash'=>'danger','messages' => trans('admin/login.messages')]);
        }
    }

    public function getLogoutAdmin()
    {
        Auth::logout();

        return redirect('admin/login');
    }
}
