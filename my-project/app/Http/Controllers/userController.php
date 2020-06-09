<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $users = User::get();
        return view('users.index',[
            'users'=> $users
        ]);
    }
    
function show($id){
    $user = User::where('id',$id)->first();
    return view('users.show', [
        'user' => $user
    ]);
}

    function create()
    {
        return view('users.create');
    }

    function store()
    {
        $ten = $_POST['ten'];
        $thuDienTu = $_POST['thuDienTu'];
        $matkhau = $_POST['password'];
        User::create([
            'name' => $ten,
            'email' => $thuDienTu,
            'password' =>$matkhau
        ]);
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }

    function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('users.edit', [
            'user' => $user
        ]);
    }

    function update($id)
    {
        $ten = $_POST['ten'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        User::where('id', $id)->update([
            'name' => $ten,
            'email'=> $email,
            'password'=> $password
        ]);
        $users = User::get();
        return view('users.index', [
            'users' => $users
        ]);
    }
    public function xoa($id){
        $user = User::find($id);
        $user -> delete();
        return redirect('index');
    }
}