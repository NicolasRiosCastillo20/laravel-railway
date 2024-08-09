<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return redirect()->route('Index');
});



Route::prefix('blog')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('Index');

    Route::prefix('service')->group(function () {
        Route::get('/', [BlogController::class, 'getServices'])->name('services');
        Route::get('/{idService}', [BlogController::class, 'getLongDescription'])->name('getLongDescription');
    });

    Route::prefix('experience')->group(function () {
        Route::get('/', [BlogController::class, 'getExperiences'])->name('experiences');
    });
});


Route::prefix('contact')->group(function () {
    Route::get('/', [ContactController::class, 'index'])->name('contact');
    Route::post('/createContact', [ContactController::class, 'createContact']);
});


Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('AdminService');
    });

    Route::prefix('contact')->group(function () {
        Route::get('/', [AdminController::class, 'adminContact'])->name('AdminContact');
        Route::get('/{idContact}', [AdminController::class, 'getMessageContact']);
        Route::delete('/{idContact}', [AdminController::class, 'deleteContact']);
    });

    Route::prefix('service')->group(function () {
        Route::get('/', [AdminController::class, 'adminService'])->name('AdminService');
        Route::post('/fromCreateService', [AdminController::class, 'fromCreateService']);
        Route::post('/CreateService', [AdminController::class, 'createService']);
        Route::get('/getShortDescription/{idService}', [AdminController::class, 'shortDescription']);
        Route::get('/getLongDescription/{idService}', [AdminController::class, 'longDescription']);
        Route::delete('/{idService}', [AdminController::class, 'deleteService']);
    });


    Route::prefix('experience')->group(function () {
        Route::get('/', [AdminController::class, 'adminExperience'])->name('AdminExperiences');
        Route::post('/fromCreateExperience', [AdminController::class, 'fromCreateExperience']);
        Route::post('/createExperience', [AdminController::class, 'createExperience']);
        Route::delete('/{idExperience}', [AdminController::class, 'deleteExperience']);
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
