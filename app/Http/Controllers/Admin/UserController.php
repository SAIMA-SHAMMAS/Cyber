<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FileDownload;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\UserServise;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Gate;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * created by Ashar Azeem
     * ashararsi2@gmail.com
     */

    public function __construct(UserServise $UserServise)
    {
        $this->UserServise = $UserServise;
    }

    public function index()
    {
//        if (!Gate::allows('User_Index')) {
//            return abort(503);
//        }
        return view('admin.Users.index');
    }

    public function getdata()
    {
        return $this->UserServise->getdata();

    }

    public function user_deactive($id)
    {
           $this->UserServise->user_deactive($id);
        Session::flash('flash_message_sucess', 'User    Deactive Successfully  !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.users.index');
    } public function user_active($id)
    {
           $this->UserServise->user_active($id);
        Session::flash('flash_message_sucess', 'User    Deactive Successfully  !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        if (!Gate::allows('User_create')) {
//            return abort(503);
//        }
       $roles= $this->UserServise->create();
        return view('admin.Users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|unique:users,email',
            'role' => 'required',
            'password' => 'required|confirmed|min:6',
            'profile' => 'mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $this->UserServise->store($request);
          Session::flash('flash_message_sucess', 'User Successfully Add!!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.users.index');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        if (!Gate::allows('User_Edit')) {
//            return abort(503);
//        }
        $User= User::findOrFail($id);



        $roles= $this->UserServise->create();
        $user = $this->UserServise->edit($id);
        return view('admin.Users.edit', compact('user','roles' ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email|required',

            'password' => 'confirmed',
            'profile' => 'mimes:jpeg,jpg,png,gif|max:10000'
        ]);
        $user = $this->UserServise->update($request, $id);
        Session::flash('flash_message_sucess', 'User Update Successfully !!!.');
        Session::flash('alert-class', 'alert-success');
        return redirect()->route('admin.users.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
//        if (!Gate::allows('User_Delete')) {
//            return abort(503);
//        }
        $user = $this->UserServise->destroy($id);
        Session::flash('flash_message_sucess', 'User  Delete Successfully!!!.');
        Session::flash('alert-class', 'bg-froly');
        return redirect()->route('admin.users.index');
    }
    public function filedownload(){
     $files=   FileDownload::get();
        return view('admin.Users.files',compact('files'));
    }
}
