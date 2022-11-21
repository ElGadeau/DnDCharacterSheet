<?php

use App\Models\Character;

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

Route::get('/', function () {
    return view('welcome', ['name' => 'Lily']);
});

Route::get('/character', function () {
    $userCharacter = new Character();
    return View('Character', ['userCharacter' => $userCharacter]);
});

Route::post('/character', function(Request $request) {
    $content = $request->all();

    $userCharacter = new Character();
    $userCharacter->SetAge($content["ageInput"]);
    $userCharacter->SetName($content["nameInput"]);

    return View('Character', ['userCharacter' => $userCharacter]);
});