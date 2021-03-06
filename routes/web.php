<?php
use App\Http\Controllers\PharmController;
use App\Http\Controllers\Admin\PharmMedController;

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


Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/posts', 'PostController@index')->name('post');
Route::resource('post','PostController'); 


Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'admin'],function(){

    Route::get('dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::resource('slider','SliderController'); 
    Route::resource('pharm','PharmController')  ;
    Route::resource('medecine','MedecineController')  ;
    Route::resource('pharmMed','PharmMedController')  ;
    Route::resource('address','AddressController')  ;
    Route::resource('area','AreaController')  ;
    Route::resource('subarea','SubAreaController')  ;
    

});
Route::get('/jason-getSubarea','Homecontroller@getSubarea');
Route::post('/getpharm','Homecontroller@getpharm')->name('getpharm');

