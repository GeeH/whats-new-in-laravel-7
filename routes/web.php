<?php

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

Route::get('/casts', function () {
    $transaction = Transaction::where('id', 1)->first();
    return (string)$transaction->amount;
});

Route::get('/blade-components', function () {
    return view('components');
});

Route::get('/http-client-get', function () {
    $response = Http::get('http://www.recipepuppy.com/api/?i=garlic,bread');
    return $response['results'][array_rand($response['results'])];
});
