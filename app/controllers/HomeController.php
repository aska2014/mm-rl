<?php

class HomeController extends BaseController {

    /**
     * @param \Website\PageSection $pageSections
     */
    public function __construct(\Website\PageSection $pageSections)
    {
        $this->pageSections = $pageSections;
    }

    /**
     * Index page.
     */
    public function index()
	{
//        if(Request::getClientIp() != '105.90.160.200') {
//
//            return 'Site under construction. Will be back in a few hours';
//        }

        $pageSections = $this->getPageSections();

        $isLocalEnvironment = App::environment() === 'local';

        return View::make('pages.main', compact('pageSections', 'isLocalEnvironment'));
	}


    public function section($name)
    {
        return View::make('sections.'.$name);
//
//        $pageSections = new \Illuminate\Support\Collection(array($this->pageSections->byName($name)->first()));
//
//        $isLocalEnvironment = App::environment() === 'local';
//
//        return View::make('pages.main', compact('pageSections', 'isLocalEnvironment'));
    }

    /**
     * @return \Illuminate\Support\Collection of page sections
     */
    private function getPageSections()
    {
        return $this->pageSections->order()->get();
    }
}
