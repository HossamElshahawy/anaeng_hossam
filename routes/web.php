<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\TermController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ArticalController;



//home page
Route::get('/', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

//Auth
Route::get('/regester', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::post('/handleregister', [App\Http\Controllers\AuthController::class, 'handleRegister'])->name('auth.handleRegister');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('/handleLogin', [App\Http\Controllers\AuthController::class, 'handleLogin'])->name('auth.handleLogin');
Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');

//Route::get('auth/google', [App\Http\Controllers\AuthController::class, 'redirectToGoogle']);
//Route::get('callback', [App\Http\Controllers\AuthController ::class, 'handleGoogleCallback']);

//Route::get('login/facebook', [App\Http\Controllers\AuthController::class, 'redirectToFacebook']);
//Route::get('login/facebook/callback', [App\Http\Controllers\AuthController ::class, 'handleFacebookCallback']);


Route::get('forget-password', [App\Http\Controllers\ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [App\Http\Controllers\ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [App\Http\Controllers\ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


//artcals
Route::get('articals', [App\Http\Controllers\ArticalController::class, 'view_all_artical'])->name('all.artical');
Route::get('articals/{id}', [App\Http\Controllers\ArticalController::class, 'show'])->name('show.artical');


//magazine
Route::get('magazines/', [App\Http\Controllers\MagazineController::class, 'view_all_magazine'])->name('all.magazines');
Route::get('magazine/{id}', [App\Http\Controllers\MagazineController::class, 'show'])->name('show.magazines');










Route::middleware('isLoginUser')->group(function(){

    Route::get('/createprofile', [App\Http\Controllers\ProfileController::class, 'render_profile'])->name('render_create_profile');
    Route::post('/createprofile_', [App\Http\Controllers\ProfileController::class, 'create_profile'])->name('create_profile');
    Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');

    Route::get('/socialmedia/createpost', [App\Http\Controllers\PostController::class, 'index'])->name('add.post');
    Route::post('/socialmedia/createpost_', [App\Http\Controllers\PostController::class, 'CreatePost'])->name('CreatePost');
    //plans
    Route::get('plans', [App\Http\Controllers\PlanController::class, 'plans_page'])->name('plans_page');
    Route::get('plans/{plan}', [App\Http\Controllers\PlanController::class, 'show'])->name("plans.show");
    Route::post('subscription', [App\Http\Controllers\PlanController::class, 'subscription'])->name("subscription.create");
});



//admin dashbore route

Route::middleware('isLoginAdmin')->group(function()
{
    //Artical
//    Route::get('portal/artical', [App\Http\Controllers\ArticalController::class, 'index'])->name('artical');
//    Route::get('portal/artical/create', [App\Http\Controllers\ArticalController::class, 'create'])->name('artical.create');
//    Route::post('portal/artical/store', [App\Http\Controllers\ArticalController::class, 'store'])->name('artical.store');
//    Route::get('portal/artical/edit/{id}', [App\Http\Controllers\ArticalController::class, 'edit'])->name('artical.edit');
//    Route::post('portal/artical/update/{id}', [App\Http\Controllers\ArticalController::class, 'update'])->name('artical.update');
//    Route::get('portal/artical/delete/{id}', [App\Http\Controllers\ArticalController::class, 'delete'])->name('artical.delete');
    Route::resource('portal/article',ArticalController::class);

    //parts
//    Route::get('portal/parts', [App\Http\Controllers\CategorieController::class, 'index'])->name('categorie.parts');
//    Route::get('portal/part/create', [App\Http\Controllers\CategorieController::class, 'create'])->name('categorie.create');
//    Route::post('portal/part/store', [App\Http\Controllers\CategorieController::class, 'store'])->name('categorie.store');
//    Route::get('portal/part/edit/{id}', [App\Http\Controllers\CategorieController::class, 'edit'])->name('categorie.edit');
//    Route::post('portal/part/update/{id}', [App\Http\Controllers\CategorieController::class, 'update'])->name('categorie.update');
//    Route::get('portal/part/delete/{id}', [App\Http\Controllers\CategorieController::class, 'delete'])->name('categorie.delete');
    Route::resource('portal/parts',CategorieController::class);
    //Magazine
    Route::get('portal/magazines', [App\Http\Controllers\MagazineController::class, 'all_admin_magazine'])->name('all_admin_magazine');
    Route::get('portal/magazine/create', [App\Http\Controllers\MagazineController::class, 'admin_magazine'])->name('magazine.create.page');
    Route::Post('portal/magazine/create_', [App\Http\Controllers\MagazineController::class, 'create'])->name('magazine.create.handle');
    Route::get('portal/magazine/edit/{id}', [App\Http\Controllers\MagazineController::class, 'edit_page'])->name('Magazine.page.edit');
    Route::post('portal/magazine/update/{id}', [App\Http\Controllers\MagazineController::class, 'edit_magazen'])->name('Magazine.edit');
    Route::get('portal/part/delete/{id}', [App\Http\Controllers\MagazineController::class, 'delete'])->name('Magazine.delete');

    //users
    Route::resource('portal/user',UserController::class);

    //course
    Route::resource('portal/course',CourseController::class);

    Route::resource('portal/section',SectionController::class);

    Route::resource('portal/video',VideoController::class);


    //terms and policy
    Route::resource('portal/terms',TermController::class);
    Route::resource('portal/policy',PolicyController::class);






});






//follow and unfollow
//Route::post('ajaxRequest', 'App\Http\Controllers\ProfileController@ajaxRequest')->name('ajaxRequest');
Route::post('ajaxRequest', [App\Http\Controllers\ProfileController::class, 'ajaxRequest'])->name('ajaxRequest');

//
//Route::get('search', function() {
//    $query = 'jimmie'; // <-- Change the query for testing.
//    $articles = App\Article::search($query)->get();
//    return $articles;
//})->name('search');

//edit profile
Route::get('edit_profile/{id}', [App\Http\Controllers\ProfileController::class, 'edit'])->name('edit_profile');
Route::PUT('update_profile/{id}', [App\Http\Controllers\ProfileController::class, 'update_profile'])->name('update_profile');

//edit user
Route::get('/user/edit/{id}', [App\Http\Controllers\AuthController::class, 'edit'])->name('edit_user');
Route::PUT('/user/edit/handel/{id}', [App\Http\Controllers\AuthController::class, 'handeledit'])->name('update_user');

Route::get('/social', [App\Http\Controllers\PostController::class, 'allposts'])->name('allposts');


//follow & unfollow
Route::post('/like-post/{id}',[App\Http\Controllers\PostController::class,'likePost'])->name('like.post');
Route::delete('/unlike-post/{id}',[App\Http\Controllers\PostController::class,'unlikePost'])->name('unlike.post');

Route::post('/user/{user}/follow', [App\Http\Controllers\ProfileController::class, 'follow'])->name('user.follow');
Route::delete('/user/{user}/unfollow', [App\Http\Controllers\ProfileController::class, 'unfollow'])->name('user.unfollow');

//get posts in profile
//Route::get('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'getPosts']);

Route::get('course',[\App\Http\Controllers\Front\IndexController::class,'allCourses']);
Route::get('course/{id}',[\App\Http\Controllers\Front\IndexController::class,'detailsCourse'])->name('show.course');

Route::get('handsa',[\App\Http\Controllers\Front\CategoryController::class,'index'])->name('handsa.index');

