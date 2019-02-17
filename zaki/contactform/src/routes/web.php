<?php

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

// MyVendor\contactform\src\routes\web.php

// use Illuminate\Http\Request;

// Route::get('contact', function(){
    // return view('contactform::index');
// });

// Route::post('contactRequest', function(Request $request){
		// dd($request->all());
// })->name('contactForm');

// MyVendor\contactform\src\routes\web.php
Route::group(['namespace' => 'zaki\Contactform\Http\Controllers', 'middleware' => ['web']], function(){
	Route::get('contact', 'ContactFormController@index');
	Route::post('contact', 'ContactFormController@sendMail')->name('contactForm');
});
?>