<?php
use App\Http\Controllers\BookController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\publisherController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [BookController::class, 'allBook'])->name('homepage');

Route::get('/add/book', [BookController::class, 'addBook'])->name('addBook');
Route::POST('/store/book', [BookController::class, 'storeBook'])->name('storeBook');
Route::get('/books/{id}', [BookController::class, 'book'])->name('bookDetail');
Route::get('/edit/book/{id}', [BookController::class, 'editBook'])->name('editBook');
Route::Patch('/update/book/{id}', [BookController::class, 'updateBook'])->name('updateBook');
Route::Delete('/delete/book/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');
Route::get('/add/publisher', [publisherController::class, 'create'])->name('addPublisher');
Route::POST('/store/publisher', [publisherController::class, 'storePublisher'])->name('storePublisher');
Route::get('/show/publisher', [publisherController::class, 'showPublisher'])->name('showPublisher');
Route::get('/publisher/{id}', [publisherController::class, 'detail'])->name('publisherDetail');
Route::get('/edit/publisher/{id}', [publisherController::class, 'edit'])->name('editPublisher');
Route::Patch('/update/publisher/{id}', [publisherController::class, 'updatePublisher'])->name('updatePublisher');
Route::Delete('/delete/publisher/{id}', [publisherController::class, 'deletePublisher'])->name('deletePublisher');
Route::get('/register', [AuthController::class, 'registerPage'])->name('registerPage')->middleware('guest');
Route::POST('/store/user', [AuthController::class, 'register'])->name('storUser')->middleware('guest');
Route::get('/login', [AuthController::class, 'loginPage'])->name('loginPage')->middleware('guest');
Route::POST('/login/auth', [AuthController::class, 'authenticate'])->name('auth')->middleware('guest');
Route::POST('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');
Route::get('/sendMail', [MailController::class, 'sendMail']);