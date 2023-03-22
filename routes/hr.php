<?php
//Start of Master Controllers

use App\Http\Controllers\Applicant\ApplicantController;
use App\Http\Controllers\Hr\DepartmentController;
use App\Http\Controllers\Hr\EmployeeController;
use App\Http\Controllers\Hr\AttendenceController;
use App\Http\Controllers\Hr\DesignationController;
use App\Http\Controllers\Hr\HrApplicantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Master\HolidayTypesController;
use App\Http\Controllers\Hr\MangeHolidayController;

Route::prefix('hr')->group(function () {

    
    Route::prefix("employee")->group(function () {
        Route::get('/', [EmployeeController::class, 'index'])->name('hr.employee.index')->middleware('permission:hr-employee-index');
        Route::get('/create', [EmployeeController::class, 'create'])->name('hr.employee.create')->middleware('permission:hr-employee-create');
        Route::post('/store', [EmployeeController::class, 'store'])->name('hr.employee.store')->middleware('permission:hr-employee-store');
        Route::get('/show/{id}', [EmployeeController::class, 'show'])->name('hr.employee.show')->middleware('permission:hr-employee-show');
        Route::get('/edit/{id}', [EmployeeController::class, 'edit'])->name('hr.employee.edit')->middleware('permission:hr-employee-edit');
        Route::put('/update/{id}', [EmployeeController::class, 'update'])->name('hr.employee.update')->middleware('permission:hr-employee-update');
        Route::get('/destroy/{id}', [EmployeeController::class, 'destroy'])->name('hr.employee.destroy')->middleware('permission:hr-employee-destroy');
        Route::get('get-department', [EmployeeController::class, 'getHeadOfDepartment'])->name('hr.employee.getHeadOfDepartment');
        Route::get('get-department-employee', [EmployeeController::class, 'getDepartmentEmployee'])->name('hr.employee.getDepartmentEmployee');
    });

    
    Route::prefix("mangeholiday")->group(function () {
        Route::get('/', [MangeholidayController::class, 'index'])->name('hr.mangeholiday.index')->middleware('permission:hr-mangeholiday-index');
        Route::get('/create', [MangeholidayController::class, 'create'])->name('hr.mangeholiday.create')->middleware('permission:hr-mangeholiday-create');
        Route::post('/store', [MangeholidayController::class, 'store'])->name('hr.mangeholiday.store')->middleware('permission:hr-mangeholiday-store');
        Route::get('/show/{id}', [MangeholidayController::class, 'show'])->name('hr.mangeholiday.show')->middleware('permission:hr-mangeholiday-show');
        Route::get('/edit/{id}', [MangeholidayController::class, 'edit'])->name('hr.mangeholiday.edit')->middleware('permission:hr-mangeholiday-edit');
        Route::put('/update/{id}', [MangeholidayController::class, 'update'])->name('hr.mangeholiday.update')->middleware('permission:hr-mangeholiday-update');
        Route::get('/destroy/{id}', [MangeholidayController::class, 'destroy'])->name('hr.mangeholiday.destroy')->middleware('permission:hr-mangeholiday-destroy');
    });


    Route::prefix("department")->group(function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('hr.department.index')->middleware('permission:hr-department-index');
        Route::get('/create', [DepartmentController::class, 'create'])->name('hr.department.create')->middleware('permission:hr-department-create');
        Route::post('/store', [DepartmentController::class, 'store'])->name('hr.department.store')->middleware('permission:hr-department-store');
        Route::get('/show/{id}', [DepartmentController::class, 'show'])->name('hr.department.show')->middleware('permission:hr-department-show');
        Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('hr.department.edit')->middleware('permission:hr-department-edit');
        Route::put('/update/{id}', [DepartmentController::class, 'update'])->name('hr.department.update')->middleware('permission:hr-department-update');
        Route::get('/destroy/{id}', [DepartmentController::class, 'destroy'])->name('hr.department.destroy')->middleware('permission:hr-department-destroy');
    });

    Route::prefix("designation")->group(function () {
        Route::get('/', [DesignationController::class, 'index'])->name('hr.designation.index')->middleware('permission:hr-designation-index');
        Route::get('/create', [DesignationController::class, 'create'])->name('hr.designation.create')->middleware('permission:hr-designation-create');
        Route::post('/store', [DesignationController::class, 'store'])->name('hr.designation.store')->middleware('permission:hr-designation-store');
        Route::get('/show/{id}', [DesignationController::class, 'show'])->name('hr.designation.show')->middleware('permission:hr-designation-show');
        Route::get('/edit/{id}', [DesignationController::class, 'edit'])->name('hr.designation.edit')->middleware('permission:hr-designation-edit');
        Route::put('/update/{id}', [DesignationController::class, 'update'])->name('hr.designation.update')->middleware('permission:hr-designation-update');
        Route::get('/destroy/{id}', [DesignationController::class, 'destroy'])->name('hr.designation.destroy')->middleware('permission:hr-designation-destroy');
    });
    
    Route::prefix("applicant")->group(function () {
        Route::get('/', [HrApplicantController::class, 'index'])->name('hr.applicant.index')->middleware('permission:hr-applicant-index');
        Route::get('/create', [HrApplicantController::class, 'create'])->name('hr.applicant.create')->middleware('permission:hr-applicant-create');
        Route::post('/store', [HrApplicantController::class, 'store'])->name('hr.applicant.store')->middleware('permission:hr-applicant-store');
        Route::get('/show/{id}', [HrApplicantController::class, 'show'])->name('hr.applicant.show')->middleware('permission:hr-applicant-show');
        Route::get('/edit/{id}', [HrApplicantController::class, 'edit'])->name('hr.applicant.edit')->middleware('permission:hr-applicant-edit');
        Route::put('/update/{id}', [HrApplicantController::class, 'update'])->name('hr.applicant.update')->middleware('permission:hr-applicant-update');
        Route::get('/destroy/{id}', [HrApplicantController::class, 'destroy'])->name('hr.applicant.destroy')->middleware('permission:hr-applicant-destroy');
    });


    Route::prefix("attendence")->group(function () {
        Route::get('/', [AttendenceController::class, 'index'])->name('hr.attendence.index')->middleware('permission:hr-attendence-index');
        Route::get('/create', [AttendenceController::class, 'create'])->name('hr.attendence.create')->middleware('permission:hr-attendence-create');
        Route::post('/store', [AttendenceController::class, 'store'])->name('hr.attendence.store')->middleware('permission:hr-attendence-store');
        Route::get('/show/{id}', [AttendenceController::class, 'show'])->name('hr.attendence.show')->middleware('permission:hr-attendence-show');
        Route::get('/edit/{id}', [AttendenceController::class, 'edit'])->name('hr.attendence.edit')->middleware('permission:hr-attendence-update');
        Route::put('/update/{id}', [AttendenceController::class, 'update'])->name('hr.attendence.update')->middleware('permission:hr-attendence-update');
        Route::get('/destroy/{id}', [AttendenceController::class, 'destroy'])->name('hr.attendence.destroy')->middleware('permission:hr-attendence-destroy');
        Route::post('/checkIn', [AttendenceController::class, 'checkIn'])->name('hr.attendence.checkIn');//->middleware('permission:hr-attendence-checkin');
        Route::post('/checkOut/{id}', [AttendenceController::class, 'checkOut'])->name('hr.attendence.checkOut');//->middleware('permission:hr-attendence-checkout');
        Route::get('/getAttendenceDetail', [AttendenceController::class, 'getAttendenceDetail'])->name('hr.attendence.getAttendenceDetail');//->middleware('permission:hr-attendence-checkout');
    });

});
