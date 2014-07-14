<?php namespace Services;

use Lifeentity\Eloquent\Model;

class BusinessService extends Model {

    /**
     * @var string
     */
    protected $table = 'business_services';

    /**
     * @var array
     */
    protected $fillable = array('title', 'description', 'icon');

    /**
     * @param $icon
     * @return string
     */
    public function getIconAttribute($icon)
    {
        return strpos($icon, "fa fa-") === 0 ? $icon : 'fa '.$icon;
    }
}