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

/*Route::get('/', function () {
    return view('welcome');
})->name('main');*/

Route::get('/', 
        ["uses"=>"DonationsController@index", 
        "as"=> "main"]
    );

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/fundraise', function () {
    return view('fundraise');
})->name('fundraise');


Route::get('/donate', function () {
    return view('donate');
})->name('donate');

Route::get('/smokefree', function () {
    return view('smokefree');
})->name('smokefree');

Route::get('/termsandconditions', function () {
    return view('termsandconditions');
})->name('termsandconditions');

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

Route::get('/personaldetail', function () {
    return view('personaldetail');
})->name('personaldetail');

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

Route::get('findFundraise/{id}', 
        ["uses"=>"DonationsController@findFundraise", 
        "as"=> "findFundraise"]
    );

Route::get('/news', function () {
    return view('news');
})->name('news');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/facebooklogin', function () {
    return view('facebooklogin');
})->name('facebooklogin');

Route::post('facebookstore', ["uses"=>"FacebookController@store",'as'=>'facebookstore']
);

Route::post('facebookpost', ["uses"=>"FacebookController@postLink",'as'=>'facebookpost']
);

Route::get('donate', 
    ["uses"=>"DonationsController@getDonationsByCategory",'as'=>'donate']
);

Route::post('sendCreateFundraiseForm', 
    ["uses"=>"DonationsController@sendCreateFundraiseForm", 
    "as"=> "sendCreateFundraiseForm"]
);
Route::get('getActiveFundraiseList', 
    ["uses"=>"DonationsController@getActiveFundraiseList", 
    "as"=> "getActiveFundraiseList"]
);

Route::post('sendCreateVolunteerForm', 
    ["uses"=>"DonationsController@sendCreateVolunteerForm", 
    "as"=> "sendCreateVolunteerForm"]
);


Route::post('personalDetail', 
    ["uses"=>"DonationsController@personalDetail",'as'=>'personalDetail']
);
Route::get('pay','RazorpayController@pay')->name('pay');
Route::post('doPayment','RazorpayController@doPayment')->name('doPayment');

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

    // Roles
    // get all Roles
    Route::get('admin/roles', 
        ["uses"=>"Admin\AdminRolesController@index",'as'=>'adminDisplayRoles']
    );
    // edit Role
    Route::get('admin/editRoleForm/{id}', 
        ["uses"=>"Admin\AdminRolesController@editRoleForm", 
        "as"=> "adminEditRoleForm"]
    );
    // Update Role
    Route::post('admin/updateRole/{id}', 
        ["uses"=>"Admin\AdminRolesController@updateRole", 
        "as"=> "adminUpdateRole"]
    );
    // Delete Role
    Route::get('admin/deleteRole/{id}', 
        ["uses"=>"Admin\AdminRolesController@deleteRole", 
        "as"=> "adminDeleteRole"]
    );

    //display create Role form
    Route::get('admin/createRoleForm', 
        ["uses"=>"Admin\AdminRolesController@createRoleForm", 
        "as"=> "adminCreateRoleForm"]
    );

    //send new Role data to database
    Route::post('admin/sendCreateRoleForm/', 
        ["uses"=>"Admin\AdminRolesController@sendCreateRoleForm", 
        "as"=> "adminSendCreateRoleForm"]
    );
    // end Roles

    // Menus
    // get all Menus
    Route::get('admin/menus', 
        ["uses"=>"Admin\AdminMenusController@index",'as'=>'adminDisplayMenus']
    );
    // edit Menu
    Route::get('admin/editMenuForm/{id}', 
        ["uses"=>"Admin\AdminMenusController@editMenuForm", 
        "as"=> "adminEditMenuForm"]
    );
    // Update Menu
    Route::post('admin/updateMenu/{id}', 
        ["uses"=>"Admin\AdminMenusController@updateMenu", 
        "as"=> "adminUpdateMenu"]
    );
    // Delete Menu
    Route::get('admin/deleteMenu/{id}', 
        ["uses"=>"Admin\AdminMenusController@deleteMenu", 
        "as"=> "adminDeleteMenu"]
    );

    //display create Menu form
    Route::get('admin/createMenuForm', 
        ["uses"=>"Admin\AdminMenusController@createMenuForm", 
        "as"=> "adminCreateMenuForm"]
    );

    //send new Menu data to database
    Route::post('admin/sendCreateMenuForm/', 
        ["uses"=>"Admin\AdminMenusController@sendCreateMenuForm", 
        "as"=> "adminSendCreateMenuForm"]
    );
    

    Route::get('admin/searchMenus', 
        ["uses"=>"Admin\AdminMenusController@searchMenus",'as'=>'adminSearchMenus']
    );
    // end Menus

    // Carousel Images
    // get all CarouselImages
    Route::get('admin/carouselimages', 
        ["uses"=>"Admin\AdminCarouselImageController@index",'as'=>'adminDisplayCarouselImages']
    );
    // edit CarouselImage
    Route::get('admin/editCarouselImageForm/{id}', 
        ["uses"=>"Admin\AdminCarouselImageController@editCarouselImageForm", 
        "as"=> "adminEditCarouselImageForm"]
    );
    // Update CarouselImage
    Route::post('admin/updateCarouselImage/{id}', 
        ["uses"=>"Admin\AdminCarouselImageController@updateCarouselImage", 
        "as"=> "adminUpdateCarouselImage"]
    );
    // Delete CarouselImage
    Route::get('admin/deleteCarouselImage/{id}', 
        ["uses"=>"Admin\AdminCarouselImageController@deleteCarouselImage", 
        "as"=> "adminDeleteCarouselImage"]
    );

    //display create CarouselImage form
    Route::get('admin/createCarouselImageForm', 
        ["uses"=>"Admin\AdminCarouselImageController@createCarouselImageForm", 
        "as"=> "adminCreateCarouselImageForm"]
    );

    //send new CarouselImage data to database
    Route::post('admin/sendCreateCarouselImageForm/', 
        ["uses"=>"Admin\AdminCarouselImageController@sendCreateCarouselImageForm", 
        "as"=> "adminSendCreateCarouselImageForm"]
    );
    // end CarouselImages

    // get all Users
    Route::get('admin/users', 
        ["uses"=>"Admin\AdminUsersController@index",'as'=>'adminDisplayUsers']
    );
    // edit User
    Route::get('admin/editUserForm/{id}', 
        ["uses"=>"Admin\AdminUsersController@editUserForm", 
        "as"=> "adminEditUserForm"]
    );
    // Update user
    Route::post('admin/updateUser/{id}', 
        ["uses"=>"Admin\AdminUsersController@updateUser", 
        "as"=> "adminUpdateUser"]
    );
    // Delete User
    Route::get('admin/deleteUser/{id}', 
        ["uses"=>"Admin\AdminUsersController@deleteUser", 
        "as"=> "adminDeleteUser"]
    );

    // Gallery Images
    // get all GalleryImages
    Route::get('admin/galleryimages', 
        ["uses"=>"Admin\AdminGalleryImageController@index",'as'=>'adminDisplayGalleryImages']
    );
    // edit GalleryImage
    Route::get('admin/editGalleryImageForm/{id}', 
        ["uses"=>"Admin\AdminGalleryImageController@editGalleryImageForm", 
        "as"=> "adminEditGalleryImageForm"]
    );
    // Update GalleryImage
    Route::post('admin/updateGalleryImage/{id}', 
        ["uses"=>"Admin\AdminGalleryImageController@updateGalleryImage", 
        "as"=> "adminUpdateGalleryImage"]
    );
    // Delete GalleryImage
    Route::get('admin/deleteGalleryImage/{id}', 
        ["uses"=>"Admin\AdminGalleryImageController@deleteGalleryImage", 
        "as"=> "adminDeleteGalleryImage"]   
    );

    //display create GalleryImage form
    Route::get('admin/createGalleryImageForm', 
        ["uses"=>"Admin\AdminGalleryImageController@createGalleryImageForm", 
        "as"=> "adminCreateGalleryImageForm"]
    );

    //send new GalleryImage data to database
    Route::post('admin/sendCreateGalleryImageForm/', 
        ["uses"=>"Admin\AdminGalleryImageController@sendCreateGalleryImageForm", 
        "as"=> "adminSendCreateGalleryImageForm"]
    );
    // end GalleryImages


    // Category (Item Type)
    // get all categories
    Route::get('admin/categories', 
        ["uses"=>"Admin\AdminCategoriesController@index",'as'=>'adminDisplayCategories']
    );
    // edit Categories
    Route::get('admin/editCategoryForm/{id}', 
        ["uses"=>"Admin\AdminCategoriesController@editCategoryForm", 
        "as"=> "adminEditCategoryForm"]
    );
    // Update Categories
    Route::post('admin/updateCategory/{id}', 
        ["uses"=>"Admin\AdminCategoriesController@updateCategory", 
        "as"=> "adminUpdateCategory"]
    );
    // Delete Categories
    Route::get('admin/deleteCategory/{id}', 
        ["uses"=>"Admin\AdminCategoriesController@deleteCategory", 
        "as"=> "adminDeleteCategory"]
    );

    //display create Categories form
    Route::get('admin/createCategoryForm', 
        ["uses"=>"Admin\AdminCategoriesController@createCategoryForm", 
        "as"=> "adminCreateCategoryForm"]
    );

    //send new Categories data to database
    Route::post('admin/sendCreateCategoryForm/', 
        ["uses"=>"Admin\AdminCategoriesController@sendCreateCategoryForm", 
        "as"=> "adminSendCreateCategoryForm"]
    );
    Route::get('admin/searchCategories', 
        ["uses"=>"Admin\AdminCategoriesController@searchCategories",'as'=>'adminSearchCategories']
    );

    // End Category
    
    
    Route::get('admin/userDonations', 
        ["uses"=>"Admin\AdminUserDonationController@index",'as'=>'adminDisplayUserDonations']
    );
    // edit UserDonation
    Route::get('admin/editUserDonationForm/{id}', 
        ["uses"=>"Admin\AdminUserDonationController@editUserDonationForm", 
        "as"=> "adminEditUserDonationForm"]
    );
    // Update UserDonation
    Route::post('admin/updateUserDonation/{id}', 
        ["uses"=>"Admin\AdminUserDonationController@updateUserDonation", 
        "as"=> "adminUpdateUserDonation"]
    );
    // Delete UserDonation
    Route::get('admin/deleteUserDonation/{id}', 
        ["uses"=>"Admin\AdminUserDonationController@deleteUserDonation", 
        "as"=> "adminDeleteUserDonation"]   
    );


    Route::get('admin/fundraises', 
        ["uses"=>"Admin\AdminFundraiseController@index",'as'=>'adminDisplayFundraises']
    );
    // edit Fundraises
    Route::get('admin/editFundraiseForm/{id}', 
        ["uses"=>"Admin\AdminFundraiseController@editFundraiseForm", 
        "as"=> "adminEditFundraiseForm"]
    );
    // Update Fundraise
    Route::post('admin/updateFundraise/{id}', 
        ["uses"=>"Admin\AdminFundraiseController@updateFundraise", 
        "as"=> "adminUpdateFundraise"]
    );
    // Delete Fundraise
    Route::get('admin/deleteFundraise/{id}', 
        ["uses"=>"Admin\AdminFundraiseController@deleteFundraise", 
        "as"=> "adminDeleteFundraise"]   
    );



    Route::get('admin/volunteers', 
        ["uses"=>"Admin\AdminVolunteerController@index",'as'=>'adminDisplayVolunteers']
    );
    // edit Volunteer
    Route::get('admin/editVolunteerForm/{id}', 
        ["uses"=>"Admin\AdminVolunteerController@editVolunteerForm", 
        "as"=> "adminEditVolunteerForm"]
    );
    // Update Volunteer
    Route::post('admin/updateVolunteer/{id}', 
        ["uses"=>"Admin\AdminVolunteerController@updateVolunteer", 
        "as"=> "adminUpdateVolunteer"]
    );
    // Delete Volunteer
    Route::get('admin/deleteVolunteer/{id}', 
        ["uses"=>"Admin\AdminVolunteerController@deleteVolunteer", 
        "as"=> "adminDeleteVolunteer"]   
    );


    // Donations
    // get all Donations
    Route::get('admin/donations', 
        ["uses"=>"Admin\AdminDonationsController@index",'as'=>'adminDisplayDonations']
    );
    // edit Donations
    Route::get('admin/editDonationsForm/{id}', 
        ["uses"=>"Admin\AdminDonationsController@editDonationsForm", 
        "as"=> "adminEditDonationsForm"]
    );
    // Update Donations
    Route::post('admin/updateDonations/{id}', 
        ["uses"=>"Admin\AdminDonationsController@updateDonations", 
        "as"=> "adminUpdateDonations"]
    );
    // Delete Donations
    Route::get('admin/deleteDonations/{id}', 
        ["uses"=>"Admin\AdminDonationsController@deleteDonations", 
        "as"=> "adminDeleteDonations"]   
    );

    //display create Donations form
    Route::get('admin/createDonationsForm', 
        ["uses"=>"Admin\AdminDonationsController@createDonationsForm", 
        "as"=> "adminCreateDonationsForm"]
    );

    //send new Donations data to database
    Route::post('admin/sendCreateDonationsForm/', 
        ["uses"=>"Admin\AdminDonationsController@sendCreateDonationsForm", 
        "as"=> "adminSendCreateDonationsForm"]
    );
    // end Donations
});