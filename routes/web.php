<?php

use App\Http\Controllers\TicketClassController;
use App\Http\Controllers\TicketController;
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

Route::get('/', function () {
    return view('welcome');
});

// Admin Ticket
Route::get('/admin/ticket', [TicketController::class, 'index'])->name('ticket.admin');
Route::post('/admin/ticket', [TicketController::class, 'store']);
Route::put('/admin/ticket/{id}', [TicketController::class, 'update']);
Route::delete('/admin/ticket/{id}', [TicketController::class, 'destroy']);

// Admin Ticket Class
Route::get('/admin/ticketclass', [TicketClassController::class, 'index'])->name('ticketclass.admin');
Route::post('/admin/ticketclass', [TicketClassController::class, 'store']);
Route::put('/admin/ticketclass/{id}', [TicketClassController::class, 'update']);
