<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CodeController;
use App\Http\Controllers\Admin\EmailController;
use App\Http\Controllers\Admin\BackupController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\Admin\CurrncyController;
use App\Http\Controllers\Admin\OptionsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\EndVisitController;
use App\Http\Controllers\Admin\NationalController;
use App\Http\Controllers\Admin\AddClinicController;
use App\Http\Controllers\Admin\AddDoctorController;
use App\Http\Controllers\Admin\AddServiceController;
use App\Http\Controllers\Admin\DictionaryController;
use App\Http\Controllers\Admin\CommunicateController;
use App\Http\Controllers\Admin\DataGeneralController;
use App\Http\Controllers\Admin\VaccinationsControler;

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
    return view('admin.dashboard');
});

Route::resource('national', NationalController::class)->only([
    'index','create', 'store', 'update', 'destroy'
]);
Route::resource('visitor', VisitorController::class)->only([
    'index', 'show','create', 'store', 'update', 'destroy'
]);
Route::resource('endvisit', EndVisitController::class)->only([
    'index', 'show','create', 'store', 'update', 'destroy'
]);
Route::resource('report', ReportController::class)->only([
    'index', 'show','create', 'store', 'update', 'destroy'
]);

Route::resources([
    // 'national', NationalController::class,
    // 'visitor', VisitorController::class,
    // 'endvisit', EndVisitController::class,
    // 'report', ReportController::class,



    'email'       => SettingController::class,
    'options'     => OptionsController::class,
    'vaccinations'=> VaccinationsControler::class,
    'communicate' => CommunicateController::class,
    'currncy'     => CurrncyController::class,
    'code'        => CodeController::class,
    'dictionary'  => DictionaryController::class,
    'backup'      => BackupController::class,
    /////
    'addservice' => AddServiceController::class,
    'addclinic'  => AddClinicController::class,
    'addDoctor'  => AddDoctorController::class,   
    ////
    'data'       => DataGeneralController::class,    
 
]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
