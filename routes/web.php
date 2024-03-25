<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerController;

Route::get('/', [LawyerController::class, 'givemelawyers'])->name('home');

Route::get('/lawyer/{id}', [LawyerController::class, 'singlelawyer'])->name('view.user');

Route::get('/add', [LawyerController::class, 'addLawyer']);

Route::get('/update', [LawyerController::class, 'updatelawyer']);

Route::get('/dell/{id}', [LawyerController::class, 'Deletelawyer'])->name('delete.user');



// Route::get('/', function () {
//     return view('welcome');
// });
