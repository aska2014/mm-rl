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
     * @param $query
     * @return mixed
     */
    public function scopeOrder($query)
    {
        return $query->orderBy('order', 'ASC');
    }

    /**
     * Get section by it's unique name
     *
     * @param $query
     * @param $name
     */
    public function scopeByName($query, $name)
    {
        return $query->where('name', $name);
    }

} 