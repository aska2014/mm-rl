<?php namespace Admin;

use Redirect, View, Input, EmptyClass;

class ShippingController extends \BaseController {

    /**
     * @param \Shipping\ShippingService $services
     * @param \Shipping\ShippingCategory $categories
     */
    public function __construct(\Shipping\ShippingService $services, \Shipping\ShippingCategory $categories)
    {
        $this->categories = $categories;
        $this->services = $services;
    }

    /**
     * Display all shipping information
     */
    public function getIndex()
    {
        $services = $this->services->orderBy('id', 'DESC')->get();

        return View::make('admin.shipping.all', compact('services'));
    }

    /**
     * Display one shipping information
     */
    public function getOne($id)
    {
        $service = $this->services->findOrFail($id);

        return View::make('admin.shipping.one', compact('service'));
    }

    /**
     * Create new shipping
     */
    public function getCreate()
    {
        $categories = $this->categories->all();

        $service = new EmptyClass();

        return View::make('admin.shipping.add', compact('categories', 'service'));
    }

    /**
     * Edit existing shipping
     */
    public function getEdit($id)
    {
        $categories = $this->categories->all();

        $service = $this->services->findOrFail($id);

        return View::make('admin.shipping.add', compact('categories', 'service'));
    }

    /**
     * Post create new shipping
     */
    public function postCreate()
    {
        $category = $this->getOrCreateCategory();

        if(! $category) return Redirect::back()->with('error', 'You have to choose or create category');

        $service = $category->services()->create(Input::get('service'));

        $this->setYoutubeVideo($service);

        $this->uploadImages($service);

        return Redirect::to('/admin/shipping/edit/'.$service->id)->with('success', 'Service created successfully');
    }

    /**
     * Post edit new shipping
     * @param $id
     */
    public function postEdit($id)
    {
        $category = $this->getOrCreateCategory();

        if(! $category) return Redirect::back()->with('error', 'You have to choose or create category');

        $inputs = Input::get('service', array());

        $inputs['shipping_category_id'] = $category->id;

        $service = $this->services->findOrFail($id);

        $service->update($inputs);

        $this->setYoutubeVideo($service);

        $this->uploadImages($service);

        return Redirect::back()->with('success', 'Service updated successfully');
    }

    /**
     * Delete existing shipping
     * @param $id
     */
    public function getDelete($id)
    {
        $this->services->findOrFail($id)->delete();

        return Redirect::to('/admin/shipping')->with('success', 'Service deleted successfully');
    }

    /**
     * Set youtube video
     */
    protected function setYoutubeVideo(\Shipping\ShippingService $service)
    {
        if(Input::get('youtube.url'))
        {
            $service->youtubeVideos()->delete();

            $service->youtubeVideos()->create(array(
                'url' => Input::get('youtube.url')
            ));
        }
    }

    /**
     * Upload images
     */
    protected function uploadImages(\Shipping\ShippingService $service)
    {
        $destination = public_path('albums/shipping').'/';

        foreach(Input::file('images') as $image)
        {
            if (!is_object($image) || ! $image->isValid()) continue;

            do {

                $fileName = 'shipping-service-'.rand(1, 1000).'.jpg';

            } while(file_exists($destination . $fileName));

            $image->move($destination, $fileName);

            $service->images()->create(array(
                'path' => 'albums/shipping/'.$fileName
            ));
        }
    }

    /**
     * Check if there was a category to create
     * @return \Shipping\ShippingCategory
     */
    protected function getOrCreateCategory()
    {
        if(Input::get('category.title'))
        {
            $title = Input::get('category.title');

            if($category = $this->categories->byTitle($title)->first()) {

                return $category;
            }

            return $this->categories->create(compact('title'));
        }

        else if(Input::get('category.id'))
        {
            return $this->categories->findOrFail(Input::get('category.id'));
        }
    }
}