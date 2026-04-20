<?php
use App\Http\Controllers\LocationController;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Raw;

// Route::get('/', function(){
//     return "hello coy!";
// });

Route::livewire('/','pages::home');
Route::livewire('/about','pages::about');
Route::livewire('/data','pages::plant');

Route::resource('/location', LocationController::class);
