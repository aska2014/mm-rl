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
        $pageSections = $this->getPageSections();

        $isLocalEnvironment = App::environment() === 'local';

        return View::make('pages.main', compact('pageSections', 'isLocalEnvironment'));
	}

    /**
     * @return \Illuminate\Support\Collection of page sections
     */
    public function getPageSections()
    {
        return $this->pageSections->order()->get();
    }
}
