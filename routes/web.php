<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\minicontrol;
use App\Http\Controllers\stControl;
use App\Http\Controllers\tControl;

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
// admin 
Route::get('/',[minicontrol::class,'index']);
// Route::get('/adlogin',[minicontrol::class,'login']);
Route::get('/about',[minicontrol::class,'about']);
Route::get('/contact',[minicontrol::class,'contact']);
Route::get('/adhome',[minicontrol::class,'adhome']);
Route::get('/apptchr',[minicontrol::class,'apptchr']);
Route::get('/appsyllabus',[minicontrol::class,'appsyllabus']);
Route::get('/appt',[minicontrol::class,'apptimetable']);
Route::get('/appresults',[minicontrol::class,'appresults']);
Route::get('/vfeed',[minicontrol::class,'vfeed']);
Route::get('/approveres/{id}',[minicontrol::class,'ares']);
Route::get('/apprsyl/{id}',[minicontrol::class,'approvesyl']);
Route::get('/approvetym/{id}',[minicontrol::class,'apptym']);
Route::get('/approvet/{id}',[minicontrol::class,'approvetchr']);
Route::get('/logout',[minicontrol::class,'logout']);

// student 
Route::get('/registration',[stControl::class,'register']);
Route::post('/rval',[stControl::class,'rval']);
Route::get('/login',[stControl::class,'login']);
Route::post('/log',[stControl::class,'logaction']);
// sthome page 
Route::get('/sthome',[stControl::class,'sthome']);
Route::get('/feed',[stControl::class,'feed']);
Route::post('/fb',[stControl::class,'fb']);
// view 
Route::get('/vsyllabus',[stControl::class,'vsyllabus']);
Route::get('/vnotes',[stControl::class,'vnotes']);
Route::get('/vtimetable',[stControl::class,'vtimetable']);
Route::get('/vresults',[stControl::class,'vresults']);

// teacher 
Route::get('/tregister',[tControl::class,'tregister']);
Route::post('/rvalt',[tControl::class,'rvalt']);
Route::get('/tlogin',[tControl::class,'login']);
// thome page after login
Route::get('/thome',[tControl::class,'thome']);
Route::post('/thome',[tControl::class,'logaction']);
// upload syllabus
Route::get('/upsyllabus',[tControl::class,'upsyllabus']);
Route::post('/ups',[tControl::class,'upload']);
//upload notes
Route::get('/upnotes',[tControl::class,'upnotes']);
Route::post('/upn',[tControl::class,'uploadnotes']);
//upload timetable page
Route::get('/uptimetable',[tControl::class,'uptimetable']);
Route::post('/upt',[tControl::class,'uptime']);
//upload results page
Route::get('/upresults',[tControl::class,'upresults']);
Route::post('/upr',[tControl::class,'upres']);
// view feedback page 
Route::get('/view',[tControl::class,'view']);
