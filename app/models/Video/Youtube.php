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
    protected $fillable = array('position', 'title', 'description', 'url', 'videoable_type', 'videoable_id');

    /**
     * @return string
     */
    public function getCodeAttribute()
    {
        preg_match("#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $this->url, $matches);

        return !empty($matches)?$matches[0]:'';
    }

    /**
     * @param $query
     * @param $position
     * @return mixed
     */
    public function scopePosition($query, $position)
    {
        return $query->where('position', $position);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function videoable()
    {
        return $this->morphTo();
    }

} 