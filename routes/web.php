<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ActivationFieldController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\CommunicationController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DevelopmentProcessController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ImprintController;
use App\Http\Controllers\LeaderController;
use App\Http\Controllers\LetterController;
use App\Http\Controllers\MainValueController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MusicTranditionController;
use App\Http\Controllers\RecruitController;
use App\Http\Controllers\ShareHolderController;
use App\Http\Controllers\TidingController;
use App\Http\Controllers\UserController;
use App\Livewire\Client\LWRegulation;
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

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('layouts.admin.app');
    })->name('dashboard');
    Route::middleware('admin.check')->group(function () {
        Route::get('/members', [MemberController::class, 'index'])->name('members');
        Route::get('/fields', [FieldController::class, 'index'])->name('fields');
        Route::get('/recruits', [RecruitController::class, 'index'])->name('recruits');
        Route::get('/leaders', [LeaderController::class, 'index'])->name('leaders');
        Route::get('/achievements', [AchievementController::class, 'index'])->name('achievements');
        Route::get('/development-processes', [DevelopmentProcessController::class, 'index'])->name('development-processes');
        Route::get('/activation-fields', [ActivationFieldController::class, 'index'])->name('activation-fields');
        Route::get('/activation-field-update/{id}', [ActivationFieldController::class, 'update'])->name('activation-field-update');
        Route::get('/shareholders', [ShareHolderController::class, 'index'])->name('shareholders');
        Route::get('/shareholders-files', [FileController::class, 'index'])->name('shareholder-files');
        Route::get('/news', [TidingController::class, 'index'])->name('news');
        Route::get('/add-news', [TidingController::class, 'addForm'])->name('add-news');
        Route::get('/update-news/{id}', [TidingController::class, 'updateForm'])->name('update-news');
        Route::get('/imprint', [ImprintController::class, 'imprint'])->name('imprint');
        Route::get('/mainvalue', [MainValueController::class, 'index'])->name('mainvalue');
        Route::get('/music', [MusicTranditionController::class, 'index'])->name('music');
        Route::get('/contact', [ContactController::class, 'index'])->name('contactmn');
    });
    Route::get('/writers', [UserController::class, 'index'])->name('writers');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/en', [HomeController::class, 'index'])->name('home-en');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/trandition', [HomeController::class, 'trandition'])->name('trandition');
Route::get('/news/{id}', [NewsController::class, 'news'])->name('clientnews');
Route::get('/news', [CommunicationController::class, 'news'])->name('newss');
Route::get('/magazin', [CommunicationController::class, 'magazin'])->name('magazin');
Route::get('/happy-new-year-letter', [CommunicationController::class, 'happyNewYearLetter'])->name('happyNewYearLetter');
Route::get('/president-message', [CommunicationController::class, 'presidentMessage'])->name('presidentMessage');
Route::get('/internal-activities', [CommunicationController::class, 'internalActivities'])->name('internalActivities');
Route::get('/press-release', [CommunicationController::class, 'pressRelease'])->name('pressRelease');
Route::get('/event', [CommunicationController::class, 'event'])->name('event');
Route::get('/car', [\App\Http\Controllers\Client\FieldController::class, 'car'])->name('car');
Route::get('/agriculture', [\App\Http\Controllers\Client\FieldController::class, 'agriculture'])->name('agriculture');
Route::get('/industries', [\App\Http\Controllers\Client\FieldController::class, 'industries'])->name('industries');
Route::get('/construction', [\App\Http\Controllers\Client\FieldController::class, 'construction'])->name('construction');
Route::get('/logistics', [\App\Http\Controllers\Client\FieldController::class, 'logistics'])->name('logistics');
Route::get('/service', [\App\Http\Controllers\Client\FieldController::class, 'service'])->name('service');
Route::get('/disclosure', [\App\Http\Controllers\Client\ShareholderController::class, 'disclosure'])->name('disclosure');
Route::get('/financial', [\App\Http\Controllers\Client\ShareholderController::class, 'financial'])->name('financial');
Route::get('/regulation', [\App\Http\Controllers\Client\ShareholderController::class, 'regulation'])->name('regulation');
Route::get('/annual-report', [\App\Http\Controllers\Client\ShareholderController::class, 'annualReport'])->name('annualReport');
Route::get('/shareholder-info', [\App\Http\Controllers\Client\ShareholderController::class, 'shareholderInfo'])->name('shareholderInfo');
Route::get('/dowload-file-pdf/{id}', [FileController::class, 'downloadFile'])->name('downloadFile');
Route::get('/view-file-pdf/{id}', [FileController::class, 'viewFile'])->name('view-file-pdfs');

Route::post('/contact/send', [LetterController::class, 'sendInfo'])->name('sendInfo');
