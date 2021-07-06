<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


/*Route::get('/BITM', "BitmController@index" );

Route::get('home','BitmController@newone');


Route::get('/', function () {
    //return view('welcome');
    return "HELLO DEAR";
});






Route::get('/BITM',[

    'uses'=>'BitmController@index',
    'as'=>'bitm'



]);
Route::get('/home',[

    'uses'=>'BitmController@newone',
    'as'=>'home'



]);
Route::post('/form',[

    'uses'=>'BitmController@myform',
    'as'=>'my-form'



]);
Route::get('/test',[

    'uses'=>'BitmController@test',
    'as'=>'test'



]);*/

Route::get('/',[

    'uses'=>'FrontController@index',
    'as'=>'/'



]);

Route::get('/team',[

    'uses'=>'FrontController@team',
    'as'=>'team'



]);


Auth::routes();

/*Route::get('/home', 'HomeController@index')->name('home');*/


Route::get('/home',[
    'uses'=>'HomeController@index',
    'as'=> 'home'


]);

Route::get('/team/add',[

    'uses'=>'TeamController@index',
    'as'=>'add-team'


]);
Route::post('/team/save',[

    'uses'=>'TeamController@saveMember',
    'as'=>'new-member'


]);


Route::get('/team/manage',[

    'uses'=>'TeamController@manageMember',
    'as'=>'manage-teamdetails'


]);

Route::get('/team/unpublishmember/{id}',[

    'uses'=>'TeamController@Unpublishmember',
    'as'=>'unpublished-team'


]);
Route::get('/team/publishmember/{id}',[

    'uses'=>'TeamController@Publishmember',
    'as'=>'published-team'


]);
Route::get('/team/eidtmember/{id}',[

    'uses'=>'TeamController@Editmember',
    'as'=>'edit-team'


]);





Route::post('/team/updatemember',[

    'uses'=>'TeamController@Updatemember',
    'as'=>'update-member'


]);

Route::get('/team/deletemember/{id}',[

    'uses'=>'TeamController@Deletemember',
    'as'=>'delete-team'


]);


Route::get('/autocomplete',[

    'uses'=>'TeamController@autocomplete',
    'as'=>'autocomplete'


]);

Route::get('/album/add',[

    'uses'=>'AlbumController@index',
    'as'=>'add-album'


]);

Route::post('/album/save',[

    'uses'=>'AlbumController@saveAlbum',
    'as'=>'new-album'


]);
Route::get('/album/manage',[

    'uses'=>'AlbumController@manageAlbum',
    'as'=>'manage-albumdetails'


]);

Route::get('/album/edit/{id}',[
    'uses'=>'AlbumController@EditAlbum',
    'as'=>'edit-album'

]);

Route::post('/album/updated-album',[

    'uses'=>'AlbumController@UpdateAlbum',
    'as'=>'update-album'
]);

Route::get('/album/unpublish/{id}',[


    'uses'=>'AlbumController@UnpublishAlbum',
     'as' =>'unpublish-album'


]);

Route::get('/album/publish/{id}',[

    'uses'=>'AlbumController@PublishAlbum',
    'as'=>'publish-member'

]);



Route::get('/album/delete/{id}',[
    'uses'=>'AlbumController@Deletealbum',
    'as'=>'delete-album'





]);

Route::get('/song/add',[

    'uses'=>'SongController@index',
    'as'=>'add-song'



]);

Route::post('/save/song',[

    'uses'=>'SongController@saveSong',
    'as'=>'new-song'

]);



Route::get('manage-songdetails',[

   'uses'=>'SongController@manageSong',
   'as'=>'manage-songdetails'

]);

Route::get('delete-songdetails/{id}',[

   'uses'=>'SongController@deleteSong',
   'as'=>'delete-song'

]);


Route::get('unpublished-songdetails/{id}',[

   'uses'=>'SongController@unpublishedSong',
   'as'=>'unpublished-song'

]);


Route::get('/published-song{id}',[


    'uses'=>'SongController@publisheSong',
    'as'=>'published-song'




]);Route::get('/published-song{id}',[


    'uses'=>'SongController@publisheSong',
    'as'=>'published-song'




]);

Route::get('/edit-song{id}',[

    'uses'=>'SongController@editSong',
    'as'=>'edit-song'

    ]);

Route::get('/who-weare/',[


    'uses'=>'WhoWeAreController@index',
    'as'=>'who-weare'



]);


Route::post('/save-whoweare/',[

    'uses'=>'WhoWeAreController@SaveWhoweare',
    'as'=>'save-whoweare'


]);


Route::get('/manage-whoweare',[

    'uses'=>'WhoWeAreController@ManageWhoweare',
    'as'=>'manage-whoweare'



]);



Route::get('/delete-whoweare{id}',[

    'uses'=>'WhoWeAreController@DeleteWhoweare',
    'as'=>'delete-whoweare'


]);

Route::get('/unpublish-whoweare{id}',[


    'uses'=>'WhoWeAreController@UnpublishedWhoweare',
    'as'=>'unpublish-whoweare'





]);


Route::get('/publish-whoweare{id}',[

    'uses'=>'WhoWeAreController@PublishedWhoweare',
    'as'=>'publish-whoweare'





]);












