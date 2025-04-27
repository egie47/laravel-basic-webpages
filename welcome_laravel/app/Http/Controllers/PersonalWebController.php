<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalWebController extends Controller
{
    public function index($name, $jenis_kelamin)
    {
        return view('personal-web', [
            'nama' => $name,
            'gender' => $jenis_kelamin,


        ]);
    }
}
