<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/counter', Counter::class);
Route::get('/calculator', \App\Livewire\Calculator::class);
Route::get('/todolist', \App\Livewire\Todolist::class);
Route::get('/todo/{id}', \App\Livewire\TodoShow::class);