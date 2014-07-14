<?php namespace Admin;

use BusinessInformation;
use Redirect, View, Input, EmptyClass;

class BusinessInformationController extends \BaseController {

    /**
     * @param BusinessInformation $businessInformations
     */
    public function __construct(BusinessInformation $businessInformations)
    {
        $this->businessInformations = $businessInformations;
    }

    /**
     * Display all resources
     */
    public function getIndex()
    {
        $businessInformations = $this->businessInformations->orderBy('id', 'DESC')->get();

        return View::make('admin.business-information.all', compact('businessInformations'));
    }

    /**
     * Display one resource
     */
    public function getOne($id)
    {
        $businessInformation = $this->businessInformations->findOrFail($id);

        return View::make('admin.business-information.one', compact('businessInformation'));
    }

    /**
     * Create new resource
     */
    public function getCreate()
    {
        $businessInformation = new EmptyClass();

        return View::make('admin.business-information.add', compact('businessInformation'));
    }

    /**
     * Edit existing resource
     */
    public function getEdit($id)
    {
        $businessInformation = $this->businessInformations->findOrFail($id);

        return View::make('admin.business-information.add', compact('businessInformation'));
    }

    /**
     * Post create new resource
     */
    public function postCreate()
    {
        $businessInformation = $this->businessInformations->create(Input::get('BusinessInformation'));

        return Redirect::to('/admin/business-information/edit/'.$businessInformation->id)->with('success', 'Business information created successfully');
    }

    /**
     * Post edit existing resource

     * @param $id
     */
    public function postEdit($id)
    {
        $inputs = Input::get('BusinessInformation', array());

        $businessInformation = $this->businessInformations->findOrFail($id);

        $businessInformation->update($inputs);

        return Redirect::back()->with('success', 'Business information updated successfully');
    }

    /**
     * Delete existing resource

     * @param $id
     */
    public function getDelete($id)
    {
        $this->businessInformations->findOrFail($id)->delete();

        return Redirect::to('/admin/business-information')->with('success', 'Business information deleted successfully');
    }
}