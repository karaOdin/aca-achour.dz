<?php
use App\Activity;
use App\Product;
use App\Quote;
use App\Mail\ContactMail;
use App\Mail\ActivityMail;
use App\Mail\PromotionMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;




Route::get('/', function () {
	$homeSliders = DB::table('home_sliders')
				   ->where('show_slider','=','On')
				   ->get();
	
	

	$oneslider = DB::table('home_sliders')
				->first();
    $products = Product::where('newest','=','on')->get();
    
    $quotes = Quote::all();

    return view('welcome',compact('oneslider','activities','products','projects','homeSliders','quotes'));

});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', function(Request $request) {
   Mail::send(new ContactMail($request));
    $notification = array(
                                'message' =>'Votre email est envoyé avec succès' ,
                                'alert-type' =>'success' 
                             );
    return redirect()->back()->with($notification);
});
//products routes

Route::get('/products','ProductController@index')->name('products.index');
Route::get('/products/{slug}','ProductController@show')->name('products.show');

Route::post('/products/{slug}', function(Request $request) {
    Mail::send(new ActivityMail($request));
    $notificationPro = array(
                                'messagePro' =>'Votre demande est envoyé avec succès' ,
                                'alert-type' =>'success' 
                             );
    return redirect()->back()->with($notificationPro);
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');


//Projetcts

Route::get('/projects', 'ProjectController@index')->name('projects.index');
Route::get('/projects/{slug}', 'ProjectController@show')->name('projects.show');

Route::post('/projects/{slug}', function(Request $request) {
    Mail::send(new PromotionMail($request));
    $notification = array(
                                'message' =>'Votre demande est envoyé avec succès' ,
                                'alert-type' =>'success' 
                             );
    return redirect()->back()->with($notification);
});
