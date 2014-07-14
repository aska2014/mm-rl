<?php namespace Admin;

use Redirect, View, Input, EmptyClass;
use Services\BusinessService;

class BusinessServiceController extends \BaseController {

    /**
     * @param BusinessService $businessServices
     */
    public function __construct(BusinessService $businessServices)
    {
        $this->businessServices = $businessServices;
    }

    /**
     * Display all resources
     */
    public function getIndex()
    {
        $businessServices = $this->businessServices->orderBy('id', 'DESC')->get();

        return View::make('admin.business-service.all', compact('businessServices'));
    }

    /**
     * Display one resource
     */
    public function getOne($id)
    {
        $businessService = $this->businessServices->findOrFail($id);

        return View::make('admin.business-service.one', compact('businessService'));
    }

    /**
     * Create new resource
     */
    public function getCreate()
    {
        $businessService = new EmptyClass();

        return View::make('admin.business-service.add', compact('businessService'));
    }

    /**
     * Edit existing resource
     */
    public function getEdit($id)
    {
        $businessService = $this->businessServices->findOrFail($id);

        return View::make('admin.business-service.add', compact('businessService'));
    }

    /**
     * Post create new resource
     */
    public function postCreate()
    {
        $businessService = $this->businessServices->create(Input::get('BusinessService'));

        return Redirect::to('/admin/business-service/edit/'.$businessService->id)->with('success', 'Business service created successfully');
    }

    /**
     * Post edit existing resource

     * @param $id
     */
    public function postEdit($id)
    {
        $inputs = Input::get('BusinessService', array());

        $businessService = $this->businessServices->findOrFail($id);

        $businessService->update($inputs);

        return Redirect::back()->with('success', 'Business service updated successfully');
    }

    /**
     * Delete existing resource

     * @param $id
     */
    public function getDelete($id)
    {
        $this->businessServices->findOrFail($id)->delete();

        return Redirect::to('/admin/business-service')->with('success', 'Business service deleted successfully');
    }
}