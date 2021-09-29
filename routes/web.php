<?php

use App\Http\Controllers\Admin\AdmAssemblyCtlr;
use App\Http\Controllers\Admin\AdmConstituency;
use App\Http\Controllers\Admin\AdmConstituencyCtlr;
use App\Http\Controllers\Admin\AdminCtlr;
use App\Http\Controllers\Admin\AdmMemberCtlr;
use App\Http\Controllers\Admin\AdmOfficerCtlr;
use App\Http\Controllers\Admin\AdmPoliticalParty;
use App\Http\Controllers\Admin\AdmPoliticalPartyCtlr;
use App\Http\Controllers\Admin\AdmSessionCtlr;
use App\Http\Controllers\MemberCtlr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::any('admin', function () {
    return redirect('admin/dashboard');
});

Route::any('admin/login', [AdminCtlr::class, 'login']);

Route::middleware(['admin'])->group(function () {

    Route::prefix('admin')->group(function () {

        Route::any('/', function () {
            return redirect('admin/dashboard'); 
        });

        Route::prefix('politicalparty')->group(function () {
            Route::any('/', [AdmPoliticalPartyCtlr::class, 'index']);
            Route::any('/add', [AdmPoliticalPartyCtlr::class, 'addPoliticalParty']);
            Route::any('/edit', [AdmPoliticalPartyCtlr::class, 'editPoliticalParty']);
        });

        Route::prefix('constituency')->group(function () {
            Route::any('/', [AdmConstituencyCtlr::class, 'index']);
            Route::any('/add', [AdmConstituencyCtlr::class, 'addConstituency']);
            Route::any('/edit', [AdmConstituencyCtlr::class, 'editConstituency']);
        });

        Route::prefix('member')->group(function () {
            Route::any('/', [AdmMemberCtlr::class, 'index']);
            Route::any('/add', [AdmMemberCtlr::class, 'addMember']);
            Route::any('/edit', [AdmMemberCtlr::class, 'editMember']);
            Route::any('/assign-member', [AdmMemberCtlr::class, 'assignMember']);
        });

        Route::prefix('assembly')->group(function () {
            Route::any('/', [AdmAssemblyCtlr::class, 'index']);
            Route::any('/add', [AdmAssemblyCtlr::class, 'addAssembly']);
            Route::any('/edit', [AdmAssemblyCtlr::class, 'editAssembly']);
        });

        Route::prefix('session')->group(function () {
            Route::any('/', [AdmSessionCtlr::class, 'index']);
            Route::any('/add', [AdmSessionCtlr::class, 'addSession']);
            Route::any('/edit', [AdmSessionCtlr::class, 'editSession']);
        });

        Route::prefix('officer')->group(function () {
            Route::any('/', [AdmOfficerCtlr::class, 'index']);
            Route::any('/add', [AdmOfficerCtlr::class, 'addOfficer']);
            Route::any('/edit', [AdmOfficerCtlr::class, 'editOfficer']);
        });

        Route::any('logout', [AdminCtlr::class, 'logout']);
        Route::any('dashboard', [AdminCtlr::class, 'index']);
    });
});
