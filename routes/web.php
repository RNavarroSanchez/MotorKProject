<?php

use App\Http\Controllers\ReadJson;
use App\Models\Vehicle;
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

Route::get('/', [ReadJson::class, 'showDataFromJson'] );
Route::get('/search', [ReadJson::class, 'search']);

