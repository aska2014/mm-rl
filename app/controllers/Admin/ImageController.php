<?php namespace Admin;

use Redirect, View, Input, EmptyClass;

class ImageController extends \BaseController {

    /**
     * @param \Lifeentity\Images\ImageDB $images
     */
    public function __construct(\Lifeentity\Images\ImageDB $images)
    {
        $this->images = $images;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDelete($id)
    {
        $image = $this->images->find($id);

        if(! $image) return Redirect::back()->with('error', 'Image doesn\'t exist');

        $image->delete();

        $path = public_path($image->path);

        if(file_exists($path)) {

            unlink($path);
        }

        return Redirect::back()->with('success', 'Image deleted successfully');
    }

} 