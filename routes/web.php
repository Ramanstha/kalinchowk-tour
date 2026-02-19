<?php

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

Route::get('/',[App\Http\Controllers\frontend\HomepageController::class,'Home'])->name('home');
Route::get('about-us',[App\Http\Controllers\frontend\HomepageController::class,'about'])->name('about');
Route::get('packages',[App\Http\Controllers\frontend\HomepageController::class,'package'])->name('package');
Route::get('services',[App\Http\Controllers\frontend\HomepageController::class,'service'])->name('service');
Route::get('contact-us',[App\Http\Controllers\frontend\HomepageController::class,'contact'])->name('contact-us');
Route::post('store-contact-message',[App\Http\Controllers\frontend\HomepageController::class,'storeContactMessage'])->name('store.contact.message');

Route::get('our-team',[App\Http\Controllers\frontend\PagesController::class,'ourteam'])->name('ourteam');
Route::get('gallery',[App\Http\Controllers\frontend\PagesController::class,'gallery'])->name('gallery');
Route::get('blogs',[App\Http\Controllers\frontend\PagesController::class,'blog'])->name('blog');
Route::get('blog-detail/{id}',[App\Http\Controllers\frontend\PagesController::class,'blogdetail'])->name('blog-detail');
Route::get('package-detail/{id}',[App\Http\Controllers\frontend\PagesController::class,'packagedetail'])->name('package-detail');


///////////////////////////////admin Dashboard/////////////////////////////

Route::get('admin-login',[App\Http\Controllers\Auth\LoginController::class,'Login'])->name('login');
Route::post('/admin-postlogin',[App\Http\Controllers\Auth\LoginController::class,'Postlogin'])->name('postlogin');

// Route::group(['middleware' => 'auth'], function (){
    
Route::get('dashboard',[App\Http\Controllers\backend\DashboardController::class,'Dashboard'])->name('dashboard');


//sidesetting
Route::get('view-sitesetting',[App\Http\Controllers\backend\SitesettingController::class,'View'])->name('view.sitesetting');
Route::get('create-sitesetting',[App\Http\Controllers\backend\SitesettingController::class,'Sitesetting'])->name('create.sitesetting');
Route::post('store-sitesetting',[App\Http\Controllers\backend\SitesettingController::class,'Store'])->name('store.sitesetting');
Route::get('edit-sitesetting/{id}',[App\Http\Controllers\backend\SitesettingController::class,'Edit'])->name('edit.sitesetting');
Route::post('update-sitesetting/{id}',[App\Http\Controllers\backend\SitesettingController::class,'Update'])->name('update.sitesetting');
Route::get('delete-sitesetting/{id}',[App\Http\Controllers\backend\SitesettingController::class,'Delete'])->name('delete.sitesetting');

//banner
Route::get('view-banner',[App\Http\Controllers\backend\BannerController::class,'View'])->name('view.banner');
Route::get('create-banner',[App\Http\Controllers\backend\BannerController::class,'Banner'])->name('create.banner');
Route::post('store-banner',[App\Http\Controllers\backend\BannerController::class,'Store'])->name('store.banner');
Route::get('edit-banner/{id}',[App\Http\Controllers\backend\BannerController::class,'Edit'])->name('edit.banner');
Route::post('update-banner/{id}',[App\Http\Controllers\backend\BannerController::class,'Update'])->name('update.banner');
Route::get('delete-banner/{id}',[App\Http\Controllers\backend\BannerController::class,'Delete'])->name('delete.banner');

//About-us
Route::get('view-aboutus',[App\Http\Controllers\backend\AboutusController::class,'View'])->name('view.aboutus');
Route::get('create-aboutus',[App\Http\Controllers\backend\AboutusController::class,'Aboutus'])->name('create.aboutus');
Route::post('store-aboutus',[App\Http\Controllers\backend\AboutusController::class,'Store'])->name('store.aboutus');
Route::get('edit-aboutus/{id}',[App\Http\Controllers\backend\AboutusController::class,'Edit'])->name('edit.aboutus');
Route::post('update-aboutus/{id}',[App\Http\Controllers\backend\AboutusController::class,'Update'])->name('update.aboutus');
Route::get('delete-aboutus/{id}',[App\Http\Controllers\backend\AboutusController::class,'Delete'])->name('delete.aboutus');

//Social Media
Route::get('view-socialmedia',[App\Http\Controllers\backend\SocialMediaController::class,'View'])->name('view.socialmedia');
Route::get('create-socialmedia',[App\Http\Controllers\backend\SocialMediaController::class,'Socialmedia'])->name('create.socialmedia');
Route::post('store-socialmedia',[App\Http\Controllers\backend\SocialMediaController::class,'Store'])->name('store.socialmedia');
Route::get('edit-socialmedia/{id}',[App\Http\Controllers\backend\SocialMediaController::class,'Edit'])->name('edit.socialmedia');
Route::post('update-socialmedia/{id}',[App\Http\Controllers\backend\SocialMediaController::class,'Update'])->name('update.socialmedia');
Route::get('delete-socialmedia/{id}',[App\Http\Controllers\backend\SocialMediaController::class,'Delete'])->name('delete.socialmedia');

//Contact
Route::get('view-contact',[App\Http\Controllers\backend\ContactController::class,'View'])->name('view.contact');
Route::get('create-contact',[App\Http\Controllers\backend\ContactController::class,'Contact'])->name('create.contact');
Route::post('store-contact',[App\Http\Controllers\backend\ContactController::class,'Store'])->name('store.contact');
Route::get('edit-contact/{id}',[App\Http\Controllers\backend\ContactController::class,'Edit'])->name('edit.contact');
Route::post('update-contact/{id}',[App\Http\Controllers\backend\ContactController::class,'Update'])->name('update.contact');
Route::get('delete-contact/{id}',[App\Http\Controllers\backend\ContactController::class,'Delete'])->name('delete.contact');

route::get('/user-contact-message',[App\Http\Controllers\backend\ContactController::class,'viewUserContactMessage'])->name('view_user.contact');
route::get('/user-message/{id}',[App\Http\Controllers\backend\ContactController::class,'viewUserMessage'])->name('view_user_message.contact');
route::get('/user-message-delete/{id}',[App\Http\Controllers\backend\ContactController::class,'userMessageDelete'])->name('delete_user_message.contact');


//Service
Route::get('view-service',[App\Http\Controllers\backend\ServiceController::class,'View'])->name('view.service');
Route::get('create-service',[App\Http\Controllers\backend\ServiceController::class,'Service'])->name('create.service');
Route::post('store-service',[App\Http\Controllers\backend\ServiceController::class,'Store'])->name('store.service');
Route::get('edit-service/{id}',[App\Http\Controllers\backend\ServiceController::class,'Edit'])->name('edit.service');
Route::post('update-service/{id}',[App\Http\Controllers\backend\ServiceController::class,'Update'])->name('update.service');
Route::get('delete-service/{id}',[App\Http\Controllers\backend\ServiceController::class,'Delete'])->name('delete.service');

//Gallery
Route::get('view-gallery',[App\Http\Controllers\backend\GalleryController::class,'View'])->name('view.gallery');
Route::get('create-gallery',[App\Http\Controllers\backend\GalleryController::class,'Gallery'])->name('create.gallery');
Route::post('store-gallery',[App\Http\Controllers\backend\GalleryController::class,'Store'])->name('store.gallery');
Route::get('edit-gallery/{id}',[App\Http\Controllers\backend\GalleryController::class,'Edit'])->name('edit.gallery');
Route::post('update-gallery/{id}',[App\Http\Controllers\backend\GalleryController::class,'Update'])->name('update.gallery');
Route::get('delete-gallery/{id}',[App\Http\Controllers\backend\GalleryController::class,'Delete'])->name('delete.gallery');

//Packages
Route::get('view-package',[App\Http\Controllers\backend\PackageController::class,'View'])->name('view.package');
Route::get('create-package',[App\Http\Controllers\backend\PackageController::class,'Package'])->name('create.package');
Route::post('store-package',[App\Http\Controllers\backend\PackageController::class,'Store'])->name('store.package');
Route::get('edit-package/{id}',[App\Http\Controllers\backend\PackageController::class,'Edit'])->name('edit.package');
Route::post('update-package/{id}',[App\Http\Controllers\backend\PackageController::class,'Update'])->name('update.package');
Route::get('delete-package/{id}',[App\Http\Controllers\backend\PackageController::class,'Delete'])->name('delete.package');

//Our team
Route::get('view-team',[App\Http\Controllers\backend\TeamController::class,'View'])->name('view.team');
Route::get('create-team',[App\Http\Controllers\backend\TeamController::class,'Team'])->name('create.team');
Route::post('store-team',[App\Http\Controllers\backend\TeamController::class,'Store'])->name('store.team');
Route::get('edit-team/{id}',[App\Http\Controllers\backend\TeamController::class,'Edit'])->name('edit.team');
Route::post('update-team/{id}',[App\Http\Controllers\backend\TeamController::class,'Update'])->name('update.team');
Route::get('delete-team/{id}',[App\Http\Controllers\backend\TeamController::class,'Delete'])->name('delete.team');

//Testimonials
Route::get('view-testimonial',[App\Http\Controllers\backend\TestimonialsController::class,'View'])->name('view.testimonial');
Route::get('create-testimonial',[App\Http\Controllers\backend\TestimonialsController::class,'Testimonials'])->name('create.testimonial');
Route::post('store-testimonial',[App\Http\Controllers\backend\TestimonialsController::class,'Store'])->name('store.testimonial');
Route::get('edit-testimonial/{id}',[App\Http\Controllers\backend\TestimonialsController::class,'Edit'])->name('edit.testimonial');
Route::post('update-testimonial/{id}',[App\Http\Controllers\backend\TestimonialsController::class,'Update'])->name('update.testimonial');
Route::get('delete-testimonial/{id}',[App\Http\Controllers\backend\TestimonialsController::class,'Delete'])->name('delete.testimonial');

//Gallery
Route::get('view-gallery',[App\Http\Controllers\backend\GalleryController::class,'View'])->name('view.gallery');
Route::get('create-gallery',[App\Http\Controllers\backend\GalleryController::class,'Gallery'])->name('create.gallery');
Route::post('store-gallery',[App\Http\Controllers\backend\GalleryController::class,'Store'])->name('store.gallery');
Route::get('edit-gallery/{id}',[App\Http\Controllers\backend\GalleryController::class,'Edit'])->name('edit.gallery');
Route::post('update-gallery/{id}',[App\Http\Controllers\backend\GalleryController::class,'Update'])->name('update.gallery');
Route::get('delete-gallery/{id}',[App\Http\Controllers\backend\GalleryController::class,'Delete'])->name('delete.gallery');

//Blogs
Route::get('view-blog',[App\Http\Controllers\backend\BlogController::class,'View'])->name('view.blog');
Route::get('create-blog',[App\Http\Controllers\backend\BlogController::class,'Blog'])->name('create.blog');
Route::post('store-blog',[App\Http\Controllers\backend\BlogController::class,'Store'])->name('store.blog');
Route::get('edit-blog/{id}',[App\Http\Controllers\backend\BlogController::class,'Edit'])->name('edit.blog');
Route::post('update-blog/{id}',[App\Http\Controllers\backend\BlogController::class,'Update'])->name('update.blog');
Route::get('delete-blog/{id}',[App\Http\Controllers\backend\BlogController::class,'Delete'])->name('delete.blog');
// });

Route::get('reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});
Route::get('/run-migrations', function () {
      Artisan::call('migrate', [
       '--force' => true
    ]);
});
Route::get('/key', function () {
    Artisan::call('key:generate', [
       '--force' => true
    ]);
});
Route::get('/storage', function () {
    Artisan::call('storage:link', [
       '--force' => true
    ]);
});