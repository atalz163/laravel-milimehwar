<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\En\HomePageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Middleware\Localization;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
//Route::get('/welcome', [HomeController::class, 'openHomePage'])->name('site.home');


Route::get('/localization/{locale}', LocalizationController::class)->name('localization');

Route::middleware(Localization::class)
    ->group(function () {

        Route::get('/', [HomeController::class, 'openHomePage'])->name('site.home');
        Route::get('/announcements', [HomeController::class, 'annoucementsAll'])->name('annoucements.index');
        Route::get('/announcements/{announcement}', [HomeController::class, 'show'])->name('view');

        Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
        Route::get('/articles/{article}', [HomeController::class, 'showArticle'])->name('articles.show');

        // Route::get('/', [HomeController::class, 'openHomePage'])->name('site.home');
        // Route::get('/announcements', [HomeController::class, 'annoucementsAll'])->name('annoucements.index');
        // Route::get('/announcements/{announcement}', [HomeController::class, 'show'])->name('view');

        // Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
        // Route::get('/articles/{article}', [HomeController::class, 'showArticle'])->name('articles.show');
    });


// Route::get('/', [HomeController::class, 'openHomePage'])->name('site.home');
// Route::get('/announcements', [HomeController::class, 'annoucementsAll'])->name('annoucements.index');
// Route::get('/announcements/{announcement}', [HomeController::class, 'show'])->name('view');

// Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
// Route::get('/articles/{article}', [HomeController::class, 'showArticle'])->name('articles.show');


// Route::get('/', function () {
//     return view('home');
// });
