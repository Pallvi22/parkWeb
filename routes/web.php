<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/',function(){
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/*   USER ROUTES  */
/* Route::redirect('/user', '/user/home');
$router->group(['prefix' => 'user', 'middleware' =>['auth','verified']], function() use ($router) {
    $router->get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    $router->get('/parking',[App\Http\Controllers\User\UserController::class,'index']);
});

 */

