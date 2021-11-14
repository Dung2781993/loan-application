<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\LoanRequestController;
use App\Http\Controllers\API\LoanController;
use App\Http\Controllers\API\PaymentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* 
* user (client) routes
*/

//API end point
//http://localhost/loanApplication/public/api/user/register

Route::group(['prefix' => 'user'], function () {

    /* guest routes */
    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);

    /* authenticated routes */
    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('details', [UserController::class, 'details']);
        Route::post('loan/request/create', [LoanRequestController::class, 'create']);
        Route::post('loan/request/all', [LoanRequestController::class, 'all']);
        Route::post('loan/view', [LoanController::class, 'viewOfferedLoans']);
        Route::post('loan/respond', [LoanController::class, 'respondOffer']);
        Route::post('repayment/make', [PaymentController::class, 'makePayment']);
    });
});



/* 
* admin (loan approval/creator) routes routes
*/
//http://localhost/loanApplication/public/api/admin/register
Route::group(['prefix' => 'admin'], function () {
    /* guest routes */
    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);

    /* authenticated routes */
    Route::group(['middleware' => 'auth:admin'], function () {
        Route::post('loan/offer', [LoanController::class, 'offerLoan']);
        Route::post('loan/details', [LoanController::class, 'details']);
        Route::post('loan/overdue', [LoanController::class, 'overdue']);
    });
});
