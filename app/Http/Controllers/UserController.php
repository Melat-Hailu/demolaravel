<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    //
    function users()
    {
        $data = DB::select('select * from users');
        return view('databaseuser', ['users' => $data]);
    }
}