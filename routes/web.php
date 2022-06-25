<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\MusicController;
use GuzzleHttp\Cookie\SessionCookieJar;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CookieController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\LiveSearch;
// use App\Storage;

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



// Main Page
Route::get('/', [MainController::class, 'index' ])->name('index');
Route::get('/home', [MainController::class, 'home'])->name('home')->middleware();
Route::get('/news', [MainController::class, 'news'])->name('news');
Route::get('/artist',[MainController::class, 'artist'])->name('artist');
Route::get('/album', [MainController::class,'album'])->name('album');
Route::get('/about', [MainController::class, 'about'])->name('about');

Route::get('/library', [MainController::class, 'lib']);
Route::get('/topweek', [MainController::class, 'top']);
// Route::get('/login', [MainController::class, 'login'])->name('login');
// Route::get('/signup', [MainController::class, 'signup'])->name('signup');
// Feedbacks
Route::post('/sendfeedback', [MainController::class, 'feedback']);

// User Profile
Route::get('/userprofile', [MainController::class, 'uprofile'])->name('userprofile');

// Update Profile
Route::post('/updateprofile/{id}', [MainController::class, 'updateprofile']);

// Live Search 
// Route::get('/live_search', [LiveSearch::class, 'index'])
Route::get('/live_search', [LiveSearch::class, 'action']);

Route::get('/download/{id}', [DownloadController::class, 'index']);

// Artist Page
Route::get('/toartist',[ArtistController::class, 'index'])->name('tartist');
Route::get('/artistsign',[ArtistController::class, 'sign'])->name('asign');
Route::get('/artistlog',[ArtistController::class, 'log'])->name('alogin');

Route::post('/asignup',[ArtistController::class, 'asignup']);
Route::post('/alogin', [ArtistController::class, 'alogin']);

Route::get('/artprofile',[ArtistController::class, 'profile'])->name('artprofile')->middleware();
Route::get('/artupload', [ArtistController::class, 'uploadmusicpage'])->name('uploadmus')->middleware();

Route::post('/uploadmusic',[ArtistController::class, 'uploadmusicfun']);
Route::delete('/deletemusic/{id}',[ArtistController::class, 'deletemusicfun']);

Route::get('/viewmusic',[ArtistController::class, 'viewmusicfun']);
Route::get('/viewalbum',[ArtistController::class, 'viewalbumfun']);

Route::get('/updateart', [ArtistController::class, 'updateartist']);

Route::get('/showtracks/{id}',[MusicController::class, 'showtracks']);

// Update Artist Profile
Route::post('updateartprofile/{id}', [ArtistController::class, 'updateprofile']);




// Admin Login
Route::get('/admin/login', [AdminController::class, 'login']);
Route::post('/admin/login', [AdminController::class, 'alogin']);
Route::get('/admin/signup', [AdminController::class, 'signup']);
Route::post('/admin/signup', [AdminController::class, 'asignup']);
Route::get('/postnews', [AdminController::class, 'pnews']);

// Admiin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/dashboard', [AdminController::class, 'dash']);
Route::get('/admin/user', [AdminController::class, 'user']);
Route::get('/admin/artist',[AdminController::class, 'artist']);
Route::get('/admin/music', [AdminController::class, 'music']);
Route::get('admin/feedback', [AdminController::class, 'feedback']);

// Admin Delete
Route::delete('/admin/deleteuser/{id}', [AdminController::class, 'deleteuser'])->name('deleteuser');
Route::delete('/admin/deleteartist/{id}', [AdminController::class, 'deleteartist']);
Route::delete('/adeletemusic/{id}', [AdminController::class, 'deletemusic']);
Route::delete('/feedback/delete/{id}', [AdminController::class, 'deletefeed']);

// Admin Signout
Route::post('/admin/signout/', [AdminController::class, 'signout']);

// Upload News
Route::post('/uploadnews', [AdminController::class, 'uploadnews']);

// Muisc
Route::get('/mus', [MusicController::class, 'musics']);
Route::get('/fetchmusic', [MusicController::class, 'fetchmusic']);
Route::get('/fetchsingle/5', [MusicController::class, 'fetchsingle']);
Route::post('/likemusic/{id}/{id2}', [MusicController::class, 'likemusic'])->name('likem');
Route::post('/followartist/{id}', [MusicController::class, 'followartist'])->name('folowart');
Route::get('/playmusic', [MusicController::class, 'playmusic']);

Route::post('/liked_music', [MusicController::class, 'sendlike'])->name('likemus');
Route::get('/listen_music/{id}', [MusicController::class, 'listen']);

// Sessions 
Route::get('session/get',[SessionController::class, 'accessSessionData']);
Route::get('session/set',[SessionController::class, 'storeSessionData']);
Route::get('session/remove',[SessionController::class, 'deleteSessionData'])->name('artistendsession');
Route::get('session/all',[SessionController::class, 'sessionall']);
Route::get('/sessionart', [SessionController::class, 'sessionart']);

Route::get('/test', function() {
    return view('other.test');
});
Route::get('/guest',function(){
    return view('layouts.guest');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
