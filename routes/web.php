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


Auth::routes();


Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>'auth:web'],function () {
     Route::get('/' , 'mainController@index')->name('admin.home');
    // setting
    Route::get('setting','setting\settingController@index')->name('setting.index');
    Route::put('setting/{id}','setting\settingController@update')->name('setting.update');

    // ads
    Route::resource('ad','Ad\adController',['except'=>['show']]);
    // articles
    Route::resource('article','Article\articleController',['except'=>['show']]);
    // poem
    Route::resource('poem','Poem\poemController',['except'=>['show']]);
    // video
    Route::resource('video','Video\videoController',['except'=>['show']]);
    // comments
    Route::group(['prefix'=>'comment','namespace'=>'Comment'],function(){
        Route::get('poem','commentController@poem')->name('comment.poem');
        Route::get('article','commentController@article')->name('comment.article');
        Route::put('status/{id}','commentController@status');
        Route::delete('delete/{id}','commentController@destroy');
        Route::get('show','commentController@show');
        Route::get('article','commentController@article')->name('comment.article');
        Route::get('poem-delete','commentController@poemDelete');
    });
});

Route::group(['namespace'=>'Front'],function(){
   Route::get('/','mainController@index');
   Route::get('poems','mainController@poems');
   Route::get('poem/{id}','mainController@poem');
   Route::get('articles','mainController@articles');
   Route::get('article/{id}','mainController@article');
   Route::get('videos','mainController@videos');
   Route::get('about','mainController@about');
   Route::post('add-comment-B','mainController@commentP');
   Route::post('add-comment-A','mainController@commentA');
   Route::get('load','mainController@load');
});
