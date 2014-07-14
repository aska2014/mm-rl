<?php

use Products\Cloth;

class ClothComposer {


    public function __construct(Cloth $clothes)
    {
        $this->clothes = $clothes;
    }


    public function compose($view)
    {
        $view->groups = $this->clothes->all()->groupBy('type');
    }

} 