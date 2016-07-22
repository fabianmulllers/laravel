<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use course\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::controllers([
'users' => 'UsersController',

]);
Route::auth();

Route::get('/home', 'HomeController@index');


/*Route::get('example',function(){


    $user = 'jose';
    return view('examples.template', compact('user'));
}
    */
Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'], function (){
    Route::resource('users','UsersController');


});

/*Route::get('notes' ,function(){

    $notes = Note::all();

   // dd($notes);

    return view('notes/list', compact('notes'));

});*/

Route::get('notes','NotesController@index');

/*Route::post('notes', function(){

  return ('Creating a note');
});*/
Route::post('notes','NotesController@store');

Route::get('notes/create','NotesController@create');
/*Route::get('notes/create', function() {

    return view ('notes/create');
});*/

Route::get('notes/{note}','NotesController@show')->where('note' ,'[0-9]+');




/*Route::get('notes/{note}/{slug?}',function($note,$slug = null){

    //return $note;

      dd($note, $slug);

})->where ('note','[0-9]');

*/





Route::get('usuario/{opcion}', function($opcion){

 switch($opcion){

     case 'crear':

     dd('aqui se crean usuarios');
     break;

     case 'eliminar':

         dd('aqui se elimina');
         break;

     case'edita':
         dd('aqui se edita');
         break;
     default:
         dd('no existe');
 }

});