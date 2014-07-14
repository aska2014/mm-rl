<?php namespace Website;

use Lifeentity\Eloquent\Model;

class Contact extends Model {

    /**
     * @var string
     */
    protected $table = 'contacts';

    /**
     * @var array
     */
    protected $fillable = array('email', 'telephone', 'mobile', 'city', 'address', 'primary');

    /**
     * @param $query
     * @return mixed
     */
    public function scopePrimary($query)
    {
        return $query->where('primary', true);
    }
}