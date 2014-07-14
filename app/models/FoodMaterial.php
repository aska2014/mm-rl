<?php

class FoodMaterial extends \Lifeentity\Eloquent\Model {

    /**
     * @var string
     */
    protected $table = 'food_materials';

    /**
     * @var array
     */
    protected $fillable = array('title', 'small_description', 'description');

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('Lifeentity\Images\ImageDB', 'imageable');
    }

} 