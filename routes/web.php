<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

//  /blog -> list of all blogs
//  /blog/create -> create a new blog
//  /blog/{id} -> show a single blog
//  /blog/{id}/edit -> edit a single blog <-> (Only allow admins/owners to edit)
//  /blog/{id}/delete -> delete a single blog <-> (Only allow admins/owners to delete)

// Route::get('/blogs', [BlogController::class, "index"])->name("blog.index");
// Route::get("/blog/create", [BlogController::class,"create"])->name("blog.create");
// Route::get('/blog/{id}', [BlogController::class, "show"])->name("blog.show");
// Route::post('/blog', [BlogController::class,'store'])->name('blog.store');
// Route::get('/blog/{id}/edit', [BlogController::class,'edit'])->name('blog.edit');
// Route::patch("/blog/{id}", [BlogController::class,"update"])->name("blog.update");
// Route::delete("/blog/{id}", [BlogController::class,"delete"])->name("blog.delete");

Route::resource("/blog", BlogController::class);



