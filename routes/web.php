<?php
use App\Activity;
use App\Product;
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
	$activities = DB::table('activities')
				->where('activities.show_slider','=','on')
				->get();
	$oneprod = DB::table('products')
				->first();
    $products = Product::where('newest','=','on')->get();

    return view('welcome',compact('oneprod','activities','products'));

});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


//products routes

Route::get('/products','ProductController@index')->name('products.index');
Route::get('/products/{slug}','ProductController@show')->name('products.show');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Projetcts

Route::get('/projects', 'ProjectController@index')->name('projects.index');