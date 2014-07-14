<?php

class GoogleMarkerResource extends BaseController {

    public function __construct(\Map\Marker $markers)
    {
        $this->markers = $markers;
    }

    public function index()
    {
        return $this->markers->all();
    }
}