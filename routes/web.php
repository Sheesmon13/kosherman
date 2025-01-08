<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\PriceController;
use App\Http\Controllers\Admin\PortraitController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\MetaController;
use App\Http\Controllers\Guest\GuestController;
use App\Http\Controllers\Guest\ContactController;
use App\Http\Controllers\Guest\EmailController;
use App\Http\Controllers\Admin\VideoController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('admin')->group(function(){
    Route::get ('/', [AuthController::class, 'login'])->name('admin.auth.login');
    Route::post('/login', [AuthController::class, 'post_login'])->name('admin.login.submit');
    Route::get ('/register', [AuthController::class, 'register'])->name('admin.auth.register');
    Route::post('/register', [AuthController::class, 'post_register'])->name('admin.register.submit');
    Route::get('/logout', [AuthController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    

    Route::group(['prefix' => 'about'], function () {
        Route::get('/', [AboutController::class, 'list'])->name('admin.about.list');
        Route::post('/store', [AboutController::class, 'store'])->name('admin.about.store');
        Route::get('/edit/{id}', [AboutController::class, 'edit'])->name('admin.about.edit');
        Route::put('/update/{id}', [AboutController::class, 'update'])->name('admin.about.update');
        Route::delete('/delete/{id}', [AboutController::class, 'delete'])->name('admin.about.delete');
    });

    Route::group(['prefix' => 'staff'], function () {
        Route::get('/', [StaffController::class, 'list'])->name('admin.staff.list'); 
        Route::post('/store',[StaffController:: class, 'store'])->name('admin.staff.store'); 
        Route::get('/edit/{id}', [StaffController::class, 'edit'])->name('admin.staff.edit'); 
        Route::post('/update/{id}',[StaffController:: class, 'update'])->name('admin.staff.update');
        Route::delete('/delete/{id}',[StaffController:: class, 'delete'])->name('admin.staff.delete');  
    });

    Route::group(['prefix' => 'services'], function (){
        Route::get('/', [ServiceController::class, 'list'])->name('admin.service.list');
        Route::post('/store', [ServiceController::class, 'store'])->name('admin.service.store');
        Route::get('/edit/{id}', [ServiceController::class, 'edit'])->name('admin.service.edit');
        Route::put('/update/{id}', [ServiceController::class, 'update'])->name('admin.service.update');
        Route::delete('/delete/{id}', [ServiceController::class, 'delete'])->name('admin.service.delete');
    });

    Route::group(['prefix' => 'price'], function (){
        Route::get('/', [PriceController::class, 'index'])->name('admin.price.index');
        Route::post('/create', [PriceController::class, 'create'])->name('admin.price.create');
        Route::get('/edit/{id}', [PriceController::class, 'edit'])->name('admin.price.edit');
        Route::put('/update/{id}', [PriceController::class, 'update'])->name('admin.price.update');
        Route::delete('/delete/{id}', [PriceController::class, 'delete'])->name('admin.price.delete');
    });

    
    Route::group(['prefix' => 'gallery'], function(){
        Route::get('/', [PortraitController::class, 'list'])->name('admin.gallery.portrait.list');
        Route::post('/create', [PortraitController::class, 'store'])->name('admin.gallery.portrait.store'); 
        Route::get('/edit/{id}', [PortraitController::class, 'edit'])->name('admin.gallery.portrait.edit');
        Route::put('/update/{id}', [PortraitController::class, 'update'])->name('admin.gallery.portrait.update');
        Route::delete('/delete/{id}', [PortraitController::class, 'delete'])->name('admin.gallery.portrait.delete');
    });
    Route::group(['prefix' => 'photo'], function(){
        Route::get('/', [PhotoController::class, 'list'])->name('admin.gallery.photo.list');
        Route::post('/create', [PhotoController::class, 'store'])->name('admin.gallery.photo.store'); 
        Route::get('/edit/{id}', [PhotoController::class, 'edit'])->name('admin.gallery.photo.edit');
        Route::put('/update/{id}', [PhotoController::class, 'update'])->name('admin.gallery.photo.update');
        Route::delete('/delete/{id}', [PhotoController::class, 'delete'])->name('admin.gallery.photo.delete');
    });

    Route::group(['prefix' => 'info'], function () {
        Route::get('/', [InfoController::class, 'list'])->name('admin.info.list'); 
        Route::post('/store', [InfoController::class, 'store'])->name('admin.info.store');  
        Route::get('/edit/{id}', [InfoController::class, 'edit'])->name('admin.info.edit');
        Route::put('/update/{id}', [InfoController::class, 'update'])->name('admin.info.update'); 
        Route::delete('/delete/{id}', [InfoController::class, 'delete'])->name('admin.info.delete');  
    });

    Route::group(['prefix' => 'contact'], function () {
        Route::get('/', [ContactsController::class, 'index'])->name('admin.contact.index');
        Route::delete('/delete/{id}', [ContactsController::class, 'delete'])->name('admin.contact.delete');

    });

    Route::prefix('metadata')->group(function(){
        Route::get('/Metadata-home', [MetaController::class, 'Home'])->name('Home');
        Route::post('/create', [MetaController::class, 'Create'])->name('admin.metadata.Create');
        Route::get('/editpage/{id}', [MetaController::class, 'Editpage'])->name('admin.metadata.Edit');
        Route::post('/update/{id}', [MetaController::class, 'Update'])->name('admin.metadata.update');
        Route::get('/delete/{id}', [MetaController::class, 'Delete'])->name('admin.metadata.delete');
        
    });
    Route::get('/{page}', [MetaController::class, 'PageMeta'])->name('page.meta');
    

});



Route::get('/', [GuestController::class, 'index'])->name('index');
Route::get('/about', [GuestController::class, 'about'])->name('about');
Route::get('/services', [GuestController::class, 'services'])->name('services');
Route::get('/gallery', [GuestController::class, 'gallery'])->name('gallery');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');
Route::get('/footer', [GuestController::class, 'footer']);

Route::post('contact', [EmailController::class, 'sendContactMail'])->name('contact');
Route::get('/videos', [VideoController::class, 'Videos'])->name('Videos');
Route::post('/create', [VideoController::class, 'Create'])->name('admin.video.create');
Route::get('/editpage/{id}', [VideoController::class, 'Editpage'])->name('admin.video.Editpage');
Route::post('/update/{id}', [VideoController::class, 'Update'])->name('admin.video.update');
Route::get('/delete/{id}', [VideoController::class, 'Delete'])->name('admin.video.delete'); 

        
