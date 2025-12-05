<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;

Route::get('/asignaturas', [AsignaturaController::class, 'listar']);
Route::post('/asignaturas/crear', [AsignaturaController::class, 'crear']);
