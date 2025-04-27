<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\MyProfileController;
use App\Http\Controllers\PersonalWebController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


//ketika pengunjung meminta url '/'
Route::get('/', function () {
    return view('welcome');
});

route::get('/users/{id}', function ($id) {
    return "User Dengan ID" . $id;
});
//ketika menuliskan alamat di usercontroller
route::get('/users', [UserController::class, 'index']);



route::get('/about', function () {
    echo "hello world";
});

route::get('/home', [Homecontroller::class, 'index']);

route::get('/about-us/{name}/{umur}', [AboutController::class, 'AboutUs']);

route::get('/my-profile', [MyProfileController::class, 'index']);

route::get('/personal-web/{name}/{jenis_kelamin}', [PersonalWebController::class, 'index']);
