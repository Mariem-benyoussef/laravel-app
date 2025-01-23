<?php

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


// Routes accessibles uniquement aux utilisateurs authentifiés (avec le rôle spécifié)
Route::middleware(['auth:sanctum', 'role:ADMIN'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index']); // Liste des tâches pour l'admin
    Route::post('/tasks', [TaskController::class, 'store']); // Créer une nouvelle tâche (admin)
    Route::put('/task/{id}', [TaskController::class, 'update']); // Modifier une tâche (admin)
    Route::delete('/task/{id}', [TaskController::class, 'destroy']); // Supprimer une tâche (admin)
});

// Routes accessibles à tous les utilisateurs authentifiés
Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/tasks', [TaskController::class, 'index']); // Liste des tâches
    Route::get('/task/{id}', [TaskController::class, 'show']); // Voir une tâche
});

Route::apiResource('tasks', TaskController::class);
