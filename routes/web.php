<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\SponserController;
use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\NotificationController;
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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home');
    });
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('members', MemberController::class);
        Route::resource('registers', RegisterController::class);
        Route::resource('volunteers', VolunteerController::class);
        Route::resource('speakers', SpeakerController::class);
        Route::resource('sponsers', SponserController::class);
        Route::resource('events', EventController::class);

        //notifications [get notifications] [mark notifications as readed]
        Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
        Route::post('notifications/mark_as_read', [NotificationController::class, 'markNotification'])->name('notifications.markNotification');
    });
});
