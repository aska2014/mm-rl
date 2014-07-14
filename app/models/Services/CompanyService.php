<?php namespace Services;

use Lifeentity\Eloquent\Model;

class CompanyService extends Model {

    /**
     * @var string
     */
    protected $table = 'company_services';

    /**
     * @var array
     */
    protected $fillable = array('title', 'description');

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('Lifeentity\Images\ImageDB', 'imageable');
    }
}