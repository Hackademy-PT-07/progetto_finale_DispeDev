<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RevisorController;
use Illuminate\Auth\Middleware\IsRevisor;

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

Route::get('/', [HomepageController::class, 'homepage'])->name('homepage');

Route::middleware("auth")->group(function(){

    Route::get('i/tuoi/annunci', function(){
        return view('auth.announcements-show');
    })->name('i.tuoi.annunci');

    Route::get('inserisci/annuncio', [AnnouncementController::class, 'create'])->name('annuncio.create');
    Route::get('lavora-con-noi/revisore', [RevisorController::class, 'workWithUs'])->name('diventa.revisore');
    
});

Route::get('annunci', [AnnouncementController::class, 'index'])->name('annunci.index');
Route::get('annuncio/{id}', [AnnouncementController::class, 'show'])->name('annunci.show');
Route::get('annunci/{id}', [HomepageController::class, 'filterAnnouncements'])->name("annunci.filter");
Route::post('annunci/ricerca', [AnnouncementController::class, 'filter'])->name('annunci.ricerca');
Route::get('/category/show/{category}}', [HomepageController::class, 'filterCategory'])->name('annunci.categoria');


Route::get('accetta/revisore/{user}', [RevisorController::class, 'makeRevisor'])->name('make.revisor');



#Rotte per revisor
Route::middleware("isRevisor")->group(function(){
Route::get('revisor/',[RevisorController::class, 'index'])->name('revisor.index');
#Rotta per accettazione annuncio
Route::patch('accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('accept_announcement');
#Rotta per rifiuto annuncio
Route::patch('rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('reject_announcement');
});