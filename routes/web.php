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
    $data = [
        'title' => 'Hello World!',
        'lista_lorem' => ['Lorem ipsum', 'dolor sit,', 'amet consectetur', 'adipisicing elit.', 'Nisi, eius quidem', 'id iusto cupiditate', 'omnis voluptatibus', 'quos aliquam impedit,', 'esse facere,', 'perspiciatis quisquam', 'quasi inventore', 'eum eveniet', 'molestias doloremque repellat!']
    ];

    return view('home', $data);
});
