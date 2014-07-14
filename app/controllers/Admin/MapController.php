<?php namespace Admin;

use Map\Marker;
use Redirect, View, Input, EmptyClass;

class MapController extends \BaseController {

    /**
     * @param \Map\Marker $markers
     */
    public function __construct(Marker $markers)
    {
        $this->markers = $markers;
    }

    /**
     * Display all resources
     */
    public function getIndex()
    {
        $markers = $this->markers->orderBy('id', 'DESC')->get();

        return View::make('admin.map.all', compact('markers'));
    }

    public function postIndex()
    {
        $this->markers->create(Input::get('marker'));

        return Redirect::back()->with('success', 'Map updated successfully');
    }

    public function postEdit($id)
    {
        $this->markers->findOrFail($id)->update(Input::get('marker'));

        return Redirect::back()->with('success', 'Map updated successfully');
    }


    public function getDelete($id)
    {
        $this->markers->findOrFail($id)->delete();

        return Redirect::back()->with('success', 'Map updated successfully');
    }
}