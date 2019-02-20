<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| Middleware options can be located in `app/Http/Kernel.php`
|
*/

// Homepage Route
Route::get('/', 'WelcomeController@welcome')->name('welcome');

// Authentication Routes
Auth::routes();

// Public Routes
Route::group(['middleware' => ['web', 'activity']], function () {

    // Activation Routes
    Route::get('/activate', ['as' => 'activate', 'uses' => 'Auth\ActivateController@initial']);

    Route::get('/activate/{token}', ['as' => 'authenticated.activate', 'uses' => 'Auth\ActivateController@activate']);
    Route::get('/activation', ['as' => 'authenticated.activation-resend', 'uses' => 'Auth\ActivateController@resend']);
    Route::get('/exceeded', ['as' => 'exceeded', 'uses' => 'Auth\ActivateController@exceeded']);

    // Socialite Register Routes
    Route::get('/social/redirect/{provider}', ['as' => 'social.redirect', 'uses' => 'Auth\SocialController@getSocialRedirect']);
    Route::get('/social/handle/{provider}', ['as' => 'social.handle', 'uses' => 'Auth\SocialController@getSocialHandle']);

    // Route to for user to reactivate their user deleted account.
    Route::get('/re-activate/{token}', ['as' => 'user.reactivate', 'uses' => 'RestoreUserController@userReActivate']);

});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity']], function () {

    // Activation Routes
    Route::get('/activation-required', ['uses' => 'Auth\ActivateController@activationRequired'])->name('activation-required');
    Route::get('/logout', ['uses' => 'Auth\LoginController@logout'])->name('logout');
});

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@show',
//        'uses' => 'ProfilesController@user',
    ]);


});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        'ProfilesController', [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep']], function () {
    Route::resource('/users/deleted', 'SoftDeletesController', [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'UsersManagementController@search')->name('search-users');

    Route::resource('themes', 'ThemesManagementController', [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'AdminDetailsController@listRoutes');
    Route::get('active-users', 'AdminDetailsController@activeUsers');
});

Route::redirect('/php', '/phpinfo', 301);

Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep']], function () {

    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'ProfilesController@userProfileAvatar',
    ]);

//Route::get('lesson/home','LessonController@getLesson')->name('lesson-home');

Route::get('lesson/index2','LessonController@getIndex2')->name('lesson-index2');

Route::get('lesson/index3','LessonController@getIndex3');

Route::get('lesson/user','LessonController@getUser')->name('lesson-user');

//teach-materlials/0
Route::get('lesson/teach-materlials/0/1','LessonController@getMaterlials01');

//teach-materlials/1
Route::get('lesson/teach-materlials/1/1','LessonController@getMaterlials02');
Route::get('lesson/teach-materlials/1/2','LessonController@getMaterlials03');
Route::get('lesson/teach-materlials/1/3','LessonController@getMaterlials04');
Route::get('lesson/teach-materlials/1/4','LessonController@getMaterlials05');
Route::get('lesson/teach-materlials/1/5','LessonController@getMaterlials06');
Route::get('lesson/teach-materlials/1/6','LessonController@getMaterlials07');
Route::get('lesson/teach-materlials/1/7','LessonController@getMaterlials08');

//teach-materlials/2
Route::get('lesson/teach-materlials/2/1','LessonController@getMaterlials09');
Route::get('lesson/teach-materlials/2/2','LessonController@getMaterlials10');
Route::get('lesson/teach-materlials/2/3','LessonController@getMaterlials11');
Route::get('lesson/teach-materlials/2/4','LessonController@getMaterlials12');
Route::get('lesson/teach-materlials/2/5','LessonController@getMaterlials13');

//teach-materlials/3
Route::get('lesson/teach-materlials/3/1','LessonController@getMaterlials14');
Route::get('lesson/teach-materlials/3/2','LessonController@getMaterlials15');
Route::get('lesson/teach-materlials/3/3','LessonController@getMaterlials16');

//teach-materlials/4
Route::get('lesson/teach-materlials/4/1','LessonController@getMaterlials17');
Route::get('lesson/teach-materlials/4/2','LessonController@getMaterlials18');
Route::get('lesson/teach-materlials/4/3','LessonController@getMaterlials19');

//teach-materlials/5
Route::get('lesson/teach-materlials/5/1','LessonController@getMaterlials20');
Route::get('lesson/teach-materlials/5/2','LessonController@getMaterlials21');

//teach-materlials/6
Route::get('lesson/teach-materlials/6/1','LessonController@getMaterlials22');
Route::get('lesson/teach-materlials/6/2','LessonController@getMaterlials23');

//teach-materlials/7
Route::get('lesson/teach-materlials/7/1','LessonController@getMaterlials24');
Route::get('lesson/teach-materlials/7/2','LessonController@getMaterlials25');

//teach-materlials/8
Route::get('lesson/teach-materlials/8/1','LessonController@getMaterlials26');
Route::get('lesson/teach-materlials/8/2','LessonController@getMaterlials27');
Route::get('lesson/teach-materlials/8/3','LessonController@getMaterlials28');

//teach-materlials/9
Route::get('lesson/teach-materlials/9/1','LessonController@getMaterlials29');
Route::get('lesson/teach-materlials/9/2','LessonController@getMaterlials30');
Route::get('lesson/teach-materlials/9/3','LessonController@getMaterlials31');

//teach-materlials/10
Route::get('lesson/teach-materlials/10/1','LessonController@getMaterlials32');

//sample 完成品
Route::get('lesson/sample','LessonController@getSample');

//テスト
//Route::get('lesson/index','LessonController@getIndex');
});


//テスト(プロフィール)

// Registered and Activated User Routes
Route::group(['middleware' => ['auth', 'activated', 'activity', 'twostep']], function () {

    //  Homepage Route - Redirect based on user role is in controller.
    Route::get('/home', ['as' => 'public.home',   'uses' => 'UserController@index']);

    // Show users profile - viewable by other users.
    Route::get('profile/{username}', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@show',
//        'uses' => 'ProfilesController@user',
    ]);


});

// Registered, activated, and is current user routes.
Route::group(['middleware' => ['auth', 'activated', 'currentUser', 'activity', 'twostep']], function () {

    // User Profile and Account Routes
    Route::resource(
        'profile',
        'ProfilesController', [
            'only' => [
                'show',
                'edit',
                'update',
                'create',
            ],
        ]
    );
    Route::put('profile/{username}/updateUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserAccount',
    ]);
    Route::put('profile/{username}/updateUserPassword', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@updateUserPassword',
    ]);
    Route::delete('profile/{username}/deleteUserAccount', [
        'as'   => '{username}',
        'uses' => 'ProfilesController@deleteUserAccount',
    ]);

    // Route to show user avatar
    Route::get('images/profile/{id}/avatar/{image}', [
        'uses' => 'ProfilesController@userProfileAvatar',
    ]);

    // Route to upload user avatar.
    Route::post('avatar/upload', ['as' => 'avatar.upload', 'uses' => 'ProfilesController@upload']);
});

// Registered, activated, and is admin routes.
Route::group(['middleware' => ['auth', 'activated', 'role:admin', 'activity', 'twostep']], function () {
    Route::resource('/users/deleted', 'SoftDeletesController', [
        'only' => [
            'index', 'show', 'update', 'destroy',
        ],
    ]);

    Route::resource('users', 'UsersManagementController', [
        'names' => [
            'index'   => 'users',
            'destroy' => 'user.destroy',
        ],
        'except' => [
            'deleted',
        ],
    ]);
    Route::post('search-users', 'UsersManagementController@search')->name('search-users');

    Route::resource('themes', 'ThemesManagementController', [
        'names' => [
            'index'   => 'themes',
            'destroy' => 'themes.destroy',
        ],
    ]);

    Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
    Route::get('routes', 'AdminDetailsController@listRoutes');
    Route::get('active-users', 'AdminDetailsController@activeUsers');
});

Route::get('privacypolicy','PrivacyPolicyController@privacyporicy')->name('provacyporicy');


