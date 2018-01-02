<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\User\LoginRequest;

class LoginController extends Controller
{
    public function master()
    {
        return view('admin.master');
    }

    public function getLogin()
    {
        return view('client.page.login');
    }

    public function postLogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($login)) {
            return view('client.page.index');
        } else {
            return redirect()->back()->with(['flash' => 'danger', 'messages' => trans('client/master.login_errors')]);
        }

    }

    public function getLogout()
    {
        Auth::logout();

        return redirect('/');
    }
}
