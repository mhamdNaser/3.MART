<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::get();
        // return $user;
        return view('admin.userTable', compact('users'));

        // return view('admin.userTable');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // view add user page
        return view('admin.addUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user_img = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/userimage',$user_img);
        var_dump($request->file('upload_file'));

        // insert user
        $user = new user();
        $user->role = $request->Role;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->User_Image = $user_img;
        $user->save();



        return redirect('user');
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
        //
        $user = User::findOrFail($id);
        return view('admin.updateUser',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        // $user_img = $request->file('image')->getClientOriginalName();
        // $request->file('image')->storeAs('public/userimage',$user_img);

        // Update User
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        // $user->User_Image = $user_img;
        if ($request->hasFile('image')) {
            $user_img = $request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/userimage',$user_img);
            $user->User_Image = $user_img;
        }
        $user->save();

        return redirect('user');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::find($id);
        $user->delete();
        return back()->with('success','User deleted successfully');
        return redirect(route('user.index'));


    }
}
