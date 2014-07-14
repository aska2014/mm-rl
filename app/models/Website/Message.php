<?php namespace Website;

use Lifeentity\Eloquent\Model;

class Message extends Model {

    protected $table = 'messages';

    protected $fillable = array('name', 'email', 'subject', 'body');

} 