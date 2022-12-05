<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\Post;
use App\Http\Controllers\Admin\Profile;
use App\Http\Controllers\Admin\Blogs;
  
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
  
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('addpost', [Post::class, 'index'])->name('addpost'); 
Route::post('savepost', [Post::class, 'savepost'])->name('savepost'); 
Route::get('postlist', [Post::class, 'postlist'])->name('postlist'); 
Route::get('post_delete/{id}', [Post::class,'post_delete']);
Route::get('post_edit/{id}', [Post::class,'post_edit']);
Route::post('postupdate', [Post::class, 'postupdate'])->name('postupdate'); 
Route::get('edit_profile/{id}', [Profile::class,'edit_profile']);
Route::post('profileupdate', [Profile::class, 'profileupdate'])->name('profileupdate'); 
Route::get('allpostlist', [Post::class, 'allpostlist'])->name('allpostlist'); 
Route::get('disapproved/{id}', [Post::class,'disapproved']);
Route::get('approved/{id}', [Post::class,'approved']);
Route::get('allblogs', [Blogs::class, 'allblogs'])->name('allblogs'); 
Route::get('dislike/{id}', [Blogs::class,'dislike']);
Route::get('like/{id}', [Blogs::class,'like']);
Route::post('blogform', [Blogs::class, 'blogform'])->name('blogform'); 
Route::post('addcomment', [Blogs::class, 'addcomment'])->name('addcomment'); 
Route::get('alllike', [Blogs::class, 'alllike'])->name('alllike'); 
Route::get('mybloglikes', [Blogs::class, 'mybloglikes'])->name('mybloglikes'); 
Route::get('allcomments', [Blogs::class, 'allcomments'])->name('allcomments'); 
Route::get('mycomments', [Blogs::class, 'mycomments'])->name('mycomments');
Route::get('showcomments/{id}', [Blogs::class,'showcomments']);





