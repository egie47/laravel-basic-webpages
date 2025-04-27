<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //list, detail, edit, hapus, tambah

    public function index()
    {
        return view('users.index');
    }

    public function test()
    {
        return "hello from test";
    }
}
