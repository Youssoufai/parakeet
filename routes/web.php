<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('Home', ['name' => 'Mike']);
}); 
/* Route::inertia('/', 'Home');
 */