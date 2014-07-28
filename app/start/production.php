<?php

App::error(function(Exception $e, $code)
{
    $notifier = new \Developer\Notifier\Email();

    $notifier->notify($e, $code);

    return 'Something went wrong while trying to process your request :(';
});

App::missing(function(Exception $e)
{
    return '404 Not Found. <a href="/">Go to home page</a>';
});