<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', [UserController::class, 'index'])->middleware('auth:api');

Route::post('/register', [UserController::class, 'store'])->name('login');

Route::group(["prefix" => '/v1'], function () {

    Route::group(["prefix" => '/notebook'], function () {
        Route::get('/', [NoteController::class, 'index']);
        Route::get('/{note}', [NoteController::class, 'show']);

        Route::middleware('auth:api')->group(function () {
            Route::post('/', [NoteController::class, 'store']);
            Route::patch('/{note}', [NoteController::class, 'update'])->can('update', 'note');
            Route::delete('/{note}', [NoteController::class, 'destroy'])->can('destroy', 'note');
        });
    });
});
