<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController; 

Route::get('/', function () {
    return view('welcome');
});

Route::post('/api/client', [ClientController::class, 'create'])->name('client.create');
Route::get('/api/client/{id}', [ClientController::class, 'getClient'])->name('client.get');
Route::delete('/api/client/{id}', [ClientController::class, 'deleteClient'])->name('client.delete');

