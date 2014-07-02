<?php namespace Website;

use Lifeentity\Eloquent\Model;

class PageSection extends Model {

    /**
     * @var string
     */
    protected $table = 'page_sections';

    /**
     * @var array
     */
    protected $fillable = array('name', 'description');

    /**
     * @return string
     */
    public function getPrettyNameAttribute()
    {
        return ucfirst(str_replace('_', ' ', $this->attributes['name']));
    }

    /**
     * @param $query
     * @param $name
     * @return mixed
     */
    public function scopeByName($query, $name)
    {
        return $query->where('name', $name);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeOrder($query)
    {
        return $query->orderBy('order', 'ASC');
    }

} 