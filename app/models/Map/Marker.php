<?php namespace Map;

use Lifeentity\Eloquent\Model;

class Marker extends Model {

    /**
     * @var string
     */
    protected $table = 'map_markers';

    /**
     * @var array
     */
    protected $fillable = array('latitude', 'longitude', 'title', 'description');

} 