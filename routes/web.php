<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\SendWelcomeEmailJob;

Route::get('/', function () {
    return view('welcome');
});

// test queue job
Route::get('test', function () {
    $details['name'] = 'Md Obydullah';
    $details['email'] = 'hi@obydul.me';

    dispatch(new SendWelcomeEmailJob($details));

    dd('sent');
});
