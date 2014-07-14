<?php

use Admin\Menu\HeaderItem;

View::composer('admin.template', function($view)
{
    $headerItems[] = array(
        'title' => 'Dominate Home',
        'icon'  => 'dashboard',
        'items' => array(
            'Help' => 'help'
        )
    );
    $headerItems[] = array(
        'title' => 'Section',
        'icon'  => 'bars',
        'items' => array(
            'Display all' => 'section'
        )
    );
    $headerItems[] = array(
        'title' => 'Company Services',
        'icon'  => 'bookmark',
        'items' => array(
            'Create new'  => 'company-service/create',
            'Display all' => 'company-service'
        )
    );
    $headerItems[] = array(
        'title' => 'Business Services',
        'icon'  => 'building',
        'items' => array(
            'Create new'  => 'business-service/create',
            'Display all' => 'business-service'
        )
    );
    $headerItems[] = array(
        'title' => 'Why to choose',
        'icon'  => 'question',
        'items' => array(
            'Create new'  => 'choose-reason/create',
            'Display all' => 'choose-reason'
        )
    );
    $headerItems[] = array(
        'title' => 'Information Slides',
        'icon'  => 'sliders',
        'items' => array(
            'Create new'  => 'business-information/create',
            'Display all' => 'business-information'
        )
    );
    $headerItems[] = array(
        'title' => 'Shipping',
        'icon'  => 'paper-plane',
        'items' => array(
            'Create new'  => 'shipping/create',
            'Display all' => 'shipping'
        )
    );
    $headerItems[] = array(
        'title' => 'Clothes',
        'icon'  => 'tags',
        'items' => array(
            'Create new'  => 'cloth/create',
            'Display all' => 'cloth'
        )
    );
    $headerItems[] = array(
        'title' => 'Food materials',
        'icon'  => 'tree',
        'items' => array(
            'Create new'  => 'food-material/create',
            'Display all' => 'food-material'
        )
    );
    $headerItems[] = array(
        'title' => 'Map',
        'icon'  => 'map-marker',
        'items' => array(
            'Edit locations' => 'map'
        )
    );
    $headerItems[] = array(
        'title' => 'Website settings',
        'icon'  => 'gear',
        'items' => array(
            'Edit settings' => 'settings/edit'
        )
    );

    $view->headerItems = HeaderItem::makeAll($headerItems);
});