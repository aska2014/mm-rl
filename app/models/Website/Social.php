<?php namespace Website;

use Lifeentity\Eloquent\Model;

class Social extends Model {

    /**
     * @var string
     */
    protected $table = 'socials';

    /**
     * @var array
     */
    protected $fillable = array('facebook ', 'twitter', 'google', 'youtube', 'instagram', 'vimeo', 'primary');

    /**
     * @param $query
     * @return mixed
     */
    public function scopePrimary($query)
    {
        return $query->where('primary', true);
    }
}