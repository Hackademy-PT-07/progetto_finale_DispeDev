<?php

use App\Http\Controllers\HomepageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\RevisorController;
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
    Route::get('inserisci/annuncio', [AnnouncementController::class, 'create'])->name('annuncio.create');
});

Route::get('annunci', [AnnouncementController::class, 'index'])->name('annunci.index');
Route::post('annunci/categorie', [AnnouncementController::class, 'filter'])->name('annunci.categoria');
Route::get('annunci/{id}', [HomepageController::class, 'filter'])->name("annunci.filter");
Route::get('annunci/{id}/show', [AnnouncementController::class, 'show'])->name('annunci.show');

#Rotte per revisore
Route::get('revisor/',[RevisorController::class, 'index'])->name('revisor.index');
#Rotta per accettazione annuncio
Route::patch('accetta/annuncio/{announcement}', [RevisorController::class, 'acceptAnnouncement'])->name('accept_announcement');
#Rotta per rifiuto annuncio
Route::patch('rifiuta/annuncio/{announcement}', [RevisorController::class, 'rejectAnnouncement'])->name('reject_announcement');
