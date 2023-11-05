<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserCaseDetailComponent;
use App\Http\Livewire\User\UserProfileComponent;
use App\Http\Livewire\User\UserChangePasswordComponent;


use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\AdminAllCasesListComponent;
use App\Http\Livewire\Admin\AdminCaseDetailComponent;
use App\Http\Livewire\Admin\AdminEditCaseComponent;
use App\Http\Livewire\Admin\AdminAddCaseComponent;
use App\Http\Livewire\Admin\AdminAddCitiesComponent;
use App\Http\Livewire\Admin\AdminCitiesListComponent;
use App\Http\Livewire\Admin\AdminCourtListComponent;
use App\Http\Livewire\Admin\AdminAddcourtComponent;
use App\Http\Livewire\Admin\AdminCreateUserComponent;
use App\Http\Livewire\Admin\AdminUserListComponent;
use App\Http\Livewire\Admin\AdminAddHiringStatusComponent;
use App\Http\Livewire\Admin\AdminChangePasswordComponent;
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

Route::get('/', function () {
    return view('auth.login');
});
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->group( function () {
    Route::get('/client/dashboard',UserDashboardComponent::class)->name('user.dashboard');
    Route::get('/client/case/detail/{case_id}',UserCaseDetailComponent::class)->name('user.casedetail');
    Route::get('/client/profile',UserProfileComponent::class)->name('user.profile');
    Route::get('/client/change/password',UserChangePasswordComponent::class)->name('changepassword');
     });
     Route::middleware(['auth:sanctum', 'verified','authadmin'])->group( function () {
      Route::get('/admin/dashboard',AdminDashboardComponent::class)->name('admin.dashboard');
      Route::get('/admin/all/cases/list',AdminAllCasesListComponent::class)->name('admin.caseslist');
      Route::get('/admin/case/detail/{case_id}',AdminCaseDetailComponent::class)->name('admin.casedetail');
      Route::get('/admin/edit/case/{case_id}',AdminEditCaseComponent::class)->name('admin.editcase');
      Route::get('/admin/add/new/case',AdminAddCaseComponent::class)->name('admin.addnewcase');
      Route::get('/admin/add/new/cities',AdminAddCitiesComponent::class)->name('admin.addcity');
      Route::get('/admin/all/cities/list',AdminCitiesListComponent::class)->name('admin.citieslist');
      Route::get('/admin/all/courts/list',AdminCourtListComponent::class)->name('admin.courtlist');
      Route::get('/admin/add/new/court',AdminAddcourtComponent::class)->name('admin.addcourt');
      Route::get('/admin/create/new/user',AdminCreateUserComponent::class)->name('admin.createuser');
      Route::get('/admin/all/user/list',AdminUserListComponent::class)->name('admin.allusers');
      Route::get('/admin/add/case/current/status/{case_id}',AdminAddHiringStatusComponent::class)->name('admin.updatestatus');
      Route::get('/admin/change/password',AdminChangePasswordComponent::class)->name('admin.cahngepassword');
    });
