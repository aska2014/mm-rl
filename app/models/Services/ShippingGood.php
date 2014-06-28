<?php namespace Services;

use Lifeentity\Eloquent\Model;

class ShippingGood extends Model {

    /**
     * @var string
     */
    protected $table = 'shipping_services';

    /**
     * @var array
     */
    protected $fillable = array('title', 'descirption');

} 