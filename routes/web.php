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

Route::redirect ('/','/dosen');
Route::get('/dosen', function(){
    $dosens = ["Betha Nurina Sari, M.Kom.", "M. Jajuli, M.Si.", "Garno, M.Kom.", "Asep Jamaludin, S.Si., M.Kom.", "Carudin, M.Kom.",
    "Purwantoro, M.Kom.", "Arip Solehudin, M.Kom.","Susilawati, M.Si.", "Intan Purnamasari, M.Kom.", "Aji Primajaya, S.Si., M.Kom."];
    return view('dosen.index', [
        'dosens' => $dosens
    ]);
})->name('dosen.index');
    
Route::get('/mahasiswa', function(){
    $mahasiswas = ["Nabila Aulia", "Octavia Salwa Dzaky Fadhillah", "Radika Tripena", "Risa Adelia", "Sopiatul Ulum",
    "Nazwa Ariana", "Afiva Yuazijah", "Nur Fadhilah Az-haari","Putri Aulia Kusnadi", "Nur Safitri"];
    return view('mahasiswa.index', [
        'mahasiswas' => $mahasiswas
    ]);
})->name('mahasiswa.index');
    
Route::get('/matakuliah', function(){
    $matakuliahs = ["Blockchain", "Data Mining", "Cloud Computing", "Pemrograman Berbasis Web", "Technopreneur", 
    "Framework Pemrograman Web", "Kecerdasan Buatan", "Algoritma dan Pemrograman","Interaksi Manusia dan Komputer", "Basis Data"];
    return view('matakuliah.index', [
        'matakuliahs' => $matakuliahs
    ]);
})->name('matakuliah.index');