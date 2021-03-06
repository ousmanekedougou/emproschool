<?php

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

// Route::get('/', function () {
//     return view('user.index');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
// La partie de la formation gratuit
Route::get('/gratuit',[App\Http\Controllers\User\GratuitController::class, 'index'])->name('gratuit.index');
Route::post('/gratuit',[App\Http\Controllers\User\GratuitController::class, 'post'])->name('gratuit.post');
// Fin de la partie formation gratuite

// La partie de la formation payante
Route::get('/initiation',[App\Http\Controllers\User\InitiationController::class, 'index'])->name('initiation.index');
Route::post('/initiation',[App\Http\Controllers\User\InitiationController::class, 'post'])->name('initiation.post');


Route::get('/web',[App\Http\Controllers\User\WebController::class, 'index'])->name('web.index');
Route::post('/web',[App\Http\Controllers\User\WebController::class, 'post'])->name('web.post');

Route::get('/bureautique',[App\Http\Controllers\User\BureautiqueController::class, 'index'])->name('bureautique.index');
Route::post('/bureautique',[App\Http\Controllers\User\BureautiqueController::class, 'post'])->name('bureautique.post');

Route::get('/multimedia',[App\Http\Controllers\User\MultimediatController::class, 'index'])->name('multimedia.index');
Route::post('/multimedia',[App\Http\Controllers\User\MultimediatController::class, 'post'])->name('multimedia.post');

Route::get('/base',[App\Http\Controllers\User\BaseController::class, 'index'])->name('base.index');
Route::post('/base',[App\Http\Controllers\User\BaseController::class, 'post'])->name('base.post');

Route::get('/maintenance',[App\Http\Controllers\User\MaintenanceController::class, 'index'])->name('maintenance.index');
Route::post('/maintenance',[App\Http\Controllers\User\MaintenanceController::class, 'post'])->name('maintenance.post');

Route::get('/reseau',[App\Http\Controllers\User\ReseauController::class, 'index'])->name('reseau.index');
Route::post('/reseau',[App\Http\Controllers\User\ReseauController::class, 'post'])->name('reseau.post');
// Fin de la partie formation payante
Route::post('/',[App\Http\Controllers\User\ContactController::class, 'post'])->name('contact.post');

Auth::routes();



Route::get('/admin/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin.home');



Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->name('admin.')->group(function () {
    Route::resource('/gratuit',GratuitController::class)->only(['index','update','destroy']);
    Route::resource('/initial',InitialeController::class)->only(['index','update','destroy']);
    Route::resource('/personnelle',DeveloppementPerController::class)->only(['index','update','destroy']);
    Route::resource('/contact',ContactController::class)->only(['index','update','destroy','post','create','show']);
});

// Les Route Du Developpement Web
Route::get('/admin/webinit',[App\Http\Controllers\Admin\WebController::class,'initiale'])->name('web.initial');
Route::get('/admin/webintermediare',[App\Http\Controllers\Admin\WebController::class,'intermediare'])->name('web.intermediare');
Route::get('/admin/webavancer',[App\Http\Controllers\Admin\WebController::class,'avancer'])->name('web.avancer');
Route::put('/admin/web.update/{id}',[App\Http\Controllers\Admin\WebController::class,'update'])->name('web.update');
Route::delete('/admin/web.destroy/{id}',[App\Http\Controllers\Admin\WebController::class,'destroy'])->name('web.destroy');

// Les Route Du Multimediat
Route::get('/admin/multinit',[App\Http\Controllers\Admin\MultimediatController::class,'initiale'])->name('multimediat.initial');
Route::get('/admin/multintermediare',[App\Http\Controllers\Admin\MultimediatController::class,'intermediare'])->name('multimediat.intermediare');
Route::get('/admin/multiavancer',[App\Http\Controllers\Admin\MultimediatController::class,'avancer'])->name('multimediat.avancer');
Route::put('/admin/multimediat.update/{id}',[App\Http\Controllers\Admin\MultimediatController::class,'update'])->name('multimediat.update');
Route::delete('/admin/multimediat.destroy/{id}',[App\Http\Controllers\Admin\MultimediatController::class,'destroy'])->name('multimediat.destroy');

// Les Route De la Maintenance
Route::get('/admin/maintinit',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'initiale'])->name('maintenance.initial');
Route::get('/admin/maintermadiare',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'intermediare'])->name('maintenance.intermediare');
Route::get('/admin/maintavancer',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'avancer'])->name('maintenance.avancer');
Route::put('/admin/maintenance.update/{id}',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'update'])->name('maintenance.update');
Route::delete('/admin/maintenance.destroy/{id}',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'destroy'])->name('maintenance.destroy');


// Les Route Du Bureautique
Route::get('/admin/bureautique',[App\Http\Controllers\Admin\BureautiqueController::class,'initiale'])->name('bureautique.initial');
Route::get('/admin/bureautiqueAvancer',[App\Http\Controllers\Admin\BureautiqueController::class,'avancer'])->name('bureautique.avancer');
Route::put('/admin/bureautique.update/{id}',[App\Http\Controllers\Admin\BureautiqueController::class,'update'])->name('bureautique.update');
Route::delete('/admin/bureautique.destroy/{id}',[App\Http\Controllers\Admin\BureautiqueController::class,'destroy'])->name('bureautique.destroy');


Route::get('/admin/reseauinit',[App\Http\Controllers\Admin\ReseauController::class,'initiale'])->name('reseau.initial');
Route::get('/admin/reseauinter',[App\Http\Controllers\Admin\ReseauController::class,'intermediare'])->name('reseau.intermediare');
Route::get('/admin/reseauvancer',[App\Http\Controllers\Admin\ReseauController::class,'avancer'])->name('reseau.avancer');
Route::put('/admin/reseau.update/{id}',[App\Http\Controllers\Admin\ReseauController::class,'update'])->name('reseau.update');
Route::delete('/admin/reseau.destroy/{id}',[App\Http\Controllers\Admin\ReseauController::class,'destroy'])->name('reseau.destroy');


Route::get('/admin/baseinit',[App\Http\Controllers\Admin\BaseController::class,'initiale'])->name('base.initial');
Route::get('/admin/baseinter',[App\Http\Controllers\Admin\BaseController::class,'intermediare'])->name('base.intermediare');
Route::get('/admin/basevancer',[App\Http\Controllers\Admin\BaseController::class,'avancer'])->name('base.avancer');
Route::put('/admin/base.update/{id}',[App\Http\Controllers\Admin\BaseController::class,'update'])->name('base.update');
Route::delete('/admin/base.destroy/{id}',[App\Http\Controllers\Admin\BaseController::class,'destroy'])->name('base.destroy');