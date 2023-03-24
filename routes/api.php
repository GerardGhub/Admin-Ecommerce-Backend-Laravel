<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ForgetController;





// Register Routes 
Route::post('/login', [AuthController::class, 'Login']);

Route::post('/register', [AuthController::class, 'Register']);

// Forget Password Routes 
Route::post('/forgetpassword', [ForgetController::class, 'ForgetPassword']);




//Get Visitor
Route::get('/getvisitor', [VisitorController::class, 'GetVisitorDetails']);

//Site Info
Route::post('/postcontact', [ContactController::class, 'PostContactDetails']);

//Site Info Route
Route::get('/allsiteinfo', [SiteInfoController::class, 'AllSiteinfo']);
