<?php namespace Admin;

use Products\Cloth;
use Redirect, View, Input, EmptyClass;

class ClothController extends \BaseController {

    /**
     * @param Cloth $clothes
     */
    public function __construct(Cloth $clothes)
    {
        $this->clothes = $clothes;
    }

    /**
     * Display all resources
     */
    public function getIndex()
    {
        $clothes = $this->clothes->orderBy('id', 'DESC')->get();

        return View::make('admin.cloth.all', compact('clothes'));
    }

    /**
     * Display one resource
     */
    public function getOne($id)
    {
        $cloth = $this->clothes->findOrFail($id);

        return View::make('admin.cloth.one', compact('cloth'));
    }

    /**
     * Create new resource
     */
    public function getCreate()
    {
        $cloth = new EmptyClass();

        return View::make('admin.cloth.add', compact('cloth'));
    }

    /**
     * Edit existing resource
     */
    public function getEdit($id)
    {
        $cloth = $this->clothes->findOrFail($id);

        return View::make('admin.cloth.add', compact('cloth'));
    }

    /**
     * Post create new resource
     */
    public function postCreate()
    {
        $cloth = $this->clothes->create(Input::get('Cloth'));

        $this->setYoutubeVideo($cloth);

        $this->uploadMainImage($cloth);

        $this->uploadGallery($cloth);

        return Redirect::to('/admin/cloth/edit/'.$cloth->id)->with('success', 'Cloth created successfully');
    }

    /**
     * Post edit existing resource

     * @param $id
     */
    public function postEdit($id)
    {
        $inputs = Input::get('Cloth', array());

        $cloth = $this->clothes->findOrFail($id);

        $cloth->update($inputs);

        $this->setYoutubeVideo($cloth);

        $this->uploadMainImage($cloth);

        $this->uploadGallery($cloth);

        return Redirect::back()->with('success', 'Cloth updated successfully');
    }

    /**
     * Delete existing resource

     * @param $id
     */
    public function getDelete($id)
    {
        $this->clothes->findOrFail($id)->delete();

        return Redirect::to('/admin/cloth')->with('success', 'Cloth deleted successfully');
    }

    /**
     * Set youtube video
     */
    protected function setYoutubeVideo(Cloth $cloth)
    {
        if(Input::get('youtube.url'))
        {
            $cloth->youtubeVideo()->delete();

            $cloth->youtubeVideo()->create(array(
                'url' => Input::get('youtube.url')
            ));
        }
    }

    /**
     * Upload images
     */
    protected function uploadGallery(Cloth $cloth)
    {
        foreach(Input::file('images') as $image)
        {
            $fileName = $this->moveImage($cloth, $image);

            if(! $fileName) continue;

            $cloth->images()->create(array(
                'name' => 'gallery',
                'path' => 'albums/clothes/'.$fileName
            ));
        }
    }

    /**
     * @param Cloth $cloth
     */
    protected function uploadMainImage(Cloth $cloth)
    {
        $fileName = $this->moveImage($cloth, Input::file('image'));

        if(! $fileName) return;

        // Delete the previous main image first
        $cloth->mainImage()->delete();

        $cloth->mainImage()->create(array(
            'name' => 'main',
            'path' => 'albums/clothes/'.$fileName
        ));
    }

    /**
     * @param $cloth
     * @param $image
     * @return array
     */
    protected function moveImage(Cloth $cloth, $image)
    {
        $destination = public_path('albums/clothes').'/';

        if (!is_object($image) || ! $image->isValid()) return false;

        do {

            $fileName = 'clothes-'.$cloth->id.rand(1, 1000).'.'.$image->getClientOriginalExtension();

        } while(file_exists($destination . $fileName));

        $image->move($destination, $fileName);

        return $fileName;
    }
}