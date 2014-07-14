<?php

class SiteSocialComposer {

    public function __construct(\Website\Social $socials, \Website\Contact $contacts)
    {
        $this->socials = $socials;
        $this->contacts = $contacts;
    }


    public function compose($view)
    {
        $view->social = $this->socials->primary()->first();
        $view->contact = $this->contacts->primary()->first();
    }
}