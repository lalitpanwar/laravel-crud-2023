<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UseFlush;
use App\Http\Controllers\UserSession;
use App\Http\Controllers\AcesorController;
use App\Http\Controllers\CustomerController;
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
Route::get('/', function (){
 return view('welcome');
});

// Route::get('/{name}', function ($name) {
//     echo $name;
//    return view('welcome', ['name'=>$name]);
// });
// Route::get('/', function (){
//     return view('hello');
//  });

Route::get('/', function (){
    return view('ok');
});

// Route::view('about', '/about');
// Route::view('contact', '/contact');

// Route::get('userpage/{id}',[UserController::class,'show']);
// Route::view('buttonpage','button');
// Route::view('news','news');
// Route::view('blog','blog');

// Route::get('user',[UserController::class,'loadview_foreach']);
// Route::get('user',[UserController::class,'loadview_ifcheck'])->middleware('protectedPage');
// Route::view('noaccess','noaccess');

//Route::group(['middleware' => ['protectedPage']], function(){
   // Route::view('buttonpage','button');
   // Route::view('news','news');
   // Route::view('blog','blog');
    
//});

// Route::get('data',[UserController::class,'getData']);
//Route::get('apidata',[UserController::class,'index']);
// Route::view('store','storedataflush');
// Route::post('storecontroller',[UseFlush::class,'lp_flushdata']);

//Route::view('login','login');
// Route::view('logout','logoutsession');
// Route::view('profile','profilesession');
// Route::get('/logout', function () {
//     if(session()->has('user')){
//     session()->pull('user',null);
//     }
// return redirect('login');
// });

// Route::get('/login', function () {
// if(session()->has('user')){

//      return redirect('profile');
//  }
//  return view('login');
// });
// Route::post('sescontroller',[UserSession::class,'storeS']);

//Route::view('insd','insertdata');
//Route::post('adddatacontroller',[UserController::class,'insData']);

Route::get('acesorcontroller',[AcesorController::class,'indexMutator']);
Route::view('acesor','acesordisplay');
Route::controller(CustomerController::class)->group(function(){
    Route::get('customer','create')->name('customer.create');
    Route::post('customer','saveData');
    Route::get('customer/view','fetchData')->name('customer.view');
    Route::get('customer/trash/{id}','trash')->name('customer.trash');
    Route::get('customer/edit/{id}','edit')->name('customer.edit');
    Route::post('customer/update/{id}','update')->name('customer.update');
    Route::get('customer/trashed','trashedData')->name('customer.trashed');
    Route::get('customer/restore/{id}','trashedRestore')->name('customer.restore');
    Route::get('customer/forcedelete/{id}','forceDelete')->name('customer.forcedelete');
});
