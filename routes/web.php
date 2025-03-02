<?php


use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers\FrontController::class, 'index'])->name('front.index');

Route::get('/category/{category}', [Controllers\FrontController::class, 'category'])->name('front.category');

Route::get('/details/{fundraising:slug}', [Controllers\FrontController::class, 'details'])->name('front.details');

Route::get('/support/{fundraising:slug}', [Controllers\FrontController::class, 'support'])->name('front.support');

Route::get('/checkout/{fundraising:slug}/{totalAmountDonation}', [Controllers\FrontController::class, 'checkout'])->name('front.checkout');

Route::get('/checkout/create/{fundraising:slug}', [Controllers\FrontController::class, 'create'])->name('front.create');

Route::post('/checkout/store/{fundraising:slug}/{totalAmountDonation}', [Controllers\FrontController::class, 'store'])->name('front.store');

Route::get('/finish/{fundraising:slug}', [Controllers\FrontController::class, 'finish'])->name('front.finish');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard', [Controllers\DashboardController::class, 'index'])->name('dashboard');


    // Route Admin
    Route::prefix('admin')->name('admin.')->group(function () {

        Route::resource('categories', Controllers\CategoryController::class)
            ->middleware('role:owner');

        Route::resource('donaturs', Controllers\DonaturController::class)
            ->middleware('role:owner');

        Route::resource('fundraisers', Controllers\FundraiserController::class)
            ->middleware('role:owner')->except('index');

        Route::get('fundraisers', [Controllers\FundraiserController::class, 'index'])
            ->name('fundraisers.index');

        Route::resource('fundraising_withdrawals', Controllers\FundraisingWithdrawalController::class)
            ->middleware('role:owner|fundraiser');

        Route::post('fundraising_withdrawals/request/{fundraising:id}', [Controllers\FundraisingWithdrawalController::class, 'store'])
            ->middleware('role:fundraiser')
            ->name('fundraising_withdrawals.store');

        Route::resource('fundraising_phases', Controllers\FundraisingPhaseController::class)
            ->middleware('role:owner|fundraiser');

        Route::post('fundraising_phases/request/{fundraising}', [Controllers\FundraisingPhaseController::class, 'store'])
            ->middleware('role:fundraiser')
            ->name('fundraising_phases.store');

        Route::resource('fundraisings', Controllers\FundraisingController::class)
            ->middleware('role:owner|fundraiser');

        Route::post('/fundraisings/active/{fundraising}', [Controllers\FundraisingController::class, 'activate_fundraising'])
            ->middleware('role:owner')
            ->name('fundraisings_withdrawal.activate_fundraising');


        Route::post('/fundraisers/apply', [Controllers\DashboardController::class, 'apply_fundraiser'])->name('fundraisers.apply');

        Route::get('/my-withdrawals', [Controllers\DashboardController::class, 'my_withdrawals'])->name('my-withdrawals');

        Route::get('/my-withdrawals/details/{fundraisingWithdrawal}', [Controllers\DashboardController::class, 'my_withdrawals_details'])->name('my-withdrawals.details');
    });
});

require __DIR__ . '/auth.php';
