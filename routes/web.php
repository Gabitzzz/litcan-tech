<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home/Index', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/services', function () {
    return Inertia::render('Services/Index');
})->name('services');

Route::get('/tech-stack', function () {
    return Inertia::render('Services/TechStalk');
})->name('tech-stack');

Route::get('/services/web-development', function () {
    return Inertia::render('Services/WebDev');
})->name('web-dev');

Route::get('/services/app-development', function () {
    return Inertia::render('Services/AppDev');
})->name('app-dev');

Route::get('/services/product-design', function () {
    return Inertia::render('Services/ProductDesign');
})->name('product-design');

Route::get('/services/digital-marketing', function () {
    return Inertia::render('Services/DigitalMarketing');
})->name('digital-marketing');

Route::get('/services/machine-learning', function () {
    return Inertia::render('Services/MachineLearning');
})->name('machine-learning');

Route::get('/services/custom-development', function () {
    return Inertia::render('Services/CustomDevelopment');
})->name('custom-development');



Route::get('/portfolio', function () {
    return Inertia::render('Portfolio/Index');
})->name('portfolio');

Route::get('/blog', function () {
    return Inertia::render('Blog/Index');
})->name('blog');

Route::get('/contact', function () {
    return Inertia::render('Contact/Index');
})->name('contact');


require __DIR__.'/auth.php';
