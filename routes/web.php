<?php

use App\Livewire\Product;
use App\Livewire\TodoList;
use App\Livewire\Welcome;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
Route::get('/', Welcome::class)->name('welcome');
Route::get('/products', Product::class)->name('products');
Route::get('/todos', TodoList::class)->name('todos');