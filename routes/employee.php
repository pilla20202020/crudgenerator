<?php

//orginization dashboard

use App\Http\Controllers\ConsumernewlicenseController;
use App\Http\Controllers\ConsumerrecomendationindustryestablishmentController;
use App\Http\Controllers\ConsumerrenewallicenseController;
use App\Http\Controllers\Dashboard\EmployeeDashboardController;
use App\Http\Controllers\Applicant\ApplicantController;
use App\Models\Hr\Employee;
use App\Models\Hr\Leaveapplication;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth','verified'])->group(function () {

Route::get('/applicant/dashboard', [ApplicantController::class, 'dashboard'])->name('consumer.dashboard');
Route::get('/IndustryEstablishmentRecomendation', [ConsumerrecomendationindustryestablishmentController::class, 'index'])->middleware(['auth'])->name('consumer.form4.recommendationfoodindustryestablishment.index');
Route::get('/IndustryEstablishmentRecomendation/{id}', [ConsumerrecomendationindustryestablishmentController::class, 'show'])->middleware(['auth'])->name('consumer.form4.recommendationfoodindustryestablishment.show');
Route::get('/IndustryEstablishmentRecomendation/edit/{id}', [ConsumerrecomendationindustryestablishmentController::class, 'edit'])->middleware(['auth'])->name('consumer.form4.recommendationfoodindustryestablishment.edit');
Route::get('/IndustryEstablishmentRecomendation/tableView/{id}', [ConsumerrecomendationindustryestablishmentController::class, 'tableview'])->middleware(['auth'])->name('consumer.form4.recommendationfoodindustryestablishment.tableview');
});


Route::get('/RenewalIndustryLicense', [ConsumerrenewallicenseController::class, 'index'])->middleware(['auth'])->name('consumer.form5.renewalfoodindustrylicense.index');
Route::get('/RenewalIndustryLicense/{id}', [ConsumerrenewallicenseController::class, 'show'])->middleware(['auth'])->name('consumer.form5.renewalfoodindustrylicense.show');

Route::get('/NewLicenseIssue', [ConsumernewlicenseController::class, 'index'])->middleware(['auth'])->name('consumer.form7.newlicenseissue.index');
Route::get('/NewLicenseIssue/{id}', [ConsumernewlicenseController::class, 'show'])->middleware(['auth'])->name('consumer.form7.newlicenseissue.show');
Route::get('/NewLicenseIssue/edit/{id}', [ConsumernewlicenseController::class, 'edit'])->middleware(['auth'])->name('consumer.form7.newlicenseissue.edit');
Route::get('/NewLicenseIssue/tableView/{id}', [ConsumernewlicenseController::class, 'tableview'])->middleware(['auth'])->name('consumer.form7.newlicenseissue.tableview');


Route::get('/employee/dashboard', [EmployeeDashboardController::class, 'dashboard'])->middleware(['auth'])->name('employee.dashboard');


Route::get('/user/projects', function () {
    return view('consumer.projects.index');
})->name('consumer.projects.index');

Route::get('/user/tasks', function () {
    return view('consumer.tasks.index');
})->name('consumer.tasks.index');

Route::get('/user/expenses', function () {
    return view('consumer.expenses.index');
})->name('consumer.expenses.index');

Route::get('/user/attandance', function () {
    $users = User::where('id', auth()->user()->id)->get();
    return view('consumer.attandance.index', compact('users'));
})->name('consumer.attandance.index');

Route::get('/user/leaves', function () {
    $data = Leaveapplication::where('employee_id', auth()->user()->employee->employee_id)->orderBy('created_at', 'desc')->get();
    return view('consumer.leaves.ajax_index', compact('data'));
})->name('consumer.leaves.index');



// Route::get('/', function () {
//     return view('welcome');
// });



