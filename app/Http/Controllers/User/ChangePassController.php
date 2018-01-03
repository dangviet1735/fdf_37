<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Http\Requests\User\ChangePassRequest;
class ChangePassController extends Controller
{
    public function edit($id)
    {
        try {
            $user = User::findOrFail($id);

            return view('client.page.change-password', compact('user'));
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
    public function update(ChangePassRequest $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            if ($request->password) {
                if (Hash::check($request->oldPassword, auth()->user()->password)) {
                    $input['password'] = $request->password;
                    $user->update($input);

                    return redirect('change-password/.$user->id./edit')->with(['flash' => 'success', 'messages' => trans('client/master.register_update_completed')]);
                } else {
                    return redirect()->back()->with(['flash' => 'danger', 'messages' => trans('client/master.register_errors')]);
                }
            }
          } catch(ModelException $ex) {
                return redirect()->back()->with(['flash' => 'danger', 'messages' => trans('client/master.register_update_faild')]);
          }
    }
}
