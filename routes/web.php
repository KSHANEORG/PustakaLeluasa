<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return redirect('/app/login');
})->name('login');
