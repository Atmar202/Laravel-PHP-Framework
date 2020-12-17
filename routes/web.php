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
