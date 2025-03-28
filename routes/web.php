<?php

Route::get('/', function () {return view('welcome');});
Route::get('404', function () {return view('404');});

use App\Http\Controllers\{
    PixController,
    UserController,
    HomeController,
    MonthController,
    OrderController,
    ValidaController,
    AgendaController,
    ReciboController,
    AvulsoController,
    ReceiptController,
    ClientesController,
    CategoryController,
    RelatorioController,
    ReeducandoController,
    ReeducatingController,
    ResponsibleController,
    VinteUmOrderController,
    VinteDoisOrderController,
    VinteTresOrderController,
    VinteQuatroOrderController,
};

Route::middleware(['auth'])->group(function () {
    Route::resource('pix', PixController::class);
    Route::resource('home', HomeController::class);
    Route::resource('order', OrderController::class);
    Route::resource('valida', ValidaController::class);
    Route::resource('month', MonthController::class);
    Route::resource('agenda', AgendaController::class);
    Route::resource('recibo', ReciboController::class);
    Route::resource('avulso', AvulsoController::class);
    Route::resource('receipt', ReceiptController::class);
    Route::resource('clientes', ClientesController::class);
    Route::resource('relatorio', RelatorioController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('reeducandos', ReeducandoController::class);
    Route::resource('reeducating', ReeducatingController::class);
    Route::resource('responsible', ResponsibleController::class);
    Route::resource('order2021', VinteUmOrderController::class);
    Route::resource('order2022', VinteDoisOrderController::class);
    Route::resource('order2023', VinteTresOrderController::class);
    Route::resource('order2024', VinteQuatroOrderController::class);
});

use App\Http\Controllers\Admin\CommentController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function () {

    Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
    Route::get('/users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
    Route::put('/comments/{id}', [CommentController::class, 'update'])->name('comments.update');
    Route::post('/users/{id}/comments', [CommentController::class, 'store'])->name('comments.store');
    Route::get('/users/{id}/comments', [CommentController::class, 'index'])->name('comments.index');

    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
});

require __DIR__.'/auth.php';
