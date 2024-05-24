<?php

use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventExportController;
use App\Http\Controllers\Admin\EventStatusMessageController;
use App\Http\Controllers\Admin\ExportController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\MemberStatusMessageController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\RegisterStatusMessageController;
use App\Http\Controllers\Admin\SpeakerController;
use App\Http\Controllers\Admin\SpeakerStatusMessageController;
use App\Http\Controllers\Admin\SponserController;
use App\Http\Controllers\Admin\UploadController;
use App\Http\Controllers\Admin\VolunteerController;
use App\Http\Controllers\Admin\VolunteerStatusMessageController;
use App\Http\Controllers\MainHomeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SponserStatusMessageController;
use App\Http\Controllers\StoreFormInformationController;
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

Route::get('/', [MainHomeController::class, 'main'])->name('main');
Route::get('/about', [MainHomeController::class, 'about'])->name('about');
Route::get('/aboutTed', [MainHomeController::class, 'aboutTed'])->name('aboutTed');
Route::get('/faq', [MainHomeController::class, 'faq'])->name('faq');
Route::get('/register', [MainHomeController::class, 'register'])->name('register');
Route::get('/volunteer', [MainHomeController::class, 'volunteer'])->name('volunteer');
Route::get('/sponsers', [MainHomeController::class, 'sponsers'])->name('sponsers');

Route::post('/storeRegister', [StoreFormInformationController::class, 'storeRegister'])->name('storeRegister');
Route::post('/storeVolunteer', [StoreFormInformationController::class, 'storeVolunteer'])->name('storeVolunteer');

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
        Route::resource('members', MemberController::class);
        Route::resource('registers', RegisterController::class);
        Route::resource('volunteers', VolunteerController::class);
        Route::resource('speakers', SpeakerController::class);
        Route::resource('sponsers', SponserController::class);
        Route::resource('events', EventController::class);

        // upload files using file pond
        Route::post('upload', [UploadController::class, 'store']);


        //success views - [event messages]
        Route::get('success_update_event', [EventStatusMessageController::class, 'update'])->name('eventUpdated');
        Route::get('success_create_event', [EventStatusMessageController::class, 'create'])->name('eventCreated');
        Route::get('success_delete_event', [EventStatusMessageController::class, 'delete'])->name('eventDeleted');


        //success views - [speaker messages]
        Route::get('success_update_speaker', [SpeakerStatusMessageController::class, 'update'])->name('speakerUpdated');
        Route::get('success_create_speaker', [SpeakerStatusMessageController::class, 'create'])->name('speakerCreated');
        Route::get('success_delete_speaker', [SpeakerStatusMessageController::class, 'delete'])->name('speakerDeleted');

        //success views - [sponsers messages]
        Route::get('success_update_sponser', [SponserStatusMessageController::class, 'update'])->name('sponserUpdated');
        Route::get('success_create_sponser', [SponserStatusMessageController::class, 'create'])->name('sponserCreated');
        Route::get('success_delete_sponser', [SponserStatusMessageController::class, 'delete'])->name('sponserDeleted');

        //success views - [registers messages]
        Route::get('success_update_register', [RegisterStatusMessageController::class, 'update'])->name('registerUpdated');
        Route::get('success_create_register', [RegisterStatusMessageController::class, 'create'])->name('registerCreated');
        Route::get('success_delete_register', [RegisterStatusMessageController::class, 'delete'])->name('registerDeleted');


        //success views - [volunteers messages]
        Route::get('success_update_volunteer', [VolunteerStatusMessageController::class, 'update'])->name('volunteerUpdated');
        Route::get('success_create_volunteer', [VolunteerStatusMessageController::class, 'create'])->name('volunteerCreated');
        Route::get('success_delete_volunteer', [VolunteerStatusMessageController::class, 'delete'])->name('volunteerDeleted');


        //success views - [members messages]
        Route::get('success_update_member', [MemberStatusMessageController::class, 'update'])->name('memberUpdated');
        Route::get('success_create_member', [MemberStatusMessageController::class, 'create'])->name('memberCreated');
        Route::get('success_delete_member', [MemberStatusMessageController::class, 'delete'])->name('memberDeleted');

        //export data as excel 
        Route::get('exportEvents', [ExportController::class, 'exportEvents'])->name('exportEvents');
        Route::get('exportSpeakers', [ExportController::class, 'exportSpeakers'])->name('exportSpeakers');
        Route::get('exportSponsers', [ExportController::class, 'exportSponsers'])->name('exportSponsers');
        Route::get('exportVolunteers', [ExportController::class, 'exportVolunteers'])->name('exportVolunteers');
        Route::get('exportMembers', [ExportController::class, 'exportMembers'])->name('exportMembers');
        Route::get('exportRegisters', [ExportController::class, 'exportRegisters'])->name('exportRegisters');

        //notifications [get notifications] [mark notifications as readed]
        Route::get('notifications', [NotificationController::class, 'index'])->name('notifications.index');
        Route::post('notifications/mark_as_read', [NotificationController::class, 'markNotification'])->name('notifications.markNotification');
    });
});
