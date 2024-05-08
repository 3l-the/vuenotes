<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::resources([
    '/notes'    =>  NoteController::class
]);

require __DIR__.'/auth.php';
