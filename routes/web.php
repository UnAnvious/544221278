<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('konsultan', function(){
    $konsultan=App\Models\konsultan::where('nama', '=', 3)->first();
    echo"Anggota Konsultan" .$konsultan -> nama.":";
    foreach($konsultan->konsultan as $data){
        echo "<li>". $data->nama ."<li>";
    }
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
