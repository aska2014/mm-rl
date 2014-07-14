<?php

App::error(function(Exception $e, $code)
{
    $notifier = new \Developer\Notifier\Email();

    $notifier->notify($e, $code);

    echo 'Something went wrong while trying to process your request :(';
});