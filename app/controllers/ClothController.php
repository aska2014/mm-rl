<?php

class ClothController extends BaseController {

    public function __construct(\Products\Cloth $clothes)
    {
        $this->clothes = $clothes;
    }

    public function show($id)
    {
        $cloth = $this->clothes->findOrFail($id);

        return View::make('sections.cloth', compact('cloth'));
    }

} 