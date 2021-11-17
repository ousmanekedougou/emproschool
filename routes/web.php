<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// La Partie de l'information pour les utilisateur
Route::get('/information',[App\Http\Controllers\User\InformationController::class, 'index'])->name('info.index');

// La partie de la formation payante
Route::get('/initiation',[App\Http\Controllers\User\InitiationController::class, 'index'])->name('user.initiation.index');
Route::post('/initiation',[App\Http\Controllers\User\InitiationController::class, 'post'])->name('user.initiation.post');


Route::get('/web',[App\Http\Controllers\User\WebController::class, 'index'])->name('user.web.index');
Route::post('/web',[App\Http\Controllers\User\WebController::class, 'post'])->name('user.web.post');

Route::get('/wordpress',[App\Http\Controllers\User\WebController::class, 'create'])->name('user.web.create');
Route::post('/wordpress',[App\Http\Controllers\User\WebController::class, 'store'])->name('user.web.store');

Route::get('/bureautique',[App\Http\Controllers\User\BureautiqueController::class, 'index'])->name('user.bureautique.index');
Route::post('/bureautique',[App\Http\Controllers\User\BureautiqueController::class, 'post'])->name('user.bureautique.post');

Route::get('/multimedia',[App\Http\Controllers\User\MultimediatController::class, 'index'])->name('user.multimedia.index');
Route::post('/multimedia',[App\Http\Controllers\User\MultimediatController::class, 'post'])->name('user.multimedia.post');

Route::get('/base',[App\Http\Controllers\User\BaseController::class, 'index'])->name('user.base.index');
Route::post('/base',[App\Http\Controllers\User\BaseController::class, 'post'])->name('user.base.post');

Route::get('/maintenance',[App\Http\Controllers\User\MaintenanceController::class, 'index'])->name('user.maintenance.index');
Route::post('/maintenance',[App\Http\Controllers\User\MaintenanceController::class, 'post'])->name('user.maintenance.post');

Route::get('/reseau',[App\Http\Controllers\User\ReseauController::class, 'index'])->name('user.reseau.index');
Route::post('/reseau',[App\Http\Controllers\User\ReseauController::class, 'post'])->name('user.reseau.post');

// Fin de la partie formation payante

Route::post('/',[App\Http\Controllers\User\ContactController::class, 'post'])->name('user.contact.post');

Route::get('/devi',[App\Http\Controllers\User\DeviController::class, 'index'])->name('user.devi.index');
Route::post('/devi',[App\Http\Controllers\User\DeviController::class, 'post'])->name('user.devi.post');

Auth::routes();



Route::get('/admin/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('admin.home');



Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->name('admin.')->group(function () {
    Route::resource('/gratuit',GratuitController::class)->only(['index','update','destroy']);
    Route::resource('/initial',InitialeController::class);
   
    Route::resource('/devi',DeviController::class)->only(['index','destroy']);
    Route::resource('/contact',ContactController::class);
    Route::post('/contact/groupe',[App\Http\Controllers\Admin\ContactController::class,'groupe'])->name('contact.groupe');
    Route::resource('/membre',MembreController::class)->only(['index','update','destroy','store','create','show']);
});

Route::put('admin/initial.payment/{id}',[App\Http\Controllers\Admin\InitialeController::class,'payment'])->name('initial.payment');

// Les Route Du Developpement Web
Route::get('/admin/web',[App\Http\Controllers\Admin\WebController::class,'index'])->name('web.index');
Route::get('/admin/wordpress',[App\Http\Controllers\Admin\WebController::class,'create'])->name('web.create');
// Route::get('/admin/webavancer',[App\Http\Controllers\Admin\WebController::class,'avancer'])->name('web.avancer');
Route::put('/admin/web.update/{id}',[App\Http\Controllers\Admin\WebController::class,'update'])->name('web.update');
Route::put('/admin/web.payment/{id}',[App\Http\Controllers\Admin\WebController::class,'payment'])->name('web.payment');
Route::delete('/admin/web.destroy/{id}',[App\Http\Controllers\Admin\WebController::class,'destroy'])->name('web.destroy');

// Les Route Du Multimediat
Route::get('/admin/audiovisuel',[App\Http\Controllers\Admin\MultimediatController::class,'index'])->name('audiovisuel.index');
// Route::get('/admin/multintermediare',[App\Http\Controllers\Admin\MultimediatController::class,'intermediare'])->name('multimediat.intermediare');
// Route::get('/admin/multiavancer',[App\Http\Controllers\Admin\MultimediatController::class,'avancer'])->name('multimediat.avancer');
Route::put('/admin/multimediat.update/{id}',[App\Http\Controllers\Admin\MultimediatController::class,'update'])->name('multimediat.update');
Route::put('/admin/multimediat.payment/{id}',[App\Http\Controllers\Admin\MultimediatController::class,'payment'])->name('multimediat.payment');
Route::delete('/admin/multimediat.destroy/{id}',[App\Http\Controllers\Admin\MultimediatController::class,'destroy'])->name('multimediat.destroy');

// Les Route De la Maintenance
Route::get('/admin/maintenance',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'index'])->name('maintenance.index');
// Route::get('/admin/maintermadiare',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'intermediare'])->name('maintenance.intermediare');
// Route::get('/admin/maintavancer',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'avancer'])->name('maintenance.avancer');
Route::put('/admin/maintenance.update/{id}',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'update'])->name('maintenance.update');
Route::put('/admin/maintenance.payment/{id}',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'payment'])->name('maintenance.payment');
Route::delete('/admin/maintenance.destroy/{id}',[App\Http\Controllers\Admin\MaintenaceReseauController::class,'destroy'])->name('maintenance.destroy');


// Les Route Du Bureautique
Route::get('/admin/bureautique',[App\Http\Controllers\Admin\BureautiqueController::class,'index'])->name('bureautique.index');
Route::put('/admin/bureautique.update/{id}',[App\Http\Controllers\Admin\BureautiqueController::class,'update'])->name('bureautique.update');
Route::put('/admin/bureautique.payment/{id}',[App\Http\Controllers\Admin\BureautiqueController::class,'payment'])->name('bureautique.payment');
Route::delete('/admin/bureautique.destroy/{id}',[App\Http\Controllers\Admin\BureautiqueController::class,'destroy'])->name('bureautique.destroy');


Route::get('/admin/reseau',[App\Http\Controllers\Admin\ReseauController::class,'index'])->name('reseau.index');
Route::put('/admin/reseau.update/{id}',[App\Http\Controllers\Admin\ReseauController::class,'update'])->name('reseau.update');
Route::put('/admin/reseau.payment/{id}',[App\Http\Controllers\Admin\ReseauController::class,'payment'])->name('reseau.payment');
Route::delete('/admin/reseau.destroy/{id}',[App\Http\Controllers\Admin\ReseauController::class,'destroy'])->name('reseau.destroy');


Route::get('/admin/base',[App\Http\Controllers\Admin\BaseController::class,'index'])->name('base.index');
Route::get('/admin/.payment/{id}',[App\Http\Controllers\Admin\BaseController::class,'payment'])->name('base.payment');
Route::put('/admin/base.update/{id}',[App\Http\Controllers\Admin\BaseController::class,'update'])->name('base.update');
Route::delete('/admin/base.destroy/{id}',[App\Http\Controllers\Admin\BaseController::class,'destroy'])->name('base.destroy');