<?php namespace Website;

use Lifeentity\Eloquent\Model;

class Notifier extends Model {

    /**
     * @var string
     */
    protected $table = 'website_notifiers';

    /**
     * @var array
     */
    protected $fillable = array('email');

    /**
     * @param array $emails
     */
    public function setEmails(array $emails)
    {
        // Loop on each email and either get it or create it
        foreach($emails as $email) {

            $email = trim($email);

            $this->firstOrCreate(compact('email'));
        }
    }

} 