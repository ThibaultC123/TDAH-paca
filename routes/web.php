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

Route::get('/', function () {
    return view('home');
});

Route::get('/home', ['uses' => 'HomeController@index', 'as' => 'accueil']);

Route::get('/calendar', ['uses' => 'EventsController@getCalendrier', 'as' => 'calendar']);
Route::get('/journeesMediterraneennes', ['uses' => 'EventsController@getJM', 'as' => 'JM']);
Route::get('/conferences', ['uses' => 'EventsController@getConferences', 'as' => 'conferences']);
Route::get('/congres', ['uses' => 'EventsController@getCongres', 'as' => 'congres']);
Route::get('/ateliers', ['uses' => 'EventsController@getAteliers', 'as' => 'ateliers']);

Route::get('/parents', ['uses' => 'TDAHController@getParents', 'as' => 'parents']);
Route::get('/profs', ['uses' => 'TDAHController@getProfs', 'as' => 'profs']);

Route::get('/presse', ['uses' => 'PublicationsController@getPresse', 'as'=> 'presse']);
Route::get('/scientifiques', ['uses' => 'PublicationsController@getScientifiques', 'as'=> 'scientifiques']);
Route::get('/posters', ['uses' => 'PublicationsController@getPosters', 'as'=> 'posters']);

Route::get('/membres', ['uses' => 'ContactController@getMembres', 'as' => 'membres']);
Route::get('/formulaire', ['uses' => 'ContactController@getFormulaire', 'as' => 'formulaire']);

Route::get('/dons', ['uses' => 'DonsController@getDons', 'as' => 'dons']);

Route::get('/mentionsLegales', ['uses' => 'HomeController@getMentions', 'as' => 'mentionsLegales']);
Route::get('/cgv', ['uses' => 'HomeController@getConditions', 'as' => 'cgv']);

// --------------------- //
// Routes de la boutique //
// --------------------- //

Route::resource('boutique', 'ProductController');

Route::get('/', ['uses' => 'ProductController@index', 'as' => 'product.index']);

Route::get('/index', ['uses' => 'ProductController@index', 'as' =>'index']);

// Route::get('/add-to-cart', ['uses' => 'ProductController@getAddToCart', 'as' => 'addCart']); //->where('n', '[0-9]+');
// Route::get('addToCart', 'ProductController@getAddToCart');
Route::get('addToCart/{id}', ['uses' => 'ProductController@getAddToCart', 'as' => 'addToCart']);
Route::get('/remove/{id}', ['uses' => 'ProductController@getRemoveItem', 'as' => 'product.remove']);

Route::get('/cart', ['uses' => 'ProductController@getCart', 'as' => 'shoppingCart'])->where('n', '[0-9]');

Route::get('/paypalCheckout', ['uses' => 'ProductController@getPaypalCheckout', 'as' => 'checkout']);

Route::post('/paypalCheckout', ['uses' => 'ProductController@postPaypalCheckout', 'as' => 'checkout']);

// ------------------------- //
// Routes d'authentification //
// ------------------------- //

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );

Route::get('/home', 'HomeController@index')->name('home');