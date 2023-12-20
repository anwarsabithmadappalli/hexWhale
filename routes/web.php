<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\MiddleWare\CheckUserInSession;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[AuthController::class,'register']);
Route::post('/doRegister', [AuthController::class, 'doRegister']);

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/doLogin', [AuthController::class, 'doLogin']);

Route::middleware(['checkUserInSession'])->group(function () {
    Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');

    Route::group(['prefix' => 'task'], function () {
        Route::get('/create', [TaskController::class,'taskCreate'])->name('task.create');
        Route::post('/save', [TaskController::class,'taskSave'])->name('task.save');
        Route::get('/list', [TaskController::class,'taskList'])->name('task.list');
        Route::get('/view{id}', [TaskController::class,'taskView'])->name('task.view');
        Route::get('/edit{id}', [TaskController::class,'taskEdit'])->name('task.edit');
        Route::post('/update{id}', [TaskController::class,'taskUpdate'])->name('task.update');
        Route::get('/delete{id}', [TaskController::class,'taskDelete'])->name('task.delete');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('/create', [TaskController::class,'categoryCreate'])->name('category.create');
        Route::post('/save', [TaskController::class,'categorySave'])->name('category.save');
        Route::get('/list', [TaskController::class,'categoryList'])->name('category.list');
        Route::get('/edit{id}', [TaskController::class,'categoryEdit'])->name('category.edit');
        Route::post('/update{id}', [TaskController::class,'categoryUpdate'])->name('category.update');
        Route::get('/delete{id}', [TaskController::class,'categoryDelete'])->name('category.delete');

    });

    Route::get('signOut', function(){
        session()->flush();
        return redirect('/login');
    })->name('signOut');
});


