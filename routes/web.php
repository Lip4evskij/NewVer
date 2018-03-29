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

//Route::get('/', function () {
//    return view('default');
//});
Route::get('/','Frontend@get_all_posts');
Route::resource('admin-panel','DashPosts');
Route::resource('comments','DashComments');




Route::get('/articles/{slug}','BlogController@Show')->name('articleShow');
Route::get('category/{sport}','BlogController@Sport')->name('ShowSport');
Route::post('category/{culture}','BlogController@Culture')->name('ShowCulture');
Route::get('category/{policy}','BlogController@Policy')->name('ShowPolicy');
Route::get('contacts/','BlogController@Contacts')->name('Contacts');
Route::get('about/','BlogController@About')->name('ContactsController');
Route::get('tag/{tag_en_name}','BlogController@Tags')->name('ShowTags');
Auth::routes();
Route::post('send-mail','MailSetting@send_form');
Route::get('/home', 'HomeController@index')->name('home');
