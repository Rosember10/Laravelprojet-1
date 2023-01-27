<?php

use App\Http\Controllers\EtudientController;
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

Route::get('etudient',                    [EtudientController::class, 'index' ])  ->name('etudient.index');
Route::get('etudient/{etudient}',         [EtudientController::class, 'show'  ])  ->name('etudient.show');
Route::get('etudient-create',             [EtudientController::class, 'create'])  ->name('etudient.create');
Route::post('etudient-create',            [EtudientController::class, 'store']);
Route::get('etudient-edit/{etudient}',    [EtudientController::class, 'edit'])    ->name('etudient.edit');
Route::put('etudient-edit/{etudient}',    [EtudientController::class, 'update']);
Route::delete('etudient/{etudient}',      [EtudientController::class, 'destroy']);

