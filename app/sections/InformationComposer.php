<?php

class InformationComposer {

    public function __construct(BusinessInformation $information)
    {
        $this->information = $information;
    }

    public function compose($view)
    {
        $view->businessInformation = $this->information->all();
    }

} 