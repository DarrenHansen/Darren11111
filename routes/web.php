<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $npm = '2327240163';
    $nama = 'Darren Hansen';
    return view('home', compact('npm', 'nama'));
});
