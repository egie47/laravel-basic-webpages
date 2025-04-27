<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function AboutUs($name, $umur)
    {
        $bio = 'ini adalah biografi tentang kehidupan selama belajar masa di greenacademy';

        return view('about-us', [
            'nama_lengkap' => $name,
            'umur' => $umur,
            'hobi' => 'olahraga',
            'biografi' => $bio
        ]);
    }
}
