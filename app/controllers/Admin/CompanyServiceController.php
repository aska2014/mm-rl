<?php namespace Admin;

use Redirect, View, Input, EmptyClass;
use Services\CompanyService;

class CompanyServiceController extends \BaseController {

    /**
     * @param CompanyService $companyServices
     */
    public function __construct(CompanyService $companyServices)
    {
        $this->companyServices = $companyServices;
    }

    /**
     * Display all resources
     */
    public function getIndex()
    {
        $companyServices = $this->companyServices->orderBy('id', 'DESC')->get();

        return View::make('admin.company-service.all', compact('companyServices'));
    }

    /**
     * Display one resource
     */
    public function getOne($id)
    {
        $companyService = $this->companyServices->findOrFail($id);

        return View::make('admin.company-service.one', compact('companyService'));
    }

    /**
     * Create new resource
     */
    public function getCreate()
    {
        $companyService = new EmptyClass();

        return View::make('admin.company-service.add', compact('companyService'));
    }

    /**
     * Edit existing resource
     */
    public function getEdit($id)
    {
        $companyService = $this->companyServices->findOrFail($id);

        return View::make('admin.company-service.add', compact('companyService'));
    }

    /**
     * Post create new resource
     */
    public function postCreate()
    {
        $companyService = $this->companyServices->create(Input::get('CompanyService'));

        $this->uploadImage($companyService);

        return Redirect::to('/admin/company-service/edit/'.$companyService->id)->with('success', 'Company service created successfully');
    }

    /**
     * Post edit existing resource

     * @param $id
     */
    public function postEdit($id)
    {
        $inputs = Input::get('CompanyService', array());

        $companyService = $this->companyServices->findOrFail($id);

        $companyService->update($inputs);

        $this->uploadImage($companyService);

        return Redirect::back()->with('success', 'Company service updated successfully');
    }

    /**
     * Delete existing resource

     * @param $id
     */
    public function getDelete($id)
    {
        $this->companyServices->findOrFail($id)->delete();

        return Redirect::to('/admin/company-service')->with('success', 'Company service deleted successfully');
    }

    /**
     * @param CompanyService $companyService
     */
    protected function uploadImage(CompanyService $companyService)
    {
        $destination = public_path('albums/services').'/';

        $image = Input::file('image');

        if (!is_object($image) || ! $image->isValid()) return;

        do {

            $fileName = 'company-service-'.$companyService->id.'.jpg';

        } while(file_exists($destination . $fileName));

        $image->move($destination, $fileName);

        // Delete the previous image first
        $companyService->image()->delete();

        $companyService->image()->create(array(
            'path' => 'albums/services/'.$fileName
        ));
    }
}