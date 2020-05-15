<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->name('main');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/smokefree', function () {
    return view('smokefree');
})->name('smokefree');

Route::get('/mission', function () {
    return view('mission');
})->name('mission');

Route::get('/ourfounder', function () {
    return view('ourfounder');
})->name('ourfounder');

Route::get('/ourvalues', function () {
    return view('ourvalues');
})->name('ourvalues');

Route::get('/ourteam', function () {
    return view('ourteam');
})->name('ourteam');

Route::get('/ourobjectives', function () {
    return view('ourobjectives');
})->name('ourobjectives');

Route::get('/boardobjectives', function () {
    return view('boardobjectives');
})->name('boardobjectives');

Route::get('/gitaccount', function () {
    return view('gitaccount');
})->name('gitaccount');

Route::get('/gitfinancials', function () {
    return view('gitfinancials');
})->name('gitfinancials');

Route::get('/gitfy', function () {
    return view('gitfy');
})->name('gitfy');

Route::get('/healthcare', function () {
    return view('healthcare');
})->name('healthcare');

Route::get('/billiontree', function () {
    return view('billiontree');
})->name('billiontree');

Route::get('/greenwall', function () {
    return view('greenwall');
})->name('greenwall');

Route::get('/nursery', function () {
    return view('nursery');
})->name('nursery');

Route::get('/environment', function () {
    return view('environment');
})->name('environment');

Route::get('/savewater', function () {
    return view('savewater');
})->name('savewater');

Route::get('/apbio', function () {
    return view('apbio');
})->name('apbio');

Route::get('/campaign', function () {
    return view('campaign');
})->name('campaign');

Route::get('/organic', function () {
    return view('organic');
})->name('organic');

Route::get('/livlihood', function () {
    return view('livlihood');
})->name('livlihood');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/volunteer', function () {
    return view('volunteer');
})->name('volunteer');

Route::get('/onlinefund', function () {
    return view('onlinefund');
})->name('onlinefund');

Route::get('/smvolunteer', function () {
    return view('smvolunteer');
})->name('smvolunteer');

Route::get('/crowdfund', function () {
    return view('crowdfund');
})->name('crowdfund');

Route::get('/awards', function () {
    return view('awards');
})->name('awards');

Route::get('/csr', function () {
    return view('csr');
})->name('csr');

Route::get('/reports', function () {
    return view('reports');
})->name('reports');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['restrictToAdmin']], function () {
    Route::get('admin/menus', 
        ["uses"=>"Admin\AdminMenusController@index",'as'=>'adminDisplayMenus']
    );

    Route::get('admin/searchAchievements', 
        ["uses"=>"Admin\AchievementsController@searchAchievements",'as'=>'adminSearchAchievements']
    );

    Route::get('admin/achievements', 
        ["uses"=>"Admin\AchievementsController@index",'as'=>'adminDisplayAchievements']
    );
    
    // edit Achievement
    Route::get('admin/editAchievementForm/{id}', 
        ["uses"=>"Admin\AchievementsController@editAchievementForm", 
        "as"=> "adminEditAchievementForm"]
    );
    // Update Achievement
    Route::post('admin/updateAchievement/{id}', 
        ["uses"=>"Admin\AchievementsController@updateAchievement", 
        "as"=> "adminUpdateAchievement"]
    );    
       
    // Delete Achievement
    Route::get('admin/deleteAchievement/{id}', 
        ["uses"=>"Admin\AchievementsController@deleteAchievement", 
        "as"=> "adminDeleteAchievement"]
    );

    //display create Achievement form
    Route::get('admin/createAchievementForm', 
        ["uses"=>"Admin\AchievementsController@createAchievementForm", 
        "as"=> "adminCreateAchievementForm"]
    );

    //send new Achievement data to database
    Route::post('admin/sendCreateAchievementForm/', 
        ["uses"=>"Admin\AchievementsController@sendCreateAchievementForm", 
        "as"=> "adminSendCreateAchievementForm"]
    );
    // end Achievements
});