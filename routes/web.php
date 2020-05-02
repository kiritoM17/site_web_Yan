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
//auth service
// Auth::routes();

//route main administration page
Route::group([],function(){
    Route::get('admin','DashboardController@getPage');
    Route::get('dashboard',['as'=>'dashboard','uses'=>'DashboardController@getPage']);
    Route::get('album-medias',['as'=>'album-medias','uses'=>'AlbumController@index']);
    Route::get('actualite',['as'=>'actualite','uses'=>'eventController@getAdminPage']);
    Route::get('business-admin',['as'=>'business-admin','uses'=>'businessController@getAdminPage']);
    Route::get('admin-formation',['as'=>'admin-formation','uses'=>'formationController@getAdminPage']);
    Route::get('admin-magazine',['as'=>'admin-magazine','uses'=>'magazineController@getAdminPage']);
    Route::get('admin-media-city',['as'=>'admin-media-city','uses'=>'communicationController@getAdminPage']);
    Route::get('publication',['as'=>'publication','uses'=>'publicationController@getPage']);
    Route::get('rubrique',['as'=>'rubrique','uses'=>'rubriqueController@getPage']);
    Route::get('partenaire',['as'=>'partenaire','uses'=>'PartenaireController@index']);
});
//route main view front end page
Route::group([], function()
{
    Route::get('',['as'=>'presentation','uses'=>'presentationController@getPage']);
    Route::get('presentation',['as'=>'presentation','uses'=>'presentationController@getPage']);
    Route::get('business',['as'=>'business','uses'=>'businessController@getPage']);
    Route::get('communication',['as'=>'communication','uses'=>'communicationController@getPage']);
    Route::get('formation',['as'=>'formation','uses'=>'formationController@getPage']);
    Route::get('event',['as'=>'event','uses'=>'eventController@getPage']);
    Route::get('magazine',['as'=>'magazine','uses'=>'magazineController@getPage']);
    Route::get('contact',['as'=>'contact','uses'=>'contactController@getPage']);
});

//media route
Route::group(['prefix'=>'media' ], function()
{
    Route::post('delete','MediaControler@destroy');
    Route::post('store','MediaControler@store');
    Route::post('storeRegisterForm','MediaControler@storeRegisterForm');
    Route::post('storeSyllabus','MediaControler@storeSyllabus');
    Route::get('getMediaById','MediaControler@getMediaById');
});
//album routes
Route::group(['prefix'=>'album' ], function()
{
    Route::post('store','AlbumController@store');
    Route::post('delete','AlbumController@destroy');
    Route::post('update','AlbumController@update');
    Route::get('getImageAlbumAdmin/{id}','AlbumController@getImageAlbumAdmin');
    Route::get('getImageAlbumPublic/{id}','AlbumController@getImageAlbumPublic');
    Route::get('getImageAlbumPublicVideo/{id}','AlbumController@getImageAlbumPublicVideo');
    Route::get('getParentImage/{id}','AlbumController@getParentImage');
    Route::get('getParentVideo/{id}','AlbumController@getParentVideo');
});
//publication Route
Route::group(['prefix'=>'publication'],function()
{
    Route::post('store','publicationController@store');
    Route::post('destroy','publicationController@destroy');
    Route::post('updateGereralPublication','publicationController@updateGeneralPublication');
    Route::post('updateEventPublication','publicationController@updateEventPublication');
    Route::post('updateFormationPublication','publicationController@updateFormationPublication');
    Route::get('allPublicationMagazineNumber','publicationController@allPublicationMagazineNumber');
    Route::get('allPublicationBusinessNumber','publicationController@allPublicationBusinessNumber');
    Route::get('allPublicationMediaCityNumber','publicationController@allPublicationMediaCityNumber');
    Route::get('allPublicationFormationNumber','publicationController@allPublicationFormationNumber');
    Route::get('allPublicationEventNumber','publicationController@allPublicationEventNumber');
    Route::get('getById/{id}','publicationController@getById');
});


Route::group(['prefix'=>'event'],function()
{
    Route::get('getRecentEvent','eventController@getRecentEvent');
});

Route::group(['prefix'=>'contact'],function()
{
    Route::post('store','contactController@store');
});

Route::group(['prefix'=>'actualite'],function()
{
    Route::get('getActualiteAdminById/{id}','publicationController@getActualiteAdminById');
});