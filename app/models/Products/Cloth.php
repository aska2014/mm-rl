<?php namespace Products;

use Lifeentity\Eloquent\Model;

class Cloth extends Model {

    protected $table = 'clothes';

    protected $fillable = array('title', 'type', 'description', 'client', 'tags');

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function youtubeVideo()
    {
        return $this->morphOne('Video\Youtube', 'videoable');
    }

    /**
     * @return mixed
     */
    public function mainImage()
    {
        return $this->morphOne('Lifeentity\Images\ImageDB', 'imageable')->where('name', 'main');
    }

    /**
     * @return mixed
     */
    public function images()
    {
        return $this->morphMany('Lifeentity\Images\ImageDB', 'imageable')->where('name', 'gallery');
    }

} 