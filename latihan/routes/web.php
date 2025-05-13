<?php
use App\Http\Controllers\MateriController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdiController;
use App\Http\Controller\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;


// Route::get('/', [MateriController::class, 'index']);

// Route::get('/materi/index',action:[MateriController::class,'index']);

// Route::get('/materi/index/{id}',action:[MateriController::class,'detail']);
// Route::get('/', [MateriController::class, 'index']);

// Route::get('/home', [MateriController::class, 'home']);

// Route::get('/about', [MateriController::class, 'about']);

// Route::resource('Materi', MateriController::class);;
// Route::resource('prodi', ProdiController::class);;







//  Route::get('/Total/{angka1}/{angka2}/{angka3}', function ($angka1, $angka2, $angka3) {
//         $Total = $angka1 + $angka2+ $angka3;
//         return view('hasil',compact('angka1','angka2','angka3','Total'));
//     });
 
Route::resource('prodi', ProdiController::class);;
Route::resource('Materi', MateriController::class);;
Route::resource('Fakultas', FakultasController::class);;
Route::resource('Mahasiswa', MahasiswaController::class);;
Route::resource('Dosen', DosenController::class);;

