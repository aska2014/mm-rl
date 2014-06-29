<?php namespace Shipping;

use Lifeentity\Eloquent\Model;

class ShippingService extends Model {

    /**
     * @var string
     */
    protected $table = 'shipping_services';

    /**
     * @var array
     */
    protected $fillable = array('title', 'description', 'shipping_category_id');

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function youtubeVideos()
    {
        return $this->morphMany('Video\Youtube', 'videoable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function images()
    {
        return $this->morphMany('Lifeentity\Images\ImageDB', 'imageable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(ShippingCategory::getClass(), 'shipping_category_id');
    }
}