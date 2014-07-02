<?php


Route::get('/', array('uses' => 'HomeController@index'));

Route::get('/admin', function() {
    return Redirect::to('/admin/shipping/create');
});

Route::group(array('before' => 'auth.virtual'), function() {

    Route::controller('/admin/shipping', 'AdminShippingController');
    Route::controller('/admin/image', 'AdminImageController');
    Route::controller('/admin/section', 'AdminSectionController');
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


Route::get('/test', function()
{
    $images = \Shipping\ShippingService::where('id', '!=', 0)->first()->images;

    foreach($images as $image)
    {
        echo '<img src="'.$image->addOperation('grab', 70, 70)->cached_url.'" />';
        echo '<br/><hr/>';
    }
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