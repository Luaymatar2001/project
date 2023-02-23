<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyFirstCont;
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

Route::get('/page/index' , [MyFirstCont::class, 'rauteIndex']);

Route::get('/page/info',[MyFirstCont::class, 'rauteInfo']);
    
Route::get('/page/registration' ,[MyFirstCont::class, 'rauteReg']);
    
    