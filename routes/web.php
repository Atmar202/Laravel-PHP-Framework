<?php

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
Route::resource('/todo', 'TodoController');
/*
Route::get('/todos', 'App\Http\Controllers\TodoController@index')->name('todo.index');
Route::get('/todos/create', 'App\Http\Controllers\TodoController@create');
Route::get('/todos/{todo}/edit', 'App\Http\Controllers\TodoController@edit');
Route::post('/todos/create', 'App\Http\Controllers\TodoController@store')->name('todo.store');
Route::patch('/todos/{todo}/update', 'App\Http\Controllers\TodoController@update')->name('todo.update');
Route::delete('/todos/{todo}/delete', 'App\Http\Controllers\TodoController@delete')->name('todo.delete');
*/

Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
Route::delete('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');


Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', function(Request $request) {
    if($request->hasFile('image')){
        $filename = $request->image->getClientOriginalName();
        if(auth()->user()->avatar){
            Storage::delete('/public/images/' . auth()->user()->avatar);
        }
        $request->image->storeAs('images', $filename,'public');
        auth()->user()->update(['avatar' => $filename]);
        return redirect()->back()->with('message', 'Image Uploaded.');
    }
    return redirect()->back()->with('error', 'Image Not Uploaded.');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
