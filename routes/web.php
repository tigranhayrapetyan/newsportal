<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CategoryController; 
use App\Http\Controllers\BrandController;
use App\Http\Controllers\MultiPictureController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeAboutController;
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
    $brands = DB::table('brands')->get();
    return view('home', compact('brands'));
});

//Category Controller start

Route::get('category/all', [CategoryController::class, 'AllCat'])->name('all.category');

Route::post('category/add', [CategoryController::class, 'AddCat'])->name('store.category');

Route::get('catrgory/edit/{id}', [CategoryController::class, 'Edit']);
Route::POST('catrgory/update/{id}', [CategoryController::class, 'Update']);

Route::get('softdelete/category/{id}', [CategoryController::class, 'SoftDelete']);


Route::get('catrgory/restore/{id}', [CategoryController::class, 'Restore']);

Route::get('pdelete/catrgory/{id}', [CategoryController::class, 'Pdelete']);

/// For Brand routs

Route::get('brand/all', [BrandController::class, 'AllBrand'])->name('all.brand');
Route::post('brand/add', [BrandController::class, 'StoreBrand'])->name('store.brand');
Route::get('brand/edit/{id}', [BrandController::class, 'Edit']);
Route::POST('brand/update/{id}', [BrandController::class, 'Update']);
Route::get('brand/delete/{id}', [BrandController::class, 'Delete']);


//Multi Image upload

Route::get('multi/image', [MultiPictureController::class, 'Multipic'])->name('multi.image');
Route::post('multi/add', [MultiPictureController::class, 'StoreImg'])->name('store.image');




// email verification route

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');






// Category Controller end

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        // $users = User::all();
        $users = DB::table('users')->get();
        return view('admin.index', );
    })->name('dashboard');
});



// Admin panel User Logout rout 
Route::get('user/logout', [MultiPictureController::class, 'Logout'])->name('user.logout');

//admin panel Slider 

Route::get('home/slider', [HomeController::class, 'HomeSlider'])->name('home.slider');
Route::get('add/slider', [HomeController::class, 'AddSlider'])->name('add.slider');
Route::post('store/slider', [HomeController::class, 'StoreSlider'])->name('store.slider');
Route::get('edit/slider/{id}', [HomeController::class, 'SliderEdit']);
Route::post('update/slider/{id}', [HomeController::class, 'SliderUpdate']);
Route::get('delete/slider/{id}', [HomeController::class, 'SliderDelete']);



// Home about 

Route::get('home/about', [HomeAboutController::class, 'HomeAbout'])->name('home.about');
Route::get('add/about', [HomeAboutController::class, 'AddAbout'])->name('add.about');
Route::post('store/about', [HomeAboutController::class, 'StoreAbout'])->name('store.about');
Route::get('about/edit/{id}', [HomeAboutController::class, 'Edit']);
Route::post('edit/about/{id}', [HomeAboutController::class, 'AboutUpdate'])->name('update.about');
Route::get('about/delete/{id}', [HomeAboutController::class, 'AboutDelete']);



