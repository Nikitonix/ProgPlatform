<?php

use App\Http\Controllers\Main\Courses\ExercisesController;
use App\Http\Controllers\Main\Courses\LessonController;
use App\Http\Controllers\Main\Documentation\DocumentationsController;
use App\Http\Controllers\Main\Documentation\ChapterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', 'HomeController')->name('main.home');

//Маршруты для аутентифицированных пользователей
Route::group(['namespace' => 'Main', 'middleware' => 'auth'], function () {

    Route::group(['namespace' => 'Courses', 'prefix' => 'courses'], function () {
        Route::get('/categories', 'IndexController')->name('main.courses.index');
        Route::get('{category}', [ExercisesController::class, 'showExercises'])->name('main.courses.exercises');
        Route::get('category/{exercise}/lesson', [LessonController::class, 'showLesson'])->name('main.courses.lesson');
        Route::post('/', 'StoreController')->name('main.courses.store');
    });

    Route::group(['namespace' => 'Documentation', 'prefix' => 'documentation'], function () {
        Route::get('/categories', 'IndexController')->name('main.documentation.index');
        Route::get('{category}', [DocumentationsController::class, 'showDocuments'])->name('main.documentation.chapters');
        Route::get('category/{chapter}/content', [ChapterController::class, 'showChapter'])->name('main.documentation.chapter');
    });

    Route::group(['namespace' => 'Forum', 'prefix' => 'forum'], function () {
        Route::get('/categories', 'IndexController')->name('main.forum.index');
        Route::get('/create', 'CreateController')->name('main.forum.create');
        Route::get('{post}/show', 'ShowController')->name('main.forum.post');
        Route::post('/', 'StoreController')->name('main.forum.store');

        Route::group(['namespace' => 'Comment', 'prefix'=>'comments'], function (){
            Route::post('/', [\App\Http\Controllers\Main\Forum\Comment\StoreController::class, 'storeComment'])->name('post.comment.store');
        });
     });
    });

//Маршруты для админа
Route::group(['namespace'=>'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function ()
{
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.category.index');
        Route::get('/create', 'CreateController')->name('admin.category.create');
        Route::post('/', 'StoreController')->name('admin.category.store');
        Route::get('/{category}',   'ShowController')->name('admin.category.show');
        Route::get('/{category}/edit', 'EditController')->name('admin.category.edit');
        Route::patch('/{category}', 'UpdateController')->name('admin.category.update');
        Route::delete('/{category}', 'DeleteController')->name('admin.category.delete');
    });

    Route::group(['namespace' => 'Exercise', 'prefix' => 'exercise'], function () {
        Route::get('/', 'IndexController')->name('admin.exercise.index');
        Route::get('/create', 'CreateController')->name('admin.exercise.create');
        Route::post('/', 'StoreController')->name('admin.exercise.store');
        Route::get('/{exercise}', 'ShowController')->name('admin.exercise.show');
        Route::get('/{exercise}/edit', 'EditController')->name('admin.exercise.edit');
        Route::patch('/{exercise}', 'UpdateController')->name('admin.exercise.update');
        Route::delete('/{exercise}', 'DeleteController')->name('admin.exercise.delete');
    });

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });

    Route::group(['namespace' => 'Journal', 'prefix' => 'journal'], function () {
        Route::get('/', 'IndexController')->name('admin.journal.index');
        Route::get('/{category}/courses', 'ExercisesController')->name('admin.journal.exercises');
        Route::get('/category/{exercise}/students', 'StudentsController')->name('admin.journal.students');
        Route::get('/category/exercise/students/{student}', 'StudentController')->name('admin.journal.student');
        Route::patch('/category/exercise/students/{student}', 'GradeController')->name('admin.journal.grade');
    });

    Route::group(['namespace' => 'Documentation', 'prefix' => 'documentation'], function () {
        Route::get('/', 'IndexController')->name('admin.documentation.index');
        Route::get('/section', 'CreateController')->name('admin.documentation.create');
        Route::post('/', 'StoreController')->name('admin.documentation.store');
        Route::get('/{section}', 'ShowController')->name('admin.documentation.show');
        Route::get('/{section}/edit', 'EditController')->name('admin.documentation.edit');
        Route::patch('/{section}', 'UpdateController')->name('admin.documentation.update');
        Route::delete('/{section}', 'DeleteController')->name('admin.documentation.delete');
    });
});

Auth::routes();


