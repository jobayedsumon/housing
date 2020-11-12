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

use Illuminate\Support\Facades\Route;

if(version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}

Route::get('/nav', function () {
   return view('layouts.default.navigation_new');
});

//Default Controller
Route::get('/', 'HomeController@index');
Route::post('/home/submit', 'HomeController@submit');
Route::get('/home/skin/{any?}', 'HomeController@getSkin');


Route::get('dashboard/import', 'DashboardController@getImport');
/* Auth & Profile */
Route::get('user/profile','UserController@getProfile');
Route::get('user/theme','UserController@getTheme');
Route::get('user/login','UserController@getLogin');
Route::get('user/register','UserController@getRegister');
Route::get('user/logout','UserController@getLogout');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/reset/{any?}','UserController@getReset');
Route::get('user/reminder','UserController@getReminder');
Route::get('user/activation','UserController@getActivation');
// Social Login
Route::get('user/socialize/{any?}','UserController@socialize');
Route::get('user/autosocialize/{any?}','UserController@autosocialize');
//
Route::post('user/signin','UserController@postSignin');
Route::post('user/login','UserController@postSigninMobile');
Route::post('user/signup','UserController@postSignupMobile');
Route::post('user/create','UserController@postCreate');
Route::post('user/saveprofile','UserController@postSaveprofile');
Route::post('user/savepassword','UserController@postSavepassword');
Route::post('user/doreset/{any?}','UserController@postDoreset');
Route::post('user/request','UserController@postRequest');

/* Posts & Blogs */
Route::get('posts','HomeController@posts');
Route::get('posts/category/{any}','HomeController@posts');
Route::get('posts/read/{any}','HomeController@read');
Route::post('posts/comment','HomeController@comment');
Route::get('posts/remove/{id?}/{id2?}/{id3?}','HomeController@remove');
// Start Routes for Notification
Route::resource('notification','NotificationController');
Route::get('home/load','HomeController@getLoad');
Route::get('home/lang/{any}','HomeController@getLang');

Route::get('/set_theme/{any}', 'HomeController@set_theme');

include('pages.php');


Route::resource('sximoapi','SximoapiController');
Route::resource('services/posts', 'Services\PostController');


// Routes for  all generated Module
include('module.php');
// Custom routes
$path = base_path().'/routes/custom/';
$lang = scandir($path);
foreach($lang as $value) {
	if($value === '.' || $value === '..') {continue;}
	include( 'custom/'. $value );

}
// End custom routes
Route::group(['middleware' => 'auth'], function () {
	Route::resource('dashboard','DashboardController');
});


Route::group(['namespace' => 'Sximo','middleware' => 'auth'], function () {
	// This is root for superadmin

		include('sximo.php');

});

Route::group(['namespace' => 'Core','middleware' => 'auth'], function () {
	include('core.php');
});


//VMSL Route
Route::get('loans/{any}','VmslController@loans');
Route::get('deposit-schemes/{any}','VmslController@deposits');
Route::get('directors/{any}','VmslController@directors');
Route::get('faq','VmslController@faq');
Route::get('calculator','VmslController@calculator');
Route::get('why-nhfc','VmslController@whynhfc');
Route::get('featured-program','VmslController@featured_program');
Route::get('management-team','VmslController@management_team');
Route::get('downloads','VmslController@downloads');
Route::get('strategic-partners','VmslController@strategic_partners');
Route::get('regulatory-disclosures','VmslController@regulatory_disclosures');
Route::get('financial-report','VmslController@financial_report');
Route::get('shareholding-structure','VmslController@shareholding_structure');
Route::get('location','VmslController@location');
Route::get('news','VmslController@news');
Route::get('news/{id}','VmslController@news_details');
Route::get('csrs','VmslController@csr');
Route::get('news-bulletin','VmslController@news_bulletin');
Route::get('vacancy-announcement','VmslController@vacancy_announcement');
Route::get('files/{id}','VmslController@files_info');

//NEW ROUTES
Route::post('/loan-request', 'VmslController@loan_request');
Route::post('/deposit-request', 'VmslController@deposit_request');
Route::get('/sitemap', 'VmslController@sitemap');








