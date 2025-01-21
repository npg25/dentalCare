<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\admin\AdminController;
use Illuminate\Support\Facades\Auth;

//Auth
Auth::routes();

Route::get('/', function () {
    return view('index');

});
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function() {
    // Admin page  
    Route::get('/admin', [App\Http\Controllers\admin\AdminController::class, 'adminIndex'])->name('admin.index');

    //Price
    Route::get('/admin/price', [App\Http\Controllers\admin\PriceController::class, 'adminPrice'])->name('admin.price');
    
    Route::get('/admin/price-create', [App\Http\Controllers\admin\PriceController::class, 'adminPriceCreate'])->name('admin.price.create');
    Route::post('/admin/price-store', [App\Http\Controllers\admin\PriceController::class, 'adminPriceStore'])->name('admin.price.store');

    Route::get('/admin/price/{id}', [App\Http\Controllers\admin\PriceController::class, 'adminPriceEdit'])->name('admin.price.detail');
    Route::post('/admin/price-update/{id}', [App\Http\Controllers\admin\PriceController::class, 'adminPriceUpdate'])->name('admin.price.update');
    
    Route::get('/admin/price-delete/{id}', [App\Http\Controllers\admin\PriceController::class, 'adminPriceDelete'])->name('admin.price.delete');

    //Journal
    Route::get('/admin/journal', [App\Http\Controllers\admin\JournalController::class, 'adminJournal'])->name('admin.journal');
    
    Route::get('/admin/journal-create', [App\Http\Controllers\admin\JournalController::class, 'adminJournalCreate'])->name('admin.journal.create');
    Route::post('/admin/journal-store', [App\Http\Controllers\admin\JournalController::class, 'adminJournalStore'])->name('admin.journal.store');
    
    Route::get('/admin/journal/{id}', [App\Http\Controllers\admin\JournalController::class, 'adminJournalEdit'])->name('admin.journal.detail');
    Route::post('/admin/journal-update/{id}', [App\Http\Controllers\admin\JournalController::class, 'adminJournalUpdate'])->name('admin.journal.update');

    Route::get('/admin/journal-delete/{id}', [App\Http\Controllers\admin\JournalController::class, 'adminJournalDelete'])->name('admin.journal.delete');

});

Route::get('catalog/', [App\Http\Controllers\CatalogController::class, 'CatalogIndex'])->name('catalog.index');




// V2
Route::get('/', [App\Http\Controllers\Indexv2Controller::class, 'indexV2'])->name('index.V2');




