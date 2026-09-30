<?php

use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\Category\IndexController;

Route::view('/', 'welcome')->name('home');
Route::view('/admin', 'admin')->name('admin');
// Route::view('/admin/categories', 'admin.categories.index')->name('admin.categories.index');
Route::get('/admin/categories', IndexController::class)->name('admin.categories.index');
Route::view('/admin/categories/create', 'admin.categories.create')->name('admin.categories.create');

Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::view('dashboard', 'dashboard')->name('dashboard');
    });

require __DIR__.'/settings.php';
