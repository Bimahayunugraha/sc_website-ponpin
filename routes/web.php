<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserKeluhanController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UserDiskusiController;
use App\Http\Controllers\TopicEvaluationController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\AdminTanggapanController;
use App\Http\Controllers\AdminKeluhanController;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\DataWargaController;
use App\Http\Controllers\NotificationsController;

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
Route::middleware('guest')->group(function () { 
    Route::get('/', function () {
        return view('welcome');
    });
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'active' => 'about'
    ]);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/diskusi', [ForumController::class, 'index'])->name('diskusi');
    Route::get('/diskusi/{forum:slug}', [ForumController::class, 'show']);
    Route::post('/diskusi/{forum:slug}', [ForumController::class, 'postComment']);
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin', 'DashboardAdminController@index')->name('dashboard-admin');
    Route::resource('admin', 'DashboardAdminController');
    Route::resource('notifikasi', 'NotificationsController');
    Route::post('admin/notifikasi/markread', 'NotificationsController@marknotifications');
    Route::get('admin/datakategori/checkSlug', 'CategoryController@checkSlug');
    Route::resource('datakategori', 'CategoryController');
    Route::put('datakategori/{id}', 'CategoryController@update')->name('datakategori.update');
    Route::delete('datakategori/{id}', 'CategoryController@destroy')->name('datakategori.destroy');
    Route::resource('tanggapan', 'AdminTanggapanController'); 
    // Route::get('admin/tanggapan', 'AdminTanggapanController@show')->name('tanggapan.show'); 
    Route::resource('admin/datakeluhan', 'AdminKeluhanController');
    Route::get('admin/datakeluhan', 'AdminKeluhanController@index'); 
    Route::get('admin/datakeluhan/detail', 'AdminKeluhanController@show')->name('datakeluhan.detail'); 
    Route::get('admin/datakeluhan/detail/tanggapan/{id}', 'AdminKeluhanController@tanggapan')->name('datakeluhan.tanggapan'); 
    Route::get('admin/datakeluhan/proses/{id}', 'AdminKeluhanController@proses')->name('datakeluhan.proses'); 
    Route::get('admin/datakeluhan/selesai/{id}', 'AdminKeluhanController@selesai')->name('datakeluhan.selesai'); 
    Route::get('admin/datakeluhan/{id}', 'AdminKeluhanController@index');
    Route::get('admin/datavoting/checkSlug', 'VoteController@checkSlug');
    Route::get('admin/datavoting/ditutup/{id}', 'VoteController@tutup')->name('voting.tutup');
    Route::get('hasilvoting', 'CandidateController@summary')->name('voting.summary');
    // Route::get('datavoting/{id}', [CandidateController::class, 'edit'])->name('voting.edit');
    // Route::put('datavoting/{id}', [CandidateController::class, 'update'])->name('voting.update');
    Route::resource('datavoting', 'CandidateController');
    Route::resource('dataevaluation', 'TopicEvaluationController');
    Route::get('dataevaluation', 'TopicEvaluationController@admin')->name('dataevaluation.admin');
    Route::get('evaluation', 'TopicEvaluationController@evaluate')->name('dataevaluation.evaluate');
    Route::put('dataevaluation/{id}', 'TopicEvaluationController@update')->name('dataevaluation.update');
    Route::get('admin/dataevaluation/checkSlug', 'TopicEvaluationController@checkSlug');
    Route::delete('dataevaluation/{id}', 'TopicEvaluationController@destroy')->name('dataevaluation.destroy');
    Route::get('/admin/dataevaluation/detail/{id}', 'TopicEvaluationController@details')->name('dataevaluation.details');
    Route::resource('dataagenda', 'AgendaController');
    Route::get('admin/dataagenda/checkSlug', 'AgendaController@checkSlug');
    Route::get('dataagenda', 'AgendaController@admin')->name('dataagenda.admin');
    Route::get('/admin/dataagenda/detail/{id}', 'AgendaController@seedetails')->name('dataagenda.seedetails');
    Route::put('dataagenda/{id}', 'AgendaController@update')->name('dataagenda.update');
    Route::delete('dataagenda/{id}', 'AgendaController@destroy')->name('dataagenda.destroy');
    // Route::get('admin/dataagenda/tutup/{id}', 'AgendaController@berakhir')->name('dataagenda.berakhir'); 
    Route::resource('/penilaian', TopicEvaluationController::class);
    Route::get('evaluation/export_excel', 'TopicEvaluationController@export_excel')->name('export_excel');
    Route::resource('datawarga', DataWargaController::class);
    Route::put('datawarga/{id}', 'DataWargaController@update')->name('datawarga.update');
    Route::delete('datawarga/{id}', 'DataWargaController@destroy')->name('datawarga.destroy');
    // Route::get('/admin/datawarga/editpassword', [DataWargaController::class,'passwordedit'])->name('password.edit');
    Route::get('/admin/datawarga/detail/{id}', 'DataWargaController@show')->name('datawarga.show');
    // Route::put('/admin/datawarga/editpassword', [DataWargaController::class,'passwordupdate']);
});

Route::middleware(['auth', 'warga'])->group(function () { 
    Route::get('/user',[DashboardUserController::class, 'index'])->name('dashboard-warga'); 
    Route::get('/user/profile', [DashboardUserController::class, 'profile'])->name('user.profile');
    Route::get('/user/settings', [DashboardUserController::class, 'settings'])->name('user.settings');
    Route::get('/user/profile/updatepassword', [DashboardUserController::class,'passwordedit'])->name('password.edit');
    Route::put('/user/profile/updatepassword', [DashboardUserController::class,'passwordupdate']);
    Route::get('/user/keluhan/checkSlug', [UserKeluhanController::class, 'checkSlug']);
    Route::resource('/user/keluhan', UserKeluhanController::class);
    Route::get('/user/diskusi/checkSlugDiskusi', [UserDiskusiController::class, 'checkSlugDiskusi']);
    Route::resource('/user/diskusi', UserDiskusiController::class);
    Route::resource('voting', 'VotingController');
    Route::put('/user/{id}/pilih','VotingController@choice')->name('users.pilih');
    Route::resource('/penilaian', TopicEvaluationController::class);
    Route::get('/penilaian/{id}', [TopicEvaluationController::class, 'show'])->name('penilaian.show');
    Route::get('/result', [TopicEvaluationController::class, 'result'])->name('result');
    Route::post('rating-penilaian/{id}/rate', [TopicEvaluationController::class, 'ratingstore'])->name('rating.store');
    Route::resource('/agenda', AgendaController::class);
});


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
