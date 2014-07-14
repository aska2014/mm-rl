<?php

class FoodMemberComposer {

    public function __construct(FoodMaterial $foodMaterials)
    {
        $this->foodMaterials = $foodMaterials;
    }

    public function compose($view)
    {
        $view->foodMaterials = $this->foodMaterials->all();
    }
} 