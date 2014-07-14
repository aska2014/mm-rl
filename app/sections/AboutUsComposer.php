<?php

class AboutUsComposer {

    public function __construct(\Services\CompanyService $services)
    {
        $this->services = $services;
    }

    public function compose($view)
    {
        $view->companyServices = $this->services->all();
    }

} 