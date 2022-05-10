<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController; 

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

//Category Controller start

Route::get('category/all', [CategoryController::class, 'AllCat'])->name('all.category');

Route::post('category/add', [CategoryController::class, 'AddCat'])->name('store.category');

Route::get('catrgory/edit/{id}', [CategoryController::class, 'Edit']);

Route::POST('catrgory/update/{id}', [CategoryController::class, 'Update']);

Route::get('softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);




// Category Controller end

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // $users = User::all();
        $users = DB::table('users')->get();
        return view('dashboard', compact('users'));
    })->name('dashboard');
});