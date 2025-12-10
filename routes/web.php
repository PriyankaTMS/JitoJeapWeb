<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VipController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HelpController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ZoneController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TimeSlotController;
use App\Http\Controllers\UpcomingController;
use App\Http\Controllers\CompletedController;
use App\Http\Controllers\PowerTeamController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\EventAgendaController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookedSessionController;
use App\Http\Controllers\RomChapterLeaderController;
use App\Http\Controllers\IndustrialConnectController;

Route::get('/index', [WebsiteController::class, 'index'])->name('index');
// Route::view('/index1','website.index')->name('index1');
Route::get('/', function () {
    return redirect()->route('index');
});

//Route::post('/registeruser', [RegisterController::class, 'register'])->name('registeruser');

Route::get('/showmsg', [WebsiteController::class, 'showmsg'])->name('showmsg');
Route::get('/chapterleaders/{id}', [WebsiteController::class, 'chapterleader'])->name('chapterleader');


Route::get('/login', [LoginController::class, 'login'])->name('login.user');

Route::get('/upcoming-event', [WebsiteController::class, 'upcommingEvent'])->name('upcoming.event');

Route::get('/completed-event', [WebsiteController::class, 'completedEvent'])->name('completed.event');

Route::get('/session_1_2_1', [WebsiteController::class, 'session'])->name('session_1_2_1');

Route::post('/ContactEnquiry', [WebsiteController::class, 'contactenquiry'])->name('contactenquiry');

Route::get('/pricing', [WebsiteController::class, 'pricing'])->name('pricing');
Route::get('/book', [WebsiteController::class, 'book'])->name('book_1_2_1');
Route::get('/industrial', [WebsiteController::class, 'industrial'])->name('industrial_connect');
Route::post('/book_session', [BookedSessionController::class, 'bookSession'])->name('book_session');
Route::get('/notification', [BookedSessionController::class, 'notification'])->name('notification');
Route::get('/acceptSession/{id}', [BookedSessionController::class, 'acceptSession'])->name('acceptSession');
Route::get('/rejectSession/{id}', [BookedSessionController::class, 'rejectSession'])->name('rejectSession');
Route::get('/profile/{id}', [WebsiteController::class, 'profile'])->name('profile');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
Route::get('/myprofile', [WebsiteController::class, 'myprofile'])->name('myprofile');
Route::get('/get-categories/{pt_id}', [WebsiteController::class, 'getCategories']);
Route::post('/get-filtered-categories', [WebsiteController::class, 'getFilteredCategories']);
Route::get('/event_agenda', [WebsiteController::class, 'eventagenda'])->name('eventagenda');
Route::post('/change_password/{id}', [WebsiteController::class, 'change_password'])->name('change_password');
Route::post('/editmyprofile/{id}', [WebsiteController::class, 'editmyprofile'])->name('editmyprofile');
Route::get('/buy_redirect', [HomeController::class, 'buyRedirect'])->name('buy_redirect');
Route::get('/buy_webhook', [HomeController::class, 'buyWebhook'])->name('buy_webhook');

Route::get('/delegate-profile', [WebsiteController::class, 'delegateProfile'])->name('delegate.profile');


Route::get('/testing', [BookedSessionController::class, 'testing'])->name('testing');

Auth::routes();
Route::middleware('auth')->group(function () {
    // Route::get('/session_1_2_1', [WebsiteController::class, 'session'])->name('session_1_2_1');
    Route::get('/add_to_cart/{id}', [HomeController::class, 'addToCart'])->name('add_to_cart');
    Route::get('/buy/{id}', [HomeController::class, 'buy'])->name('buy');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/help', [HelpController::class, 'help'])->name('help');
    Route::post('/store', [HelpController::class, 'store'])->name('help.store');
});

Route::middleware('is_admin')->group(function () {
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/vip', [HomeController::class, 'vip'])->name('admin.vip');
    Route::get('/admin/userBought', [HomeController::class, 'userBought'])->name('admin.userBought');

    //Roaster Routes
    Route::get('/admin/roaster', [UserController::class, 'index'])->name('admin.roaster');
    Route::get('/admin/roaster_create', [UserController::class, 'create'])->name('admin.roaster.create');
    Route::post('/admin/roaster_store', [UserController::class, 'store'])->name('admin.roaster.store');
    Route::get('/admin/roaster_edit/{id}', [UserController::class, 'edit'])->name('admin.roaster.edit');
    Route::post('/admin/roaster_update/{id}', [UserController::class, 'update'])->name('admin.roaster.update');
    Route::get('/admin/roaster_delete/{id}', [UserController::class, 'destroy'])->name('admin.roaster.delete');
    Route::get('/admin/roaster_status/{id}', [UserController::class, 'status'])->name('admin.roaster.status');

    Route::get('roasterpdf', [UserController::class, 'roasterpdf'])->name('roasterpdf');

    //import excel file route
    Route::post('/admin/roaster_excel', [UserController::class, 'importExcel'])->name('admin.importexcel');

    //routes of power team
    Route::get('/admin/power_team', [PowerTeamController::class, 'index'])->name('admin.power_team');
    Route::get('/admin/power_team_create', [PowerTeamController::class, 'create'])->name('admin.power_team.create');
    Route::post('/admin/power_team_store', [PowerTeamController::class, 'store'])->name('admin.power_team.store');
    Route::get('/admin/power_team_edit/{id}', [PowerTeamController::class, 'edit'])->name('admin.power_team.edit');
    Route::post('/admin/power_team_update/{id}', [PowerTeamController::class, 'update'])->name('admin.power_team.update');
    Route::get('/admin/power_team_delete/{id}', [PowerTeamController::class, 'destroy'])->name('admin.power_team.delete');

    //routes of Category
    Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category');
    Route::get('/admin/category_create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/admin/category_store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/admin/category_edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::post('/admin/category_update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/admin/category_delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');


    //routes of time slots
    Route::get('/admin/timeslot', [TimeSlotController::class, 'index'])->name('admin.timeslot');
    Route::get('/admin/timeslot_create', [TimeSlotController::class, 'create'])->name('admin.timeslot.create');
    Route::post('/admin/timeslot_store', [TimeSlotController::class, 'store'])->name('admin.timeslot.store');
    Route::get('/admin/timeslot_edit/{id}', [TimeSlotController::class, 'edit'])->name('admin.timeslot.edit');
    Route::post('/admin/timeslot_update/{id}', [TimeSlotController::class, 'update'])->name('admin.timeslot.update');
    Route::get('/admin/timeslot_delete/{id}', [TimeSlotController::class, 'destroy'])->name('admin.timeslot.delete');


    //table routes
    Route::get('/admin/table', [TableController::class, 'index'])->name('admin.table');
    Route::get('/admin/table_create', [TableController::class, 'create'])->name('admin.table.create');
    Route::post('/admin/table_store', [TableController::class, 'store'])->name('admin.table.store');
    Route::get('/admin/table_edit/{id}', [TableController::class, 'edit'])->name('admin.table.edit');
    Route::post('/admin/table_update/{id}', [TableController::class, 'update'])->name('admin.table.update');
    Route::get('/admin/table_delete/{id}', [TableController::class, 'destroy'])->name('admin.table.delete');

    //Chapter Routes
    Route::get('/admin/chapter', [ChapterController::class, 'index'])->name('admin.chapter');
    Route::get('/admin/chapter_create', [ChapterController::class, 'create'])->name('admin.chapter.create');
    Route::post('/admin/chapter_store', [ChapterController::class, 'store'])->name('admin.chapter.store');
    Route::get('/admin/chapter_edit/{id}', [ChapterController::class, 'edit'])->name('admin.chapter.edit');
    Route::post('/admin/chapter_update/{id}', [ChapterController::class, 'update'])->name('admin.chapter.update');
    Route::get('/admin/chapter_delete/{id}', [ChapterController::class, 'destroy'])->name('admin.chapter.delete');

    //Industrial connect routes
    Route::get('/admin/industrial_connect', [IndustrialConnectController::class, 'index'])->name('admin.industrial_connect');
    Route::get('/admin/industrial_connect_create', [IndustrialConnectController::class, 'create'])->name('admin.industrial_connect.create');
    Route::post('/admin/industrial_connect_store', [IndustrialConnectController::class, 'store'])->name('admin.industrial_connect.store');
    Route::get('/admin/industrial_connect_edit/{id}', [IndustrialConnectController::class, 'edit'])->name('admin.industrial_connect.edit');
    Route::post('/admin/industrial_connect_update/{id}', [IndustrialConnectController::class, 'update'])->name('admin.industrial_connect.update');
    Route::get('/admin/industrial_connect_delete/{id}', [IndustrialConnectController::class, 'destroy'])->name('admin.industrial_connect.delete');
    Route::get('/admin/industrial_connect_status/{id}', [IndustrialConnectController::class, 'status'])->name('admin.industrial_connect.status');


    Route::get('/admin/ContactEnquirylist', [ContactController::class, 'contactenquirylist'])->name('admin.contactenquirylist');
    Route::get('/admin/ContactEnquirydelete/{id}', [ContactController::class, 'delete'])->name('admin.contactenquiry.delete');


    //Staff routes
    Route::get('/admin/staff', [StaffController::class, 'index'])->name('admin.staff');
    Route::get('/admin/staff_create', [StaffController::class, 'create'])->name('admin.staff.create');
    Route::post('/admin/staff_store', [StaffController::class, 'store'])->name('admin.staff.store');
    Route::get('/admin/staff_edit/{id}', [StaffController::class, 'edit'])->name('admin.staff.edit');
    Route::post('/admin/staff_update/{id}', [StaffController::class, 'update'])->name('admin.staff.update');
    Route::get('/admin/staff_delete/{id}', [StaffController::class, 'destroy'])->name('admin.staff.delete');
    Route::get('/admin/staff_status/{id}', [StaffController::class, 'status'])->name('admin.staff.status');


    //Attendance routes
    Route::get('/admin/attendance', [AttendanceController::class, 'index'])->name('admin.attendance');
    Route::get('/admin/attendance_delete/{id}', [AttendanceController::class, 'destroy'])->name('admin.attendance.delete');
    Route::get('/admin/attendance_status/{id}', [AttendanceController::class, 'status'])->name('admin.attendance.status');


    //Staff routes
    Route::get('/admin/eventagenda', [EventAgendaController::class, 'index'])->name('admin.eventagenda');
    Route::get('/admin/eventagenda_create', [EventAgendaController::class, 'create'])->name('admin.eventagenda.create');
    Route::post('/admin/eventagenda_store', [EventAgendaController::class, 'store'])->name('admin.eventagenda.store');
    Route::get('/admin/eventagenda_edit/{id}', [EventAgendaController::class, 'edit'])->name('admin.eventagenda.edit');
    Route::post('/admin/eventagenda_update/{id}', [EventAgendaController::class, 'update'])->name('admin.eventagenda.update');
    Route::get('/admin/eventagenda_delete/{id}', [EventAgendaController::class, 'destroy'])->name('admin.eventagenda.delete');
    Route::get('/admin/eventagenda_status/{id}', [EventAgendaController::class, 'status'])->name('admin.eventagenda.status');

    Route::get('/admin/vip', [VipController::class, 'index'])->name('admin.vip');
    Route::get('/admin/vip_create', [VipController::class, 'create'])->name('admin.vip.create');
    Route::post('/admin/vip_store', [VipController::class, 'store'])->name('admin.vip.store');
    Route::get('/admin/vip_edit/{id}', [VipController::class, 'edit'])->name('admin.vip.edit');
    Route::post('/admin/vip_update/{id}', [VipController::class, 'update'])->name('admin.vip.update');
    Route::get('/admin/vip_delete/{id}', [VipController::class, 'destroy'])->name('admin.vip.delete');
    Route::get('/admin/vip_status/{id}', [VipController::class, 'status'])->name('admin.vip.status');

    // route for zone
    Route::get('/admin/zone', [ZoneController::class, 'index'])->name('admin.zone');
    Route::get('/admin/zone_create', [ZoneController::class, 'create'])->name('admin.zone.create');
    Route::post('/admin/zone_store', [ZoneController::class, 'store'])->name('admin.zone.store');
    Route::get('/admin/zone_edit/{id}', [ZoneController::class, 'edit'])->name('admin.zone.edit');
    Route::post('/admin/zone_update/{id}', [ZoneController::class, 'update'])->name('admin.zone.update');
    Route::get('/admin/zone_delete/{id}', [ZoneController::class, 'destroy'])->name('admin.zone.delete');


    // membership
    Route::get('/admin/membership', [MembershipController::class, 'index'])->name('admin.membership');
    Route::get('/admin/membership_create', [MembershipController::class, 'create'])->name('admin.membership.create');
    Route::post('/admin/membership_store', [MembershipController::class, 'store'])->name('admin.membership.store');
    Route::get('/admin/membership_edit/{id}', [MembershipController::class, 'edit'])->name('admin.membership.edit');
    Route::post('/admin/membership_update/{id}', [MembershipController::class, 'update'])->name('admin.membership.update');
    Route::get('/admin/membership_delete/{id}', [MembershipController::class, 'destroy'])->name('admin.membership.delete');


    // designation
    Route::get('/admin/designation', [DesignationController::class, 'index'])->name('admin.designation');
    Route::get('/admin/designation_create', [DesignationController::class, 'create'])->name('admin.designation.create');
    Route::post('/admin/designation_store', [DesignationController::class, 'store'])->name('admin.designation.store');
    Route::get('/admin/designation_edit/{id}', [DesignationController::class, 'edit'])->name('admin.designation.edit');
    Route::post('/admin/designation_update/{id}', [DesignationController::class, 'update'])->name('admin.designation.update');
    Route::get('/admin/designation_delete/{id}', [DesignationController::class, 'destroy'])->name('admin.designation.delete');

    // route for team
    Route::get('/admin/team', [TeamController::class, 'index'])->name('admin.team');
    Route::get('/admin/team_create', [TeamController::class, 'create'])->name('admin.team.create');
    Route::post('/admin/team_store', [TeamController::class, 'store'])->name('admin.team.store');
    Route::get('/admin/team_edit/{id}', [TeamController::class, 'edit'])->name('admin.team.edit');
    Route::post('/admin/team_update/{id}', [TeamController::class, 'update'])->name('admin.team.update');
    Route::get('/admin/team_delete/{id}', [TeamController::class, 'destroy'])->name('admin.team.delete');


    // route for image
    Route::get('/admin/image', [ImageController::class, 'index'])->name('admin.image');
    Route::get('/admin/image_create', [ImageController::class, 'create'])->name('admin.image.create');
    Route::post('/admin/image_store', [ImageController::class, 'store'])->name('admin.image.store');
    Route::get('/admin/image_edit/{id}', [ImageController::class, 'edit'])->name('admin.image.edit');
    Route::post('/admin/image_update/{id}', [ImageController::class, 'update'])->name('admin.image.update');
    Route::get('/admin/image_delete/{id}', [ImageController::class, 'destroy'])->name('admin.image.delete');

    // route for Upcomings events
    Route::get('/admin/upcoming', [UpcomingController::class, 'index'])->name('admin.upcoming');
    Route::get('/admin/upcoming_create', [UpcomingController::class, 'create'])->name('admin.upcoming.create');
    Route::post('/admin/upcoming_store', [UpcomingController::class, 'store'])->name('admin.upcoming.store');
    Route::get('/admin/upcoming_edit/{id}', [UpcomingController::class, 'edit'])->name('admin.upcoming.edit');
    Route::post('/admin/upcoming_update/{id}', [UpcomingController::class, 'update'])->name('admin.upcoming.update');
    Route::get('/admin/upcoming_delete/{id}', [UpcomingController::class, 'destroy'])->name('admin.upcoming.delete');


    // route for Completed events
    Route::get('/admin/completed', [CompletedController::class, 'index'])->name('admin.completed');
    Route::get('/admin/completed_create', [CompletedController::class, 'create'])->name('admin.completed.create');
    Route::post('/admin/completed_store', [CompletedController::class, 'store'])->name('admin.completed.store');
    Route::get('/admin/completed_edit/{id}', [CompletedController::class, 'edit'])->name('admin.completed.edit');
    Route::post('/admin/completed_update/{id}', [CompletedController::class, 'update'])->name('admin.completed.update');
    Route::get('/admin/completed_delete/{id}', [CompletedController::class, 'destroy'])->name('admin.completed.delete');


    // route for zone
    Route::get('/admin/chapterleader', [RomChapterLeaderController::class, 'index'])->name('admin.chapterleader');
    Route::get('/admin/chapterleader_create', [RomChapterLeaderController::class, 'create'])->name('admin.chapterleader.create');
    Route::post('/admin/chapterleader_store', [RomChapterLeaderController::class, 'store'])->name('admin.chapterleader.store');
    Route::get('/admin/chapterleader_edit/{id}', [RomChapterLeaderController::class, 'edit'])->name('admin.chapterleader.edit');
    Route::post('/admin/chapterleader_update/{id}', [RomChapterLeaderController::class, 'update'])->name('admin.chapterleader.update');
    Route::get('/admin/chapterleader_delete/{id}', [RomChapterLeaderController::class, 'destroy'])->name('admin.chapterleader.delete');
});

Route::get('/clean-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:cache');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('event:cache');
    $exitCode = Artisan::call('event:clear');
    $exitCode = Artisan::call('optimize');
    return '<h1>Cache facade value cleared</h1>';
});
