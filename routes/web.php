<?php

use App\Livewire\Counter;
use App\Livewire\HelloWorld;
use App\Livewire\Todo;
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

Route::get('/', HelloWorld::class);
Route::get('/counter', Counter::class);
Route::get('/todo', Todo::class);

// Route::get('/', Counter::class);
