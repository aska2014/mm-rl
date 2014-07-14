<?php

class BusinessInformation extends \Lifeentity\Eloquent\Model {

    /**
     * @var string
     */
    protected $table = 'business_information';

    /**
     * @var array
     */
    protected $fillable = array('title', 'description');

} 