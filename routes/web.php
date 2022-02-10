<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

use Illuminate\Auth\Events\PasswordReset;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

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
//     return view('welcome');
// });

Route::get('/',  [App\Http\Controllers\LibrosController::class, 'index']);

// Route::fallback( [App\Http\Controllers\LibrosController::class, 'index']);

Route::get('libros', [App\Http\Controllers\LibrosController::class, 'index'])->name('libros.index');
Route::get('libros/create', [App\Http\Controllers\LibrosController::class, 'create'])->name('libros.create');
Route::post('libros', [App\Http\Controllers\LibrosController::class, 'store'])->name('libros.store');
Route::get('libros', [App\Http\Controllers\LibrosController::class, 'show'])->name('libros.show');
Route::get('libros/{id}/edit', [App\Http\Controllers\LibrosController::class, 'edit'])->name('libros.edit');
Route::put('libros/{id}', [App\Http\Controllers\LibrosController::class, 'update'])->name('libros.update');
Route::delete('libros/{id}/delete', [App\Http\Controllers\LibrosController::class, 'delete'])->name('libros.delete');



// Route::resource('libros', [App\Http\Controllers\LibrosController::class] )->names('libros');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//////// 

Route::get('/passwords/reset', function () {
    return view('auth.passwords.reset');
})->middleware('guest')->name('passwords.request');


Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');


Route::get('/reset-password/{token}', function ($token) {
    return view('auth.reset-password', ['token' => $token]);
})->middleware('guest')->name('password.reset');


Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status', __($status))
                : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');



