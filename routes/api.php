<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ForgetController;
use App\Http\Controllers\User\ResetController;
use App\Http\Controllers\User\UserController;

use App\Http\Controllers\Admin\CategoryController;


// Register Routes 
Route::post('/login', [AuthController::class, 'Login']);

Route::post('/register', [AuthController::class, 'Register']);

// Forget Password Routes 
Route::post('/forgetpassword', [ForgetController::class, 'ForgetPassword']);

//Reset Password Routes
Route::post('/resetpassword', [ResetController::class, 'ResetPassword']);

//Current User Route
Route::get('/user', [UserController::class, 'User'])->middleware('auth:api');





//Get Visitor
Route::get('/getvisitor', [VisitorController::class, 'GetVisitorDetails']);

//Site Info
Route::post('/postcontact', [ContactController::class, 'PostContactDetails']);

//Site Info Route
Route::get('/allsiteinfo', [SiteInfoController::class, 'AllSiteinfo']);


//All Category
Route::get('/allcategory', [CategoryController::class, 'AllCategory']);