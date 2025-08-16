<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;

Route::get('/', function () {
    $user = Auth::user();
    return view('dashboard', ['user' => $user]);
})->middleware('auth');

Route::get('/berita', function () {
    return "ini halaman berita";
});
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'ViewLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});
Route::post('/logout', [AuthController::class, 'Logout'])->name('logout');
Route::post('/login/submit', [AuthController::class, 'Login']);
Route::get('/register', [AuthController::class, 'ViewRegister'])->name('register');
Route::post('/register/submit', [AuthController::class, 'Register']);
Route::get('/mengelola-barang', [BarangController::class, 'mengelola_barang'])->middleware('auth');
Route::get('/tambah-barang', [BarangController::class, 'tambah_barang'])->middleware('auth');