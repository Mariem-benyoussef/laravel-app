<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});


// Routes accessibles à tous les utilisateurs authentifiés
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index'])->name('tasks');;
    Route::get('/tasks/{id}', [TaskController::class, 'show']);
});


// Routes accessibles uniquement aux utilisateurs authentifiés (avec le rôle spécifié)
Route::middleware(['auth:sanctum', 'role:ADMIN'])->group(function () {
    Route::post('/tasks', [TaskController::class, 'store']); // Créer une nouvelle tâche (admin)
    Route::put('/tasks/{id}', [TaskController::class, 'update']); // Modifier une tâche (admin)
    Route::delete('/tasks/{id}', [TaskController::class, 'destroy']); // Supprimer une tâche (admin)
});

Route::middleware('auth:sanctum')->post('/logout', [AuthenticatedSessionController::class, 'destroy']);

// routes/api.php or routes/web.php
Route::get('sanctum/csrf-cookie', function () {
    return response()->json(['message' => 'CSRF cookie set']);
});


// Route::apiResource('tasks', TaskController::class);
