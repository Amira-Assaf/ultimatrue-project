<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistributorController;
use App\Http\Controllers\lookupController; 
// use App\Http\Controllers\adminDistributorController;

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

Route::get('admindistributors', function () {
    return view('admin.all-distributors');
});

Route::get('/AdminDistributor/fromRequest',[adminDistributorController::class, 'fromRequest'])->name("Distributor.fromRequest"); 
Route::get('/admin/distributors','App\Http\Controllers\adminDistributorController@index');


Route::get('admin-add-distributor', function () {
    return view('admin.add-distributor');
});

Route::get('admin/edit-distributor', function () {
    return view('admin.edit-distributor');
});

Route::get('/Distributor/fromRequest',[DistributorController::class, 'fromRequest'])->name("Distributor.fromRequest"); 

Route::get('/lookup/getCitiesByCountryId/{countryId}',[lookupController::class, 'getCitiesByCountryId']); 
// ---------------------------get All distruboter  
Route::get('Distributor/getAllDistributorByproductId/{ProductId}',[DistributorController::class, 'getAllDistributorByproductId']); 

// ---------------------------All distruboter User Design
Route::resource('Distributor', DistributorController::class);








