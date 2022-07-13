<?php

use Illuminate\Support\Facades\Route;

Auth::routes();


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
Route::resource('home', 'HomeController');
Route::get("/",[\App\Http\Controllers\HomeController::class,"index"]);

#logout
Route::get("/logout",[\App\Http\Controllers\Auth\LoginController::class,"logout"]);

#freeCourse
Route::resource('freeCourse', 'Course\FreeController' );
// Route::get('/freeCourse',[\App\Http\Controllers\Course\FreeController::class,'index']);

#course
Route::resource('courses', 'Course\CourseController' );
Route::get("/viewCourse/{id}",[\App\Http\Controllers\Course\CourseController::class,"show"]);

#service
Route::resource('service', 'Service\ServiceController');

#class
Route::get("/classes",[\App\Http\Controllers\Admin\ClassController::class,"showClass"]);
Route::get("/viewClass/{id}",[\App\Http\Controllers\Admin\ClassController::class,"show"]);

#ask
Route::post("/ask",[\App\Http\Controllers\Ask\AskController::class,"store"]);
#comment
Route::post("/userComment",[\App\Http\Controllers\Comment\CommentController::class,"store"]);

Route::group(array("prefix"=>"admin","namespace"=>"admin","middleware"=>"admin"),function () {
    #admin
        Route::get("/dashboard",[\App\Http\Controllers\Admin\AdminController::class,"index"]);

    #editFree
        Route::get('/editFree/{id}',[\App\Http\Controllers\Course\FreeController::class,"edit"]);
        Route::post('/editFree/{id}',[\App\Http\Controllers\Course\FreeController::class,"update"]);

    #editPost
        Route::get("/editCourse/{id}",[\App\Http\Controllers\Admin\PostController::class,"edit"]);
        Route::post("/editCourse/{id}",[\App\Http\Controllers\Admin\PostController::class,"update"]);

    #deletePost
        Route::get("/deleteCourse/{id}",[\App\Http\Controllers\Admin\PostController::class,"delete"]);

    #deleteFree
         Route::get('/deleteFree/{id}',[\App\Http\Controllers\Course\FreeController::class,"delete"]);

    #createPost
        Route::get("/createPost",[\App\Http\Controllers\Admin\PostController::class,"index"]);
        Route::post("/createPost",[\App\Http\Controllers\Admin\PostController::class,"createPost"]);

    #createRole
        Route::get("/createRole",[\App\Http\Controllers\Admin\RoleController::class,"index"]);
        Route::post("/role",[\App\Http\Controllers\Admin\RoleController::class,"store"]);

    #createFree
        Route::get("/createFree",[\App\Http\Controllers\Course\FreeController::class,"create"]);
        Route::post('/createFree',[\App\Http\Controllers\Course\FreeController::class,"created"]);
    #createClass
        Route::get("/createClass",[\App\Http\Controllers\Admin\ClassController::class,"index"]);
        Route::post("/createClass",[\App\Http\Controllers\Admin\ClassController::class,"create"]);

    #user
        Route::get("editUser/{id}",[\App\Http\Controllers\User\UserController::class,"edit"]);
        Route::post("editUser/{id}",[\App\Http\Controllers\User\UserController::class,"update"]);
        Route::get('deleteUser/{id}',[\App\Http\Controllers\User\UserController::class,"destroy"]);
    #deleteRole
        Route::get("/deleteRole/{id}",[\App\Http\Controllers\Admin\RoleController::class,"destroy"]);

    #editClass
        Route::get("/editClass/{id}",[\App\Http\Controllers\Admin\ClassController::class,"edit"]);
        Route::post("/editClass/{id}",[\App\Http\Controllers\Admin\ClassController::class,"update"]);

    #deleteClass
        Route::get("deleteClass/{id}",[\App\Http\Controllers\Admin\ClassController::class,"destroy"]);
});




