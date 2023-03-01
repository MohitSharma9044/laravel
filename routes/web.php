<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Course\CourseController;
use App\Http\Controllers\Admin\Country\CountryController;
use App\Http\Controllers\Admin\Country\CountryDetailsController;
use App\Http\Controllers\Admin\University\UniversityController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// Front End Routes
Route::view('webinar', 'webinar');
Route::view('coming-soon', 'coming-soon');
Route::view('franchise-partners', 'franchise-partners');
Route::view('post-degree', 'post-degree');
Route::view('travel-accomodation', 'travel-accomodation');
Route::view('finance', 'finance');
Route::view('privacy-policy', 'privacy-policy');
Route::get('country/{slug}', [HomeController::class, 'countryDetails'])->name('country');
Route::get('country/{parant}/{slug}', [HomeController::class, 'parentCountryDetails'])->name('country.parent.name');
Route::get('details/{country_slug}/{slug}', [HomeController::class, 'universityDetails'])->name('details.country.slug');
Route::post('download-brouchure', [HomeController::class, 'downloadBrochure'])->name('download-brouchure');



// Admin Routes
Route::get('/admin', [AdminController::class, 'index']);
Route::post('admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

Route::group(['middleware' => ['AdminAuth']], function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard']);

    // Manage Country
    Route::get('admin/country', [CountryController::class, 'index']);
    Route::post('admin/country/create', [CountryController::class, 'countryCreate'])->name('admin.country.create');
    Route::get('admin/country/hide/{any}', [CountryController::class, 'countryHide'])->name('admin.country.hide');
    Route::get('admin/country/show/{any}', [CountryController::class, 'countryShow'])->name('admin.country.show');
    Route::get('admin/country/edit/{any}', [CountryController::class, 'countryEdit'])->name('admin.country.edit');
    Route::post('admin/country/update/{any}', [CountryController::class, 'countryUpdate'])->name('admin.country.update');
    Route::get('admin/country/delete/{any}', [CountryController::class, 'countryDelete'])->name('admin.country.delete');

    // Manage Country Details 
    Route::get('admin/country/create-details/{any}', [CountryDetailsController::class, 'index'])->name('admin.country.create-details');
    Route::post('admin/country/details/fact-add/{any}', [CountryDetailsController::class, 'addCountryFact'])->name('admin.country.details.fact-add');
    Route::post('admin/country/details/admission-add/{any}', [CountryDetailsController::class, 'addCountryAdmission'])->name('admin.country.details.admission-add');
    Route::post('admin/country/details/scholarship-add/{any}', [CountryDetailsController::class, 'addCountryScholarship'])->name('admin.country.details.scholarship-add');
    Route::post('admin/country/details/visa-add/{any}', [CountryDetailsController::class, 'addCountryVisa'])->name('admin.country.details.visa-add');
    Route::post('admin/country/details/cost-add/{any}', [CountryDetailsController::class, 'addCountryCostOfLiving'])->name('admin.country.details.cost-add');
    Route::post('admin/country/details/work-add/{any}', [CountryDetailsController::class, 'addCountryWorkOpportunity'])->name('admin.country.details.work-add');
    Route::post('admin/country/details/faqs-add/{any}', [CountryDetailsController::class, 'addCountryFaqs'])->name('admin.country.details.faqs-add');
    // Manage Course Routes
    Route::get('admin/course', [CourseController::class, 'index']);
    Route::post('admin/course/create', [CourseController::class, 'createCourse'])->name('admin.course.create');
    Route::get('admin/course/hide/{any}', [CourseController::class, 'hideCourse'])->name('admin.course.hide');
    Route::get('admin/course/show/{any}', [CourseController::class, 'showCourse'])->name('admin.course.show');
    Route::get('admin/course/edit/{any}', [CourseController::class, 'editCourse'])->name('admin.course.edit');
    Route::post('admin/course/update/{any}', [CourseController::class, 'updateCourse'])->name('admin.course.update');
    Route::get('admin/course/delete/{any}', [CourseController::class, 'deleteCourse'])->name('admin.course.delete');

    // Manage University Routes
    Route::get('admin/university', [UniversityController::class, 'index']);
    Route::post('admin/university/create', [UniversityController::class, 'createUnivercity'])->name('admin.university.create');
    Route::get('admin/university/list', [UniversityController::class, 'universityList']);
    Route::get('admin/university/enabled/{any}', [UniversityController::class, 'enabledUniversity'])->name('admin.university.enabled');
    Route::get('admin/university/disabled/{any}', [UniversityController::class, 'disabledUniversity'])->name('admin.university.disabled');
    Route::get('admin/university/edit/{any}', [UniversityController::class, 'editUniversity'])->name('admin.university.edit');
    Route::post('admin/university/update/{any}', [UniversityController::class, 'updateUniversity'])->name('admin.university.update');
    Route::post('admin/university/delete/{any}', [UniversityController::class, 'deleteUniversity'])->name('admin.university.delete');
    Route::post('admin/university/delete-program', [UniversityController::class, 'deleteProgramPoints'])->name('admin.university.delete-program');
    Route::post('admin/university/delete-course', [UniversityController::class, 'deleteCourse'])->name('admin.university.delete-course');
    Route::post('admin/university/delete-course-points', [UniversityController::class, 'deleteCoursePoints'])->name('admin.university.delete-course-points');
    Route::post('admin/university/delete-college', [UniversityController::class, 'deleteCollege'])->name('admin.university.delete-college');
    Route::post('admin/university/delete-college-points', [UniversityController::class, 'deleteCollegePoints'])->name('admin.university.delete-college-points');










});
