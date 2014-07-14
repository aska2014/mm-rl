<?php

class WhyChooseComposer {

    public function __construct(ChooseReason $reasons)
    {
        $this->reasons = $reasons;
    }

    public function compose($view)
    {
        $view->chooseReasons = $this->reasons->all();
    }
}