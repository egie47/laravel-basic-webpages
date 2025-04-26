<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view("index");
    }


    public function home()
    {
        $name = "egie";
        $age = 15;
        $grade = 100;

        $daftarmahasiswa = ["denis", "ucup", "dimas", "bombardiro", "balerina", "tralalero tralala", "tung sahur"];

        $daftarsiswa = [
            [
                "nama" => "enrico",
                "nisn" => "233432",
                "jenis_kelamin" => "pria",
                "umur" => 12
            ],
            [
                "nama" => "mamat",
                "nisn" => "1334555",
                "jenis_kelamin" => "pria",
                "umur" => 19
            ],
            [
                "nama" => "dewi",
                "nisn" => "3334555",
                "jenis_kelamin" => "wanita",
                "umur" => 11
            ],

            [
                "nama" => "furina",
                "nisn" => "5534555",
                "jenis_kelamin" => "wanita",
                "umur" => 500
            ]
        ];

        return view("home", [
            "fullname" => $name,
            "umur" => $age,
            "listmahasiswa" => $daftarmahasiswa,
            "nilai" => $grade,
            "daftarsiswa" => $daftarsiswa
        ]);
    }
}
