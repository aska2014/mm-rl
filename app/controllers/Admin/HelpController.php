<?php namespace Admin;

use View;

class HelpController extends \BaseController {


    public function getIndex()
    {
        return View::make('admin.pages.help');
    }

} 