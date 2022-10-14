<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dosen', function(){
    $dosens = ["dadang yusup","oman komarudin","Purwantoro","iqbal maulana","Adhi Rizal",
                "Arip Solehudin","rini","Ratna","aji ","purwontoro"];
    return view('layout.dosen', [
        'dosens' => $dosens
    ]);
})->name('layout.dosen');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["fauzan arista","arfan ryo","ilham safaat",
                    "ilhan firaldi","adrian aufa","muhammad sidqih","nur fadhillah",
                    "adrian prayoga","iqbal kurniawan","faiz aghil"];
    return view('layout.mahasiswa', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('layout.mahasiswa');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Pemrograman berbasis Web","sistem operasi","Pemrograman Berbasis Web","Technopreneur",
                    "Blockchain","Cloud Computing","Statistika dan Probabilitas","Data mining",
                    "Rekayasa Perangkat Lunak","framework Pemrograman Web"];
    return view('layout.matakuliah', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('layout.matakuliah');