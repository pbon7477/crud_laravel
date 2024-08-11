<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin',[AdminController::class,'index'])
             ->name('admin.index')
             ->middleware('auth');


Route::get('admin/usuarios',[UsuarioController::class, 'index'])
            ->name('admin.usuarios.index')
            ->middleware('auth');

Route::get('admin/usuarios/create',[UsuarioController::class, 'create'])->name('admin.usuarios.create')->middleware('auth');

Route::post('/admin/usuarios',[UsuarioController::class,'store'])
            ->name('admin.usuarios.store')
            ->middleware('auth');

Route::get('/admin/usuarios/{id}/show', [UsuarioController::class,'show'])
            ->name('admin.usuarios.show')
            ->middleware('auth');

Route::get('/admin/usuarios/{id}/edit', [UsuarioController::class,'edit'])
            ->name('admin.usuarios.edit')
            ->middleware('auth');            

Route::put('/admin/usuarios/{id}',[UsuarioController::class,'update'])
            ->name('admin.usuarios.update')
            ->middleware('auth');

Route::get('/admin/usuarios/{id}',[UsuarioController::class,'delete'])
            ->name('admin.usuarios.delete')
            ->middleware('auth');

Route::delete('/admin/usuarios/{id}/destroy', [UsuarioController::class, 'destroy'])
            ->name('admin.usuarios.destroy')
            ->middleware('auth');            
 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
