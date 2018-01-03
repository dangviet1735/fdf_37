<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Http\Requests\User\RegisterRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('client.page.register');
    }

    public function store(RegisterRequest $request)
    {
        try {
        $input = $request->only([
            'username',
            'email',
            'password',
            'address',
            'phone',
        ]);
        $user = User::create($input);
        \Auth::login($user);

        return redirect('/')->with(['flash' => 'success', 'messages' => trans('client/master.register_completed')]);
      } catch (Exception $ex) {
            return redirect()->back()->with(['flash' => 'danger', 'messages' => trans('client/master.register_faild')]);
      }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $user = User::findOrFail($id);

            return view('client.page.profile', compact('user'));
        } catch (ModelException $ex) {
             return view('common.404');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RegisterRequest $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $input = $request->only([
                'username',
                'email',
                'address',
                'phone',
            ]);
            $user->update($input);

            return redirect('register/.$user->id./edit')->with(['flash' => 'success', 'messages' => trans('client/master.register_update_completed')]);
          } catch(ModelException $ex) {
                return redirect()->back()->with(['flash' => 'danger', 'messages' => trans('client/master.register_update_faild')]);
          }
    }

}
