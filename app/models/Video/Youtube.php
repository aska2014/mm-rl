<?php namespace Video;

use Lifeentity\Eloquent\Model;

class Youtube extends Model {

    /**
     * @var string
     */
    protected $table = 'youtube_videos';

    /**
     * @var array
     */
    protected $fillable = array('title', 'description', 'url', 'videoable_type', 'videoable_id');

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function videoable()
    {
        return $this->morphTo();
    }

} 