<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\En\HomePageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\OnlineRegisterationController;
use App\Http\Middleware\Localization;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;




//Route::get('/welcome', [HomeController::class, 'openHomePage'])->name('site.home');


Route::get('/localization/{locale}', LocalizationController::class)->name('localization');


Route::middleware(Localization::class)
    ->group(function () {
        Route::get('/', function () {
            return view('index');
        });
        Route::get('/home', [HomeController::class, 'openHomePage'])->name('site.home');
        Route::get('/announcements', [HomeController::class, 'annoucementsAll'])->name('annoucements.index');
        Route::get('/announcements/{announcement}', [HomeController::class, 'show'])->name('view');

        Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
        Route::get('/articles/{article}', [HomeController::class, 'showArticle'])->name('articles.show');


        Route::get('/teammembers', [HomeController::class, 'allTeamMembers'])->name('teamMembers.index');
        Route::get('/teammembers/{teammember}', [HomeController::class, 'showTeamMember'])->name('teammember.show');

        Route::get('/bookclubs', [HomeController::class, 'bookclubs'])->name('bookclub.index');
        Route::get('/bookclubs/{bookclub}', [HomeController::class, 'showBookclub'])->name('bookclub.show');

        Route::get('/whyus', [HomeController::class, 'whyus'])->name('whyus.index');
        Route::get('/whyus/{whyus}', [HomeController::class, 'whyusdetails'])->name('whyus.show');

        Route::get('/ourstory', [HomeController::class, 'ourstory'])->name('ourstory.index');
        Route::get('/ourstory/{ourstory}', [HomeController::class, 'ourstorydetails'])->name('ourstory.show');

        Route::get('/ourvision', [HomeController::class, 'ourvision'])->name('ourvision.index');
        Route::get('/ourvision/{ourvision}', [HomeController::class, 'ourvisiondetails'])->name('ourvision.show');

        Route::get('/videos', [HomeController::class, 'allvideos'])->name('videos.index');

        Route::get('/contactus/contacts', [ContactUsController::class, 'index'])->name('contact.index');
        Route::get('/contactus', [ContactUsController::class, 'create'])->name('contact.create');
        Route::post('/contactus', [ContactUsController::class, 'store'])->name('contact.store');

        Route::get('/onlineregisteration/create', [OnlineRegisterationController::class, 'create'])->name('onlineRegister.create');
        Route::post('/onlineregisteration', [OnlineRegisterationController::class, 'store'])->name('onlineRegister.store');

        Route::get('/photos', [HomeController::class, 'allphotos'])->name('photos.index');

      



    });


