<?php
//Start of Master Controllers
use App\Http\Controllers\Master\CityController;
use App\Http\Controllers\Master\CountryController;
use App\Http\Controllers\Master\DistrictController;
use App\Http\Controllers\Master\StateController;



//end of master
use App\Http\Controllers\Master\ModuleController;
use Illuminate\Support\Facades\Route;

Route::prefix("master")->group(
    function () {
        Route::prefix("module")->group(function () {
            Route::get('/', [ModuleController::class, 'index'])->name('master.module.index')->middleware('permission:master-module-index');
            Route::get('/create', [ModuleController::class, 'create'])->name('master.module.create')->middleware('permission:master-module-create');
            Route::post('/store', [ModuleController::class, 'store'])->name('master.module.store')->middleware('permission:master-module-store');
            Route::get('/show/{id}', [ModuleController::class, 'show'])->name('master.module.show')->middleware('permission:master-module-show');
            Route::get('/edit/{id}', [ModuleController::class, 'edit'])->name('master.module.edit')->middleware('permission:master-module-edit');
            Route::put('/update/{id}', [ModuleController::class, 'update'])->name('master.module.update')->middleware('permission:master-module-update');
            Route::get('/destroy/{id}', [ModuleController::class, 'destroy'])->name('master.module.destroy')->middleware('permission:master-module-destroy');
        });

        Route::prefix("country")->group(function () {
            Route::get('/', [CountryController::class, 'index'])->name('master.country.index')->middleware('permission:master-country-index');
            Route::get('/create', [CountryController::class, 'create'])->name('master.country.create')->middleware('permission:master-country-create');
            Route::post('/store', [CountryController::class, 'store'])->name('master.country.store')->middleware('permission:master-country-store');
            Route::get('/show/{id}', [CountryController::class, 'show'])->name('master.country.show')->middleware('permission:master-country-show');
            Route::get('/edit/{id}', [CountryController::class, 'edit'])->name('master.country.edit')->middleware('permission:master-country-edit');
            Route::put('/update/{id}', [CountryController::class, 'update'])->name('master.country.update')->middleware('permission:master-country-update');
            Route::get('/destroy/{id}', [CountryController::class, 'destroy'])->name('master.country.destroy')->middleware('permission:master-country-destroy');
        });

        Route::prefix("state")->group(
            function () {
                Route::get('/', [StateController::class, 'index'])->name('master.state.index')->middleware('permission:master-state-index');
                Route::get('/create', [StateController::class, 'create'])->name('master.state.create')->middleware('permission:master-state-create');
                Route::post('/store', [StateController::class, 'store'])->name('master.state.store')->middleware('permission:master-state-store');
                Route::get('/show/{id}', [StateController::class, 'show'])->name('master.state.show')->middleware('permission:master-state-show');
                Route::get('/edit/{id}', [StateController::class, 'edit'])->name('master.state.edit')->middleware('permission:master-state-edit');
                Route::put('/update/{id}', [StateController::class, 'update'])->name('master.state.update')->middleware('permission:master-state-update');
                Route::get('/destroy/{id}', [StateController::class, 'destroy'])->name('master.state.destroy')->middleware('permission:master-state-destroy');
                Route::get('get-states', [StateController::class, 'getState'])->name('master.state.getState');//->middleware('permission:master-state-getstate');
            }
        );

        Route::prefix("district")->group(
            function () {
                Route::get('/', [DistrictController::class, 'index'])->name('master.district.index')->middleware('permission:master-district-index');
                Route::get('/create', [DistrictController::class, 'create'])->name('master.district.create')->middleware('permission:master-district-create');
                Route::post('/store', [DistrictController::class, 'store'])->name('master.district.store')->middleware('permission:master-district-store');
                Route::get('/show/{id}', [DistrictController::class, 'show'])->name('master.district.show')->middleware('permission:master-district-store');
                Route::get('/edit/{id}', [DistrictController::class, 'edit'])->name('master.district.edit')->middleware('permission:master-district-edit');
                Route::put('/update/{id}', [DistrictController::class, 'update'])->name('master.district.update')->middleware('permission:master-district-update');
                Route::get('/destroy/{id}', [DistrictController::class, 'destroy'])->name('master.district.destroy')->middleware('permission:master-district-destroy');
                Route::get('get-districts', [DistrictController::class, 'getDistrict'])->name('master.state.getDistrict');//->middleware('permission:master-district-getdistrict');
            }
        );

        Route::prefix("city")->group(
            function () {
                Route::get('/', [CityController::class, 'index'])->name('master.city.index')->middleware('permission:master-city-index');
                Route::get('/create', [CityController::class, 'create'])->name('master.city.create')->middleware('permission:master-city-create');
                Route::post('/store', [CityController::class, 'store'])->name('master.city.store')->middleware('permission:master-city-store');
                Route::get('/show/{id}', [CityController::class, 'show'])->name('master.city.show')->middleware('permission:master-city-show');
                Route::get('/edit/{id}', [CityController::class, 'edit'])->name('master.city.edit')->middleware('permission:master-city-edit');
                Route::put('/update/{id}', [CityController::class, 'update'])->name('master.city.update')->middleware('permission:master-city-update');
                Route::get('/destroy/{id}', [CityController::class, 'destroy'])->name('master.city.destroy')->middleware('permission:master-city-destroy');

                Route::get('/checkvalidation', [CityController::class, 'checkValidation'])->name('master.city.checkValidation')->middleware('permission:master-city-checkValidation');

                Route::get('get-city', [CityController::class, 'getCity'])->name('master.state.getCity');//->middleware('permission:master-city-getCity');
            }
        );
        Route::get('usersettings', [App\Http\Controllers\Settings\UserSettingController::class, 'index'])->name('usersettings.index')->middleware('permission:master-usersettings-index');
        Route::put('usersettings/update', [App\Http\Controllers\Settings\UserSettingController::class, 'update'])->name('usersettings.update')->middleware('permission:master-usersettings-update');
    }
);
//End of master Routing
