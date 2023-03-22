<?php
use App\Http\Controllers\Form\GeneralFormController;
use App\Http\Controllers\Superadmin\PackageController;
use App\Http\Controllers\Eventsandmeetings\EventController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Project\WorkfromhomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Form10\AnalysisreportController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Form1\foodindustryinspectionreportController;
use App\Http\Controllers\Form2\LicensingfoodindustryController;
use App\Http\Controllers\Form3\NationalfoodandfeedreferencelaboratoryController;
use App\Http\Controllers\Form4\RecommendationfoodindustryestablishmentController;
use App\Http\Controllers\Form5\RenewalfoodindustrylicenseController;
use App\Http\Controllers\Form6\EstablishmentrecommendationsController;
use App\Http\Controllers\Form7\NewlicenseissueController;
use App\Http\Controllers\Form8\RegardingissuancelicenseController;
use App\Http\Controllers\Form9\LicensinginspectionbranchController;


Route::get('/usermanagement/permission', function () {
    return view('dftqc\usermanagement\permission\index');
})->name('usermanagement.index');


Route::get('/', function () {
    return redirect('/login');
});
Route::get('calander', function () {

    return view('dftqc.calander.index');
});

Route::middleware('auth')->group(function () {
    Route::get('lang/change', [LanguageController::class, 'change'])->name('changeLang');

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard')->middleware('role:super-super-admin|super-admin|admin');

    Route::get('/calendar', [DashboardController::class, 'calendar'])->name('getcalendar');
    Route::get('/full-calendar', [DashboardController::class, 'getEvent'])->name('fetchcalendardata');
    Route::post('/calendar/saveRelocateEventStartDate',  [DashboardController::class, 'saveRelocateEventStartDate'])
    ->name('saveRelocateEventStartDate');

    Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });

    Route::prefix("form")->group(function () {
        Route::get('/', [GeneralFormController::class, 'create'])->name('form.create');
        Route::get('/store', [GeneralFormController::class, 'store'])->name('form.store');
        Route::get('/make-table-nullable', [GeneralFormController::class, 'getTableNullablecreate'])->name('table.create');
        Route::get('/store', [GeneralFormController::class, 'store'])->name('form.store');
    });

    /**
     * Start of Master Routing
     */

    require __DIR__ . '/master.php';
    /**
     * End of Master Routing
     */

    Route::prefix("package")->group(function () {
        Route::get('/', [PackageController::class, 'index'])->name('superadmin.package.index');
        Route::get('/create', [PackageController::class, 'create'])->name('superadmin.package.create');
        Route::post('/store', [PackageController::class, 'store'])->name('superadmin.package.store');
        Route::get('/show/{id}', [PackageController::class, 'show'])->name('superadmin.package.show');
        Route::get('/edit/{id}', [PackageController::class, 'edit'])->name('superadmin.package.edit');
        Route::put('/update/{id}', [PackageController::class, 'update'])->name('superadmin.package.update');
        Route::get('/destroy/{id}', [PackageController::class, 'destroy'])->name('superadmin.package.destroy');
    });



    /** settings */

    Route::prefix("settings")->group(
        function () {
            Route::prefix("organization")->group(function () {
                Route::get('/', [OrganizationController::class, 'index'])->name('settings.organization.index')->middleware('permission:settings-organization-index');
                Route::get('/create', [OrganizationController::class, 'create'])->name('settings.organization.create')->middleware('permission:settings-organization-create');
                Route::post('/store', [OrganizationController::class, 'store'])->name('settings.organization.store')->middleware('permission:settings-organization-store');
                Route::get('/show/{id}', [OrganizationController::class, 'show'])->name('settings.organization.show')->middleware('permission:settings-organization-show');
                Route::get('/edit/{id}', [OrganizationController::class, 'edit'])->name('settings.organization.edit')->middleware('permission:settings-organization-edit');
                Route::put('/update/{id}', [OrganizationController::class, 'update'])->name('settings.organization.update')->middleware('permission:settings-organization-update');
                Route::get('/destroy/{id}', [OrganizationController::class, 'destroy'])->name('settings.organization.destroy')->middleware('permission:settings-organization-destroy');
            });

        Route::get('organizationsettings', [OrganizationSettingsController::class, 'index'])->name('settings.organizationsettings.index')->middleware('permission:settings-organizationsettings-index');
        Route::put('organizationsettings/update', [OrganizationSettingsController::class, 'update'])->name('settings.organizationsettings.update')->middleware('permission:settings-organizationsettings-update');
        Route::put('notificationsettings/update', [NotificationSettingsController::class, 'update'])->name('settings.notificationsettings.update')->middleware('permission:settings-notificationsettings-update');
    });

    /**
     * Start of hr routing
     */
    require __DIR__ . '/hr.php';

    /**
     * End of hr routing
     */

    Route::prefix("dictonary")->group(
        function () {
            Route::get('/', [DictonaryController::class, 'index'])->middleware('permission:assets-dictonary-index');
            Route::get('/add', [DictonaryController::class, 'create'])->middleware('permission:assets-dictonary-create');
            Route::get('/view', [DictonaryController::class, 'view'])->middleware('permission:assets-dictonary-view');
            Route::post('/store', [DictonaryController::class, 'store'])->middleware('permission:assets-dictonary-store');
            Route::get('/edit/{id}', [DictonaryController::class, 'edit'])->middleware('permission:assets-dictonary-edit');
            Route::post('/update/{id}', [DictonaryController::class, 'update'])->middleware('permission:assets-dictonary-update');
            Route::get('/destroy/{id}', [DictonaryController::class, 'destroy'])->middleware('permission:assets-dictonary-destroy');
        }
    );





    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');




    Route::prefix("project")->group(
        function () {
            Route::prefix("workfromhome")->group(function () {
                Route::get('/', [WorkfromhomeController::class, 'index'])->name('project.workfromhome.index')->middleware('permission:project-workfromhome-index');
                Route::get('/create', [WorkfromhomeController::class, 'create'])->name('project.workfromhome.create')->middleware('permission:project-workfromhome-create');
                Route::post('/store', [WorkfromhomeController::class, 'store'])->name('project.workfromhome.store')->middleware('permission:project-workfromhome-store');
                Route::get('/show/{id}', [WorkfromhomeController::class, 'show'])->name('project.workfromhome.show')->middleware('permission:project-workfromhome-show');
                Route::get('/edit/{id}', [WorkfromhomeController::class, 'edit'])->name('project.workfromhome.edit')->middleware('permission:project-workfromhome-edit');
                Route::put('/update/{id}', [WorkfromhomeController::class, 'update'])->name('project.workfromhome.update')->middleware('permission:project-workfromhome-update');
                Route::get('/destroy/{id}', [WorkfromhomeController::class, 'destroy'])->name('project.workfromhome.destroy')->middleware('permission:project-workfromhome-destroy');
            });
        }
    );




    Route::prefix("eventsandmeetings")->group(
        function () {
            Route::prefix("event")->group(function () {
                Route::get('/', [EventController::class, 'index'])->name('eventsandmeetings.event.index')->middleware('permission:eventsandmeetings-event-index');
                Route::get('/create', [EventController::class, 'create'])->name('eventsandmeetings.event.create')->middleware('permission:eventsandmeetings-event-create');
                Route::post('/store', [EventController::class, 'store'])->name('eventsandmeetings.event.store')->middleware('permission:eventsandmeetings-event-store');
                Route::get('/show/{id}', [EventController::class, 'show'])->name('eventsandmeetings.event.show')->middleware('permission:eventsandmeetings-event-show');
                Route::get('/edit/{id}', [EventController::class, 'edit'])->name('eventsandmeetings.event.edit')->middleware('permission:eventsandmeetings-event-edit');
                Route::put('/update/{id}', [EventController::class, 'update'])->name('eventsandmeetings.event.update')->middleware('permission:eventsandmeetings-event-update');
                Route::get('/destroy/{id}', [EventController::class, 'destroy'])->name('eventsandmeetings.event.destroy')->middleware('permission:eventsandmeetings-event-destroy');
            });

            Route::prefix("meeting")->group(
                function () {
                    Route::get('/', [MeetingController::class, 'index'])->name('eventsandmeetings.meeting.index')->middleware('permission:eventsandmeetings-meeting-index');
                    Route::get('/create', [MeetingController::class, 'create'])->name('eventsandmeetings.meeting.create')->middleware('permission:eventsandmeetings-meeting-create');
                    Route::post('/store', [MeetingController::class, 'store'])->name('eventsandmeetings.meeting.store')->middleware('permission:eventsandmeetings-meeting-store');
                    Route::get('/show/{id}', [MeetingController::class, 'show'])->name('eventsandmeetings.meeting.show')->middleware('permission:eventsandmeetings-meeting-show');
                    Route::get('/edit/{id}', [MeetingController::class, 'edit'])->name('eventsandmeetings.meeting.edit')->middleware('permission:eventsandmeetings-meeting-edit');
                    Route::put('/update/{id}', [MeetingController::class, 'update'])->name('eventsandmeetings.meeting.update')->middleware('permission:eventsandmeetings-meeting-update');
                    Route::get('/destroy/{id}', [MeetingController::class, 'destroy'])->name('eventsandmeetings.meeting.destroy')->middleware('permission:eventsandmeetings-meeting-destroy');
                }
            );
        }
    );

//DFTQC FORMS
//Form 1
Route::prefix("food-industry-inspection-report")->group(function () {
    Route::get('/', [foodindustryinspectionreportController::class, 'index'])->name('foodindustryinspectionreport.foodindustryinspectionreport.index')->middleware('permission:fiir-index');
    Route::get('/create', [foodindustryinspectionreportController::class, 'create'])->name('foodindustryinspectionreport.foodindustryinspectionreport.create')->middleware('permission:fiir-create');
    Route::post('/store', [foodindustryinspectionreportController::class, 'store'])->name('foodindustryinspectionreport.foodindustryinspectionreport.store')->middleware('permission:fiir-store');
    Route::get('/show/{id}', [foodindustryinspectionreportController::class, 'show'])->name('foodindustryinspectionreport.foodindustryinspectionreport.show')->middleware('permission:fiir-show');
    Route::get('/edit/{id}', [foodindustryinspectionreportController::class, 'edit'])->name('foodindustryinspectionreport.foodindustryinspectionreport.edit') ->middleware('permission:fiir-edit');
    Route::put('/update/{id}', [foodindustryinspectionreportController::class, 'update'])->name('foodindustryinspectionreport.foodindustryinspectionreport.update')->middleware('permission:fiir-update');
    Route::delete('/destroy/{id}', [foodindustryinspectionreportController::class, 'destroy'])->name('foodindustryinspectionreport.foodindustryinspectionreport.destroy')->middleware('permission:fiir-destory');
    Route::get('test/', [foodindustryinspectionreportController::class, 'test'])->name('foodindustryinspectionreport.foodindustryinspectionreport.test');
    Route::post('storeTest/', [foodindustryinspectionreportController::class, 'storeTest'])->name('foodindustryinspectionreport.foodindustryinspectionreport.storeTest');

});

//Form 9
Route::prefix("licensinginspectionbranch")->group(function () {
    Route::get('/', [LicensinginspectionbranchController::class, 'index'])->name('form9.licensinginspectionbranch.index')->middleware('permission:lib-index');
    Route::get('/create', [LicensinginspectionbranchController::class, 'create'])->name('form9.licensinginspectionbranch.create')->middleware('permission:lib-create');
    Route::post('/store', [LicensinginspectionbranchController::class, 'store'])->name('form9.licensinginspectionbranch.store')->middleware('permission:lib-store');
    Route::get('/show/{id}', [LicensinginspectionbranchController::class, 'show'])->name('form9.licensinginspectionbranch.show')->middleware('permission:lib-show');
    Route::get('/edit/{id}', [LicensinginspectionbranchController::class, 'edit'])->name('form9.licensinginspectionbranch.edit')->middleware('permission:lib-edit');
    Route::put('/update/{id}', [LicensinginspectionbranchController::class, 'update'])->name('form9.licensinginspectionbranch.update')->middleware('permission:lib-update');
    Route::delete('/destroy/{id}', [LicensinginspectionbranchController::class, 'destroy'])->name('form9.licensinginspectionbranch.destroy');
});


Route::prefix("licensingfoodindustry")->group(function () {
    Route::get('/', [LicensingfoodindustryController::class, 'index'])->name('form2.licensingfoodindustry.index');
    Route::get('/create', [LicensingfoodindustryController::class, 'create'])->name('form2.licensingfoodindustry.create');
    Route::post('/store', [LicensingfoodindustryController::class, 'store'])->name('form2.licensingfoodindustry.store');
    Route::get('/show/{id}', [LicensingfoodindustryController::class, 'show'])->name('form2.licensingfoodindustry.show');
    Route::get('/edit/{id}', [LicensingfoodindustryController::class, 'edit'])->name('form2.licensingfoodindustry.edit') ;
    Route::put('/update/{id}', [LicensingfoodindustryController::class, 'update'])->name('form2.licensingfoodindustry.update');
    Route::delete('/destroy/{id}', [LicensingfoodindustryController::class, 'destroy'])->name('form2.licensingfoodindustry.destroy');
});

Route::prefix("nationalfoodandfeedreferencelaboratory")->group(function () {
    Route::get('/', [NationalfoodandfeedreferencelaboratoryController::class, 'index'])->name('form3.nationalfoodandfeedreferencelaboratory.index');
    Route::get('/create', [NationalfoodandfeedreferencelaboratoryController::class, 'create'])->name('form3.nationalfoodandfeedreferencelaboratory.create');
    Route::post('/store', [NationalfoodandfeedreferencelaboratoryController::class, 'store'])->name('form3.nationalfoodandfeedreferencelaboratory.store');
    Route::get('/show/{id}', [NationalfoodandfeedreferencelaboratoryController::class, 'show'])->name('form3.nationalfoodandfeedreferencelaboratory.show');
    Route::get('/edit/{id}', [NationalfoodandfeedreferencelaboratoryController::class, 'edit'])->name('form3.nationalfoodandfeedreferencelaboratory.edit') ;
    Route::put('/update/{id}', [NationalfoodandfeedreferencelaboratoryController::class, 'update'])->name('form3.nationalfoodandfeedreferencelaboratory.update');
    Route::delete('/destroy/{id}', [NationalfoodandfeedreferencelaboratoryController::class, 'destroy'])->name('form3.nationalfoodandfeedreferencelaboratory.destroy');
});

Route::prefix("recommendationfoodindustryestablishment")->group(function () {
    Route::get('/', [RecommendationfoodindustryestablishmentController::class, 'index'])->name('form4.recommendationfoodindustryestablishment.index');
    Route::get('/create', [RecommendationfoodindustryestablishmentController::class, 'create'])->name('form4.recommendationfoodindustryestablishment.create');
    Route::post('/store', [RecommendationfoodindustryestablishmentController::class, 'store'])->name('form4.recommendationfoodindustryestablishment.store');
    Route::get('/show/{id}', [RecommendationfoodindustryestablishmentController::class, 'show'])->name('form4.recommendationfoodindustryestablishment.show');
    Route::get('/edit/{id}', [RecommendationfoodindustryestablishmentController::class, 'edit'])->name('form4.recommendationfoodindustryestablishment.edit') ;
    Route::put('/update/{id}', [RecommendationfoodindustryestablishmentController::class, 'update'])->name('form4.recommendationfoodindustryestablishment.update');
    Route::delete('/destroy/{id}', [RecommendationfoodindustryestablishmentController::class, 'destroy'])->name('form4.recommendationfoodindustryestablishment.destroy');

});

Route::prefix("renewalfoodindustrylicense")->group(function () {
    Route::get('/', [RenewalfoodindustrylicenseController::class, 'index'])->name('form5.renewalfoodindustrylicense.index');
    Route::get('/create', [RenewalfoodindustrylicenseController::class, 'create'])->name('form5.renewalfoodindustrylicense.create');
    Route::post('/store', [RenewalfoodindustrylicenseController::class, 'store'])->name('form5.renewalfoodindustrylicense.store');
    Route::get('/show/{id}', [RenewalfoodindustrylicenseController::class, 'show'])->name('form5.renewalfoodindustrylicense.show');
    Route::get('/edit/{id}', [RenewalfoodindustrylicenseController::class, 'edit'])->name('form5.renewalfoodindustrylicense.edit') ;
    Route::put('/update/{id}', [RenewalfoodindustrylicenseController::class, 'update'])->name('form5.renewalfoodindustrylicense.update');
    Route::delete('/destroy/{id}', [RenewalfoodindustrylicenseController::class, 'destroy'])->name('form5.renewalfoodindustrylicense.destroy');
});

Route::prefix("establishmentrecommendations")->group(function () {
    Route::get('/', [EstablishmentrecommendationsController::class, 'index'])->name('form6.establishmentrecommendations.index');
    Route::get('/create', [EstablishmentrecommendationsController::class, 'create'])->name('form6.establishmentrecommendations.create');
    Route::post('/store', [EstablishmentrecommendationsController::class, 'store'])->name('form6.establishmentrecommendations.store');
    Route::get('/show/{id}', [EstablishmentrecommendationsController::class, 'show'])->name('form6.establishmentrecommendations.show');
    Route::get('/edit/{id}', [EstablishmentrecommendationsController::class, 'edit'])->name('form6.establishmentrecommendations.edit') ;
    Route::put('/update/{id}', [EstablishmentrecommendationsController::class, 'update'])->name('form6.establishmentrecommendations.update');
    Route::delete('/destroy/{id}', [EstablishmentrecommendationsController::class, 'destroy'])->name('form6.establishmentrecommendations.destroy');
});

Route::prefix("newlicenseissue")->group(function () {
    Route::get('/', [NewlicenseissueController::class, 'index'])->name('form7.newlicenseissue.index');
    Route::get('/create', [NewlicenseissueController::class, 'create'])->name('form7.newlicenseissue.create');
    Route::post('/store', [NewlicenseissueController::class, 'store'])->name('form7.newlicenseissue.store');
    Route::get('/show/{id}', [NewlicenseissueController::class, 'show'])->name('form7.newlicenseissue.show');
    Route::get('/print/{id}', [NewlicenseissueController::class, 'print'])->name('form7.newlicenseissue.print');
    Route::get('/edit/{id}', [NewlicenseissueController::class, 'edit'])->name('form7.newlicenseissue.edit') ;
    Route::put('/update/{id}', [NewlicenseissueController::class, 'update'])->name('form7.newlicenseissue.update');
    Route::delete('/destroy/{id}', [NewlicenseissueController::class, 'destroy'])->name('form7.newlicenseissue.destroy');
    Route::get('tobeapprove', [NewlicenseissueController::class, 'toApprove'])->name('form7.recommendationfoodindustryestablishment.tobeapprove');
    Route::get('tobereject', [NewlicenseissueController::class, 'toReject'])->name('form7.recommendationfoodindustryestablishment.tobereject');
    Route::get('tobeforward', [NewlicenseissueController::class, 'toForward'])->name('form7.recommendationfoodindustryestablishment.tobeforward');
});

Route::prefix("regardingissuancelicense")->group(function () {
    Route::get('/', [RegardingissuancelicenseController::class, 'index'])->name('form8.regardingissuancelicense.index');
    Route::get('/create', [RegardingissuancelicenseController::class, 'create'])->name('form8.regardingissuancelicense.create');
    Route::post('/store', [RegardingissuancelicenseController::class, 'store'])->name('form8.regardingissuancelicense.store');
    Route::get('/show/{id}', [RegardingissuancelicenseController::class, 'show'])->name('form8.regardingissuancelicense.show');
    Route::get('/edit/{id}', [RegardingissuancelicenseController::class, 'edit'])->name('form8.regardingissuancelicense.edit') ;
    Route::put('/update/{id}', [RegardingissuancelicenseController::class, 'update'])->name('form8.regardingissuancelicense.update');
    Route::delete('/destroy/{id}', [RegardingissuancelicenseController::class, 'destroy'])->name('form8.regardingissuancelicense.destroy');
});


Route::prefix("analysisreport")->group(function () {
    Route::get('/', [AnalysisreportController::class, 'index'])->name('form10.analysisreport.index');
    Route::get('/create', [AnalysisreportController::class, 'create'])->name('form10.analysisreport.create');
    Route::post('/store', [AnalysisreportController::class, 'store'])->name('form10.analysisreport.store');
    Route::get('/show/{id}', [AnalysisreportController::class, 'show'])->name('form10.analysisreport.show');
    Route::get('/edit/{id}', [AnalysisreportController::class, 'edit'])->name('form10.analysisreport.edit') ;
    Route::put('/update/{id}', [AnalysisreportController::class, 'update'])->name('form10.analysisreport.update');
    Route::delete('/destroy/{id}', [AnalysisreportController::class, 'destroy'])->name('form10.analysisreport.destroy');
});


/* for first employee login */




Route::get('/logout', [ProfileController::class, 'logout'])->name('logout');
});




require __DIR__ . '/auth.php';
require __DIR__ . '/setting.php';
