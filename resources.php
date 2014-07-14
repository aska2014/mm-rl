<?php

$resources = array('company-service', 'business-service', 'choose-reason', 'business-information', 'food-material', 'settings');

foreach($resources as $resource) {

    exec('php artisan admin:create '.$resource);
}