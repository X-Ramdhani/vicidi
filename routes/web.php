<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\VisitorController;
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
    return view('landing');
})->name('home');

Route::get('/erp', function () {
    return view('erp');
})->name('erp');

Route::post('/api/chatbot/send', [ChatbotController::class, 'processChat']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    
    // Route Dashboard Utama
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Chatbot
    Route::get('/chatbot', [ChatBotController::class, 'index'])->name('chatbot.index');

    // Pengelolaan Knowledge Base
    Route::post('/chatbot/knowledge', [ChatBotController::class, 'storeKnowledge'])->name('chatbot.knowledge.store');
    Route::put('/chatbot/knowledge/{id}', [ChatBotController::class, 'updateKnowledge'])->name('chatbot.knowledge.update');
    Route::delete('/chatbot/knowledge/{id}', [ChatBotController::class, 'destroyKnowledge'])->name('chatbot.knowledge.destroy');

    // Pengelolaan Leads
    Route::delete('/chatbot/leads/{id}', [ChatBotController::class, 'destroyLead'])->name('chatbot.leads.destroy');
    Route::get('/visitors', [VisitorController::class, 'index'])->name('visitors.index');

});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/test-visitor', function () {
    app('visitor')->visit();
    return 'OK';
});

require __DIR__.'/auth.php';