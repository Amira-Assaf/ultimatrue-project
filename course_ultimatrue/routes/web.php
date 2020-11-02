<?php

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

Route::get('/', function () {
    return view('welcome');
    // return redirect ("login");
});
Route::get('/index',"test@index");
Route::get('/allbranches',"BrancheController@allbranches");
Route::get('/form',"BrancheController@form");
Route::post('/form',"BrancheController@add");
Route::post('/test',"test@test");
Route::get('/brance/delete/{id}',"BrancheController@delete");
/*
|--------------------------------------------------------------------------
| Resourse Web Routes
|--------------------------------------------------------------------------
*/
Route::resource('branch', 'BranchResController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//override on logout
Route::get('/logout', function(){
    return redirect ("welcome");
});

/*
|--------------------------------------------------------------------------
| Best way to write Route
|--------------------------------------------------------------------------
*/
/*group => de hatf7 el routes bas ell fe el folder elly maktop esmo fel prefix */
/* momken aktep namespace badl prefix law 3amlt folder gwa el controller el namespace hwa esm el folder */
/* prefix => da esm el elly abl 32sm el route ya3ny admin/all */ 
/* middleware => de 3ashan mayfta7sh ay route ella la yokon 3aml login welaw 7awel ye redirect 3ala login page */ 
Route::group(['prefix' => '', 'middleware' => ['auth']], function(){
        Route::get('all','BrancheController@allbranches');
    });

/*
|--------------------------------------------------------------------------
| Ultimatrue Routes
|--------------------------------------------------------------------------
*/

//-------------------------mcamara

Route::group(
[
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function(){ 
 /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/

    // ---------------------------design routes

     Route::get('/Distributor/fromRequest',[DistributorController::class, 'fromRequest'])->name("Distributor.fromRequest"); 

     Route::get('/lookup/getCitiesByCountryId/{countryId}','lookupController@getCitiesByCountryId'); 
    // ---------------------------get All distruboter  
     

    
    Route::get('/Distributor/getAllDistributorByFilter','DistributorController@getAllDistributorByFilter'); 

    Route::resource('Distributor', 'DistributorController');


 

    // ---------------------------All distruboter User Design
    //  Route::resource('Distributor', DistributorController::class);

    //-------------------------Admin Distributor
     Route::resource('/admin/distributors', adminDistributorController::class);

     Route::get('admin-add-distributor', function () {
            return view('admin.add-distributor');
        });
        
     Route::get('admin/edit-distributor', function () {
            return view('admin.edit-distributor');
        });

    //-------------------------Users Routes
     Route::resource('AdminUser', UserController::class);

});