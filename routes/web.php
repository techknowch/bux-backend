<?php

use App\Http\Controllers\Backend\BlogsController;
use App\Http\Controllers\Backend\HomeController;
use App\Http\Controllers\CapabilityController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('capabilities', [FrontendController::class, 'capabilities'])->name('capabilities');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('services', [FrontendController::class, 'services'])->name('services');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('it-management-consultancy', [FrontendController::class, 'consultancy'])->name('consultancy');
Route::get('it-resourcing', [FrontendController::class, 'resourcing'])->name('resourcing');
Route::get('cybersecurity', [FrontendController::class, 'cybersecurity'])->name('cybersecurity');
Route::get('artificial-intelligence', [FrontendController::class, 'ai'])->name('ai');
Route::post('/consultation', [ConsultationController::class, 'store'])->name('consultation.store');
Route::get('/blogs/create', [BlogsController::class,'create'])->name('blog.create');
Route::post('/blogs/store',[BlogsController::class,'store'])->name('blogs.store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('backend.home');
    })->name('dashboard');
});


Route::get('/{name}',[CapabilityController::class, 'show'])->name('capabilities.show');