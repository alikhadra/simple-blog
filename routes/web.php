<?php

use App\Models\post;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentsController;
use App\Mail\DiscountOffer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('posts', PostController::class);
Route::post('/posts/{post}/comments', [CommentsController::class, 'store']);
Route::post('mail/', function() {
   $email = request()->validate([
        'email' => 'required|email'
    ]);
    Mail::to($email)->send(new DiscountOffer());
    return back();
});

