<?php


Route::get('/', array('uses' => 'HomeController@index'));
Route::get('/section/{name}', array('uses' => 'HomeController@section'));

Route::get('/cloth/{id}', array('uses' => 'ClothController@show'));

Route::post('/send', array('uses' => 'ContactUsController@send'));

// Available resources
Route::get('/api/markers', array('uses' => 'GoogleMarkerResource@index'));

Route::get('/admin', function() {
    return Redirect::to('/admin/help');
});

Route::group(array('before' => 'auth.virtual'), function() {

    Route::controller('/admin/help'                     , 'Admin\HelpController');

    Route::controller('/admin/shipping'                 , 'Admin\ShippingController');
    Route::controller('/admin/image'                    , 'Admin\ImageController');
    Route::controller('/admin/section'                  , 'Admin\SectionController');
    Route::controller('/admin/company-service'          , 'Admin\CompanyServiceController');
    Route::controller('/admin/business-service'         , 'Admin\BusinessServiceController');
    Route::controller('/admin/choose-reason'            , 'Admin\ChooseReasonController');
    Route::controller('/admin/business-information'     , 'Admin\BusinessInformationController');
    Route::controller('/admin/food-material'            , 'Admin\FoodMaterialController');
    Route::controller('/admin/settings'                 , 'Admin\SettingsController');
    Route::controller('/admin/map'                      , 'Admin\MapController');
    Route::controller('/admin/cloth'                    , 'Admin\ClothController');
});


Route::get('/admin/login', function() {
    return View::make('admin.login');
});

Route::post('/admin/login', function() {
    if(Input::get('username') === 'admin' && Input::get('password') === 'admin123') {

        Session::put('loggedin', true);
        return Redirect::to('/admin/shipping/create');
    }
    return Redirect::back()->with('error', 'Login information is incorrect');
});


Route::get('/artisan-command', function()
{
    echo '<form method="POST">
    <input type="text" name="command" />
    <input type="text" name="password"/>
    <input type="submit"/>
    </form>';
})->where('artisan-command', '.*');

Route::post('/artisan-command', function() {

    if(Input::get('password') === 'kareem91') {

        echo 'Please wait..';

        var_dump(Artisan::call(Input::get('command')));
        exit();
    }
});


Route::get('/test-exception', function() {

    throw new Exception("Thank youz");
});