<?php namespace Social;

use Lifeentity\Eloquent\Model;

class YoutubeVideo extends Model {

    /**
     * @var string
     */
    protected $table = 'youtube_videos';

    /**
     * @var array
     */
    protected $fillable = array('title', 'description', 'url');

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function videoable()
    {
        return $this->morphTo();
    }

} 