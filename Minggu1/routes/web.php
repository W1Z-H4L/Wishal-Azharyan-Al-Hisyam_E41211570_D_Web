<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Profile', function () {
    return view('Profile');
});

Route::post('/login_proses', function(Request $request){
    dd($request);
});

Route::get('/coba2', function () {
    return "Ini Halaman Coba 2";
});
Route::redirect('/coba1', '/coba2');

Route::get('/coba2', function () {
    return view('/Profile');
});

//Route::view('/register', 'register', ["name" => "Ini Halaman register"]);

// Route::get('/user/{id}/{nama}', function ($id="E41211570", $nama = "Wishal Azharyan Al Hisyam") {
//     return "NIM Saya $id dan nama saya $nama";
// });

// Route::get('/user/{name}', function($name="Wishal"){
//     return "Hallo Nama Saya : " . $name;
// })->where('name' , '[A-Za-z]+'); 

// Route::get('/user/{name?}', function($name="Wishal"){
//     return "Hallo " . $name;
// })->where('name' , '.*'); 

// Route::view('/register', 'register', ["nama" => "Ini Halaman register"])->name("register");

Route::get('/register', function () {
    $url = route('user');
    return redirect()->route('user');
})->where('id','.*');
Route::get('/user/{id?}', function ($id = "Wishal"){
    return "Halo Nama Saya ". $id;
})->where('id', '.*')->name("user");

Route::middleware(['auth'])->group(function (){
    Route::get('/jadwal', function () {
        return "Ini Halaman Jadwal";
    });
});