<?php namespace Admin;

use ChooseReason;
use Redirect, View, Input, EmptyClass;

class ChooseReasonController extends \BaseController {

    /**
     * @param ChooseReason $chooseReasons
     */
    public function __construct(ChooseReason $chooseReasons)
    {
        $this->chooseReasons = $chooseReasons;
    }

    /**
     * Display all resources
     */
    public function getIndex()
    {
        $chooseReasons = $this->chooseReasons->orderBy('id', 'DESC')->get();

        return View::make('admin.choose-reason.all', compact('chooseReasons'));
    }

    /**
     * Display one resource
     */
    public function getOne($id)
    {
        $chooseReason = $this->chooseReasons->findOrFail($id);

        return View::make('admin.choose-reason.one', compact('chooseReason'));
    }

    /**
     * Create new resource
     */
    public function getCreate()
    {
        $chooseReason = new EmptyClass();

        return View::make('admin.choose-reason.add', compact('chooseReason'));
    }

    /**
     * Edit existing resource
     */
    public function getEdit($id)
    {
        $chooseReason = $this->chooseReasons->findOrFail($id);

        return View::make('admin.choose-reason.add', compact('chooseReason'));
    }

    /**
     * Post create new resource
     */
    public function postCreate()
    {
        $chooseReason = $this->chooseReasons->create(Input::get('ChooseReason'));

        return Redirect::to('/admin/choose-reason/edit/'.$chooseReason->id)->with('success', 'Choose reason created successfully');
    }

    /**
     * Post edit existing resource

     * @param $id
     */
    public function postEdit($id)
    {
        $inputs = Input::get('ChooseReason', array());

        $chooseReason = $this->chooseReasons->findOrFail($id);

        $chooseReason->update($inputs);

        return Redirect::back()->with('success', 'Choose reason updated successfully');
    }

    /**
     * Delete existing resource

     * @param $id
     */
    public function getDelete($id)
    {
        $this->chooseReasons->findOrFail($id)->delete();

        return Redirect::to('/admin/choose-reason')->with('success', 'Choose reason deleted successfully');
    }
}