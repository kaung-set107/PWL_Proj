<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\PageController;

Route::group(['middleware'=>'ShareData'],function(){
        Route::get('/',[ProjectController::class,'index']);
Route::get('/project',[ProjectController::class,'showprojects']);
Route::get('/experience',[ProjectController::class,'exp']);
Route::get('/education',[ProjectController::class,'edu']);
Route::get('/skill',[ProjectController::class,'skill']);
Route::get('/about',[ProjectController::class,'about']);
Route::get('/contact',[ProjectController::class,'contact']);
Route::post('/contact',[ProjectController::class,'postcontact']);
Route::get('/detail/{id}',[ProjectController::class,'detail']);

Route::post('/comment',[CommentController::class,'postcomment']);
Route::get('/commentdelete/{id}',[CommentController::class,'commentdelete']);

Route::get('/language/{slug}',[ProjectController::class,'projectByLanguage']);
});
//for admin login
Route::get('/admin/login',[AuthController::class,'showlogin']);
Route::post('/admin/login',[AuthController::class,'postlogin']);

//for admin work
Route::group(['middleware'=>'Admin','prefix'=>'admin'],function(){

    //dashboard
    Route::get('/',[PageController::class,'dashboard'])->name('admin.dashboard');

    //for create blog
    Route::get('/create',[PageController::class,'showcreate']);
    Route::post('/create',[PageController::class,'postcreate']);

    //show blogs for edit and delete
    Route::get('/show',[PageController::class,'blogshow']);

    //contact
    Route::get('/contact',[PageController::class,'contact']);

    //for update page
    Route::get('/update/{id}',[PageController::class,'showupdate']);
    Route::post('/update/{id}',[PageController::class,'postupdate']);

    //delete post with image
    Route::get('/delete/{id}',[PageController::class,'delete']);

    //contact delete
    Route::get('/contactdelete/{id}',[PageController::class,'contactdelete']);

    //recommend letter

    // Route::get('/recommend',[PageController::class,'recommend']);

    //admin recdetail
    Route::get('/detail/{id}',[PageController::class,'detail']);

    //admin logout
    Route::get('/logout',[AuthController::class,'logout']);
});