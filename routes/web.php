<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\UserHomeController;
use App\Http\Controllers\Admin\ContentsController;
use App\Http\Controllers\User\ContentController;
use App\Http\Controllers\Admin\AdminContentsController;
use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\CategoriesController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::middleware('auth','check_user:admin')
    ->namespace('Admin')
    ->prefix('admin')
    ->as('admin.')
    ->group(
        function () {
            Route::prefix('category')
                ->as('category.')
                ->group(function () {

                    Route::get('/', [CategoriesController::class, 'index'])->name('index');
                    Route::get("/create", [CategoriesController::class, 'create'])->name('create');
                    Route::post("/store", [CategoriesController::class, 'store'])->name('store');
                    Route::get("/{id}/edit", [CategoriesController::class, 'edit'])->name('edit');
                    Route::put("/{id}", [CategoriesController::class, 'update'])->name('update');
                    Route::delete("delete/{id}", [CategoriesController::class, 'destroy'])->name('delete');
                });

            Route::prefix('content')
                ->as('content.')
                ->group(
                    function () {
                        Route::get('/index', [ContentsController::class, 'index'])->name('index');
                        Route::get("/create", [ContentsController::class, 'create'])->name('create');
                        Route::post("/store", [ContentsController::class, 'store'])->name('store');
                        Route::get("/{id}/edit", [ContentsController::class, 'edit'])->name('edit');
                        Route::put("/{id}", [ContentsController::class, 'update'])->name('update');
                        Route::delete("/{id}", [ContentsController::class, 'destroy'])->name('delete');
                    }
                );

                Route::prefix('admin_content')
                ->as('admin_content.')
                ->group(
                    function () {
                        Route::get('/index', [AdminContentsController::class, 'index'])->name('index');
                        Route::get("/create", [AdminContentsController::class, 'create'])->name('create');
                        Route::post("/store", [AdminContentsController::class, 'store'])->name('store');
                        Route::get("/{id}/edit", [AdminContentsController::class, 'edit'])->name('edit');
                        Route::put("/{id}", [AdminContentsController::class, 'update'])->name('update');
                        Route::delete("/{id}", [AdminContentsController::class, 'destroy'])->name('delete');
                    }
                );


            Route::prefix('home')
                ->as('home.')
                ->group(
                    function () {
                        Route::get('/', [AdminHomeController::class, 'index']);
                    }
                );
        }
    );



// user panel route 

    Route::middleware('auth','check_user:user')
    ->namespace('User')
    ->prefix('user')
    ->as('user.')
    ->group(
        function () {
            

            Route::prefix('content')
                ->as('content.')
                ->group(
                    function () {
                        Route::get('/', [ContentController::class, 'index'])->name('index');
                        Route::get("/create", [ContentController::class, 'create'])->name('create');
                        Route::post("/store", [ContentController::class, 'store'])->name('store');
                        Route::get("/{id}/edit", [ContentController::class, 'edit'])->name('edit');
                        Route::put("/{id}", [ContentController::class, 'update'])->name('update');
                        Route::delete("/{id}", [ContentController::class, 'destroy'])->name('delete');
                    }
                );

            Route::prefix('home')
                ->as('home.')
                ->group(
                    function () {
                        Route::get('/', [UserHomeController::class, 'index']);
                    }
                );
        }
    );



Route::get('/index', [HomeController::class, 'index'])->name('home');
Route::get('/{id}/show', [HomeController::class, 'show'])->name('home.show');

require __DIR__ . '/auth.php';
