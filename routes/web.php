<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\SuburbController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SliderSettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\PrivacyPolicyController;
use App\Http\Controllers\Admin\TermController;
use App\Http\Controllers\Admin\SiteFeeController;
use App\Http\Controllers\frontend\SellerController;
use App\Http\Controllers\frontend\ListingControler;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\Admin\AuctionSettingController;
use App\Http\Controllers\Admin\UserManagementController;
use App\Http\Controllers\Admin\UserAdsController;
use App\Http\Controllers\Admin\SpecialPriceController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\DashboardController;



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

Route::get('/', [FrontendController::class, 'home']);

Route::group(['middleware' => ['auth','isAdmin']] , function() {

Route::get('/admin/dashboard', [DashboardController::class, 'viewDashboard']);

    // admin routes
Route::get('/admin/sales-transactions', function () {
    return view("admin.sales-transactions");
});
Route::get('/admin/latest-ads', [AdminController::class, 'latestAds'])->name('latest-ads');
// Route::get('/admin/ads-details', [AdminController::class, 'adsDetails'])->name('ads-details');
Route::get('/admin/new-users', [UserController::class, 'newUsers'])->name('new-users');
Route::get('destroy-newuser/{id}', [UserController::class, 'destroyUser'])->name('destroy-newuser');

Route::get('/admin/latest-auctions', [AdminController::class, 'latestAuctions'])->name('latest-auctions');
// users
Route::get('/admin/user-management', [UserManagementController::class, 'viewManagement']);
Route::get('/destroy-management/{id}', [UserManagementController::class, 'destroyManagement']);
Route::get('create-newuser', [UserManagementController::class, 'User']);
Route::post('sendmail', [UserManagementController::class, 'sendemail']);
Route::get('view-mails',[UserManagementController::class, 'viewmails']);

Route::get('/admin/user-special-price', [SpecialPriceController::class, 'viewPrice']);
Route::post('/create-price', [SpecialPriceController::class, 'createPrice']);
Route::get('/destroy-price/{id}', [SpecialPriceController::class, 'destroyPrice']);
Route::post('update-ribbon', [TagController::class, 'updateRibbon']);

Route::get('/admin/user-ads', [UserAdsController::class, 'viewAds']);
Route::get('/destroy-ads', [UserAdsController::class, 'destroyAds']);

//banner setup
Route::get('/admin/banner-setup', [BannerController::class, 'banners'])->name('banners');
Route::post('create-banner', [BannerController::class, 'createBanner'])->name('banner');
Route::get('destroy-banner/{id}', [BannerController::class, 'destroyBanner'])->name('destroy');
Route::post('create-slider', [SliderController::class, 'createSlider'])->name('slider');
Route::get('destroy-slider/{id}', [SliderController::class, 'destroySlider']);
Route::post('update-setting', [SliderSettingController::class, 'updateSlidersetting']);

// All Content Setup
Route::get('/admin/about-us',[AboutusController::class, 'viewAbout']);

Route::post('/update-about', [AboutusController::class, 'updateAbout'])->name('update-about');

Route::get('/admin/privacy-policy', [PrivacyPolicyController::class, 'viewPrivacy']);
Route::post('/update-privacy', [PrivacyPolicyController::class, 'updateprivacyPolicy'])->name('update-privacy');


Route::get('/admin/terms-conditions',[TermController::class, 'viewTerm']);
Route::post('/update-terms', [TermController::class, 'updatetermsCondition'])->name('update-terms');

Route::get('/admin/site-fees', [SiteFeeController::class, 'viewSitefee']);
Route::post('/update-site-fees', [SiteFeeController::class, 'updatesiteFees'])->name('update-siteFees');



// category
Route::get('/admin/category', [CategoryController::class, 'viewCategory']);
});

Route::post('create-category', [CategoryController::class, 'createCategory'])->name('category');
Route::get('destroy-category/{id}', [CategoryController::class, 'destoryCategory'])->name('destroy-category');
Route::post('create-subcategory/{id}', [SubCategoryController::class, 'createSubCategory'])->name('subcategory');
Route::get('destroy-subcategory/{id}', [SubCategoryController::class, 'destorySubCategory'])->name('destroy-subcategory');

// Region/Town Setup
Route::get('/admin/city-suburbs', [CityController::class, 'viewCity']);
Route::post('create-city', [CityController::class, 'createCity'])->name('createCity');
Route::get('destroy-city/{id}', [CityController::class, 'destoryCity'])->name('destroy-city');
Route::post('create-subrub/{id}', [SuburbController::class, 'createSubrub'])->name('createSubrub');
Route::get('destroy-suburb/{id}', [SuburbController::class, 'destorySuburb'])->name('destroy-suburb');

// Auction Settings
Route::get('/admin/auction-settings', [AuctionSettingController::class, 'viewSetting']);

Route::post('update-auction-setting', [AuctionSettingController::class, 'updateAuctionSetting']);
Route::post('update-bid-setting', [AuctionSettingController::class, 'updatebidSetting']);
// users
Route::get('/admin/users', function () {
    return view("admin.admin-staff");
});
// Android/IOS Apps
Route::get('/admin/app-setup', function () {
    return view("admin.app-setup");
});

// frontend routes
Route::get('/home', function () {
    return view("welcome");
});
Route::get('/active-listings', function () {
    return view("frontend.active-listings");
});
Route::get('/listing-detail/{id}', [FrontendController::class, 'listingDetail']);
Route::get('/signup', [SellerController::class, 'signUp'])->name('seller-signup');

Route::post('seller-registration', [SellerController::class, 'sellerRegistration'])->name('seller-registration');

Route::get('/seller-product-listing', [ListingControler::class, 'productListing']);

Route::post('add-listings', [ListingControler::class, 'createListing'])->name('add-listings');

Route::get('/listing-filters', function () {
    return view("frontend.listing-filters");
});
Route::get('/add-listing-filter', function () {
    return view("frontend.add-listing-filter");
});
Route::get('/account-info', function () {
    return view("frontend.account-info");
});
Route::get('/messages', function () {
    return view("frontend.messages");
});
Route::get('/report', function () {
    return view("frontend.report");
});
Route::get('/report', function () {
    return view("frontend.report");
});

Route::get('/about', [FrontendController::class, 'about']);
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy']);
Route::get('/terms-condition', [FrontendController::class, 'terms']);
Route::get('/sitefees', [FrontendController::class, 'sitefees']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
