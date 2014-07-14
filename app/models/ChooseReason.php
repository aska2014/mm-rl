<?php

use Lifeentity\Eloquent\Model;

class ChooseReason extends Model {

    /**
     * @var string
     */
    protected $table = 'choose_reasons';

    /**
     * @var array
     */
    protected $fillable = array('title', 'description', 'icon');

} 