<?php

use App\Models\Contact;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/success', function(){
    return view('success');
});
Route::post('/', function(){
    $contact = new Contact();
    $contact->name = request('name');
    $contact->email = request('email');
    $contact->save();

     return redirect('success');
});


