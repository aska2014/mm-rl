<?php namespace Shipping;

use Lifeentity\Eloquent\Model;

class ShippingCategory extends Model {

    /**
     * @var string
     */
    protected $table = 'shipping_categories';

    /**
     * @var array
     */
    protected $fillable = array('title');

    /**
     * @param $query
     * @param $title
     * @return mixed
     */
    public function scopeByTitle($query, $title)
    {
        return $query->where('title', $title);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services()
    {
        return $this->hasMany(ShippingService::getClass(), 'shipping_category_id');
    }
}