<?php

class ServiceComposer {

    public function __construct(Services\BusinessService $services)
    {
        $this->services = $services;
    }

    public function compose($view)
    {
        $view->businessServices = $this->services->all();
    }

} 