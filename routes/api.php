<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Get Visitor
Route::get('/getvisitor', [VisitorController::class, 'GetVisitorDetails']);

//Site Info
Route::post('/postcontact', [ContactController::class, 'PostContactDetails']);

//Site Info Route
Route::get('/allsiteinfo', [SiteInfoController::class, 'AllSiteinfo']);


