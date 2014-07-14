<?php namespace Admin;

use FoodMaterial;
use Redirect, View, Input, EmptyClass;

class FoodMaterialController extends \BaseController {

    /**
     * @param FoodMaterial $foodMaterials
     */
    public function __construct(FoodMaterial $foodMaterials)
    {
        $this->foodMaterials = $foodMaterials;
    }

    /**
     * Display all resources
     */
    public function getIndex()
    {
        $foodMaterials = $this->foodMaterials->orderBy('id', 'DESC')->get();

        return View::make('admin.food-material.all', compact('foodMaterials'));
    }

    /**
     * Display one resource
     */
    public function getOne($id)
    {
        $foodMaterial = $this->foodMaterials->findOrFail($id);

        return View::make('admin.food-material.one', compact('foodMaterial'));
    }

    /**
     * Create new resource
     */
    public function getCreate()
    {
        $foodMaterial = new EmptyClass();

        return View::make('admin.food-material.add', compact('foodMaterial'));
    }

    /**
     * Edit existing resource
     */
    public function getEdit($id)
    {
        $foodMaterial = $this->foodMaterials->findOrFail($id);

        return View::make('admin.food-material.add', compact('foodMaterial'));
    }

    /**
     * Post create new resource
     */
    public function postCreate()
    {
        $foodMaterial = $this->foodMaterials->create(Input::get('FoodMaterial'));

        $this->uploadImage($foodMaterial);

        return Redirect::to('/admin/food-material/edit/'.$foodMaterial->id)->with('success', 'Food material created successfully');
    }

    /**
     * Post edit existing resource

     * @param $id
     */
    public function postEdit($id)
    {
        $inputs = Input::get('FoodMaterial', array());

        $foodMaterial = $this->foodMaterials->findOrFail($id);

        $foodMaterial->update($inputs);

        $this->uploadImage($foodMaterial);

        return Redirect::back()->with('success', 'Food material updated successfully');
    }

    /**
     * Delete existing resource

     * @param $id
     */
    public function getDelete($id)
    {
        $this->foodMaterials->findOrFail($id)->delete();

        return Redirect::to('/admin/food-material')->with('success', 'Food material deleted successfully');
    }

    /**
     * @param FoodMaterial $foodMaterial
     */
    protected function uploadImage(FoodMaterial $foodMaterial)
    {
        $destination = public_path('albums/food').'/';

        $image = Input::file('image');

        if (!is_object($image) || ! $image->isValid()) return;

        do {

            $fileName = 'food-material-'.$foodMaterial->id.'.'.$image->getClientOriginalExtension();

        } while(file_exists($destination . $fileName));

        $image->move($destination, $fileName);

        // Delete the previous image first
        $foodMaterial->image()->delete();

        $foodMaterial->image()->create(array(
            'path' => 'albums/food/'.$fileName
        ));
    }
}