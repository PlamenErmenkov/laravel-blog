<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//  /blog -> list of all blogs
//  /blog/create -> create a new blog
//  /blog/{id} -> show a single blog
//  /blog/{id}/edit -> edit a single blog <-> (Only allow admins/owners to edit)
//  /blog/{id}/delete -> delete a single blog <-> (Only allow admins/owners to delete)

Route::get('/blogs', [BlogController::class, "index"]);
Route::get('/blog/{id}', [BlogController::class, "show"]);
