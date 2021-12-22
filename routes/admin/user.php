<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ImpersonateController;
use Illuminate\Support\Facades\Route;

 Route::group(['middleware' => ['auth']], function(){    
    Route::prefix("admin")->group(function(){    
        Route::get('user', [UserController::class, 'index'])->name('user');
        Route::get('user/deactivate/{id}', [UserController::class, 'deactivate'])->name('user.deactivate');
        Route::get('user/activate/{id}', [UserController::class, 'activate'])->name('user.activate');
        Route::get('impersonate/user/{id}',[ImpersonateController::class, 'index'])->name('impersonate');
        Route::get('impersonate/destroy',[ImpersonateController::class,'destroy'])->name('impersonate.destroy');
    });
 });