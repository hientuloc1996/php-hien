<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function quetnha(){
        return view('welcome');
    }
    function laytatcanguoidung(){
        $users = DB::table('users')->get();
        return view('users', [
            'users' => $users,
            'loiChao' => 'Hello World'
        ]);
    }
    function indulieunguoidung(){
        $users = DB::table('users')->get();
        return view('users',[
            'users' => $users
        ]);
    }
}
