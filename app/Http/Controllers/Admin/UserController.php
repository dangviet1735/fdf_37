<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Exception;
use Illuminate\Support\Facades\Storage;
use App\Http\Traits\UploadAvatar;
use Illuminate\Http\UploadedFile;
use Session;

class UserController extends Controller
{
    use UploadAvatar;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.add');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('admin.user.list', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        try {
            $input = $request->only([
                'username',
                'email',
                'address',
                'phone',
                'role',
                'password',
            ]);
            $checkFile = $request->hasFile('avatar');
            $file = $request->file('avatar');
            $input['avatar'] = $this->upAvatar($file, $checkFile);
            User::create($input);

            return redirect('admin/user/create')->with(['flash' => 'success', 'messages' => trans('admin/master.add_success')]);
        } catch (Exception $ex) {
            return redirect()->back()->with(['flash' => 'danger', 'messages' => trans('admin/master.add_errors')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

            return view('admin.user.edit', compact('user'));
        } catch(ModelNotFoundException $ex) {
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
    public function update(UserRequest $request, $id)
    {
        try {
            $user = User::findOrFail($id);
            $input = $request->only([
                'username',
                'email',
                'address',
                'phone',
                'role',
                'password',
            ]);
            $checkFile = $request->hasFile('avatar');

            $file = $request->file('avatar');
            $input['avatar'] = $this->upAvatar($file, $checkFile, $user);
            $user->update($input);

            return redirect('admin/user/create')->with(['flash' => 'success', 'messages' => trans('admin/master.edit_success')]);
        } catch(ModelNotFoundException $ex) {
            return redirect()->back()->with(['flash' => 'danger', 'messages' => trans('admin/master.edit_errors')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return redirect()->back()->with(['flash' => 'success', 'messages' => trans('admin/master.delete_completed')]);
        } catch (ModelNotFoundException $ex) {
            return redirect()->back()->with(['flash' => 'danger', 'messages' => trans('admin/master.delete_error')]);
        }
    }
}
