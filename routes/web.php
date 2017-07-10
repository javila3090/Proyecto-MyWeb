<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

// Authentication Routes...
Route::get('secure/login', 'Auth\LoginController@showLoginForm')->name('secure/login');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('secure/login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::get('secure', [
    'as' => 'secure',
    'uses' => 'AdminController@index'
])->middleware('auth');

Route::get('/en', [
    'as' => 'en',
    'uses' => 'HomeController@indexEnglish'
]);

Route::get('/', [
    'as' => '/',
    'uses' => 'HomeController@indexSpanish'
]);

Route::post('store/message', [
    'as' => 'store/message',
    'uses' => 'HomeController@storeMessage'
]);

//Section About routes

Route::get('secure/section/aboutMe/en', [
    'as' => 'secure/section/aboutMe/en',
    'uses' => 'AdminController@editAbout'
])->middleware('auth');

Route::get('secure/section/aboutMe/es', [
    'as' => 'secure/section/aboutMe/es',
    'uses' => 'AdminController@editAboutSpa'
])->middleware('auth');

Route::post('store/about', [
    'as' => 'store/about',
    'uses' => 'AdminController@storeAbout'
])->middleware('auth');

Route::put('update/about/{about}', [
    'as' => 'update/about',
    'uses' => 'AdminController@updateAbout'
])->middleware('auth');


//Section skills routes

Route::get('secure/section/skills', [
    'as' => 'secure/section/skills',
    'uses' => 'AdminController@listSkill'
])->middleware('auth');

Route::get('create/skill', [
    'as' => 'create/skill/',
    'uses' => 'AdminController@createSkill'
])->middleware('auth');

Route::post('store/skill', [
    'as' => 'store/skill',
    'uses' => 'AdminController@storeSkill'
])->middleware('auth');

Route::get('edit/skill/{id}', [
    'as' => 'edit/skill/',
    'uses' => 'AdminController@editSkill'
])->middleware('auth');

Route::put('update/skill/{skill}', [
    'as' => 'update/skill',
    'uses' => 'AdminController@updateSkill'
])->middleware('auth');

Route::get('destroy/skill/{skill}', [
    'as' => 'destroy/skill',
    'uses' => 'AdminController@destroySkill'
])->middleware('auth');

//Section experience routes

Route::get('secure/section/experience', [
    'as' => 'secure/section/experience',
    'uses' => 'AdminController@listExperience'
])->middleware('auth');

Route::get('create/experience', [
    'as' => 'create/experience',
    'uses' => 'AdminController@createExperience'
])->middleware('auth');

Route::post('store/experience', [
    'as' => 'store/experience',
    'uses' => 'AdminController@storeExperience'
])->middleware('auth');

Route::get('edit/experience/{id}', [
    'as' => 'edit/experience',
    'uses' => 'AdminController@editExperience'
])->middleware('auth');

Route::put('update/experience/{experience}', [
    'as' => 'update/experience',
    'uses' => 'AdminController@updateExperience'
])->middleware('auth');

Route::get('destroy/experience/{experience}', [
    'as' => 'destroy/experience',
    'uses' => 'AdminController@destroyExperience'
])->middleware('auth');

//Portafolio section routes
Route::get('secure/section/portfolio', [
    'as' => 'secure/section/portfolio',
    'uses' => 'AdminController@listPortfolio'
])->middleware('auth');

Route::get('create/portfolio', [
    'as' => 'create/portfolio',
    'uses' => 'AdminController@createPortfolio'
])->middleware('auth');

Route::get('edit/portfolio/{id}', [
    'as' => 'edit/portfolio',
    'uses' => 'AdminController@editPortfolio'
])->middleware('auth');

Route::put('update/portfolio/{portfolio}', [
    'as' => 'update/portfolio',
    'uses' => 'AdminController@updatePortfolio'
])->middleware('auth');

Route::post('store/portfolio', [
    'as' => 'store/portfolio',
    'uses' => 'AdminController@storePortfolio'
])->middleware('auth');

Route::get('destroy/portfolio/{portfolio}', [
    'as' => 'destroy/portfolio',
    'uses' => 'AdminController@destroyPortfolio'
])->middleware('auth');

//Messages section routes
Route::get('secure/section/messages', [
    'as' => 'secure/section/messages',
    'uses' => 'AdminController@listMessages'
])->middleware('auth');

Route::get('open/message/{message}', [
    'as' => 'open/message',
    'uses' => 'AdminController@openMessage'
])->middleware('auth');

Route::get('destroy/message/{message}', [
    'as' => 'destroy/message',
    'uses' => 'AdminController@destroyMessages'
])->middleware('auth');

//Language section routes
Route::get('secure/section/languages', [
    'as' => 'section/languages',
    'uses' => 'AdminController@listLanguage'
])->middleware('auth');

Route::get('create/language', [
    'as' => 'create/language',
    'uses' => 'AdminController@createLanguage'
])->middleware('auth');

Route::get('edit/language/{id}', [
    'as' => 'edit/language',
    'uses' => 'AdminController@editLanguage'
])->middleware('auth');

Route::put('update/language/{language}', [
    'as' => 'update/language',
    'uses' => 'AdminController@updateLanguage'
])->middleware('auth');

Route::post('store/language', [
    'as' => 'store/language',
    'uses' => 'AdminController@storeLanguage'
])->middleware('auth');

Route::get('destroy/language/{language}', [
    'as' => 'destroy/language',
    'uses' => 'AdminController@destroyLanguage'
])->middleware('auth');
