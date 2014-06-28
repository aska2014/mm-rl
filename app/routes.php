<?php


Route::get('/', function()
{
    $pageSections = array(
        'navigation',
        'welcome',
        'about',
        'services',
        'why_to_choose',
        'information_slides',
        'blockquote',
        'shipping_goods',
        'ready_cloth',
        'food_members',
        'main_offers',
        'roknlodi_video',
        'google_maps',
        'contact',
        'site_social',
        'footer'
    );

	return View::make('pages.main', compact('pageSections'));
});
