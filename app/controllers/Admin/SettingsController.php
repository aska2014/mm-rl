<?php namespace Admin;

use Redirect, View, Input, EmptyClass;
use Video\Youtube;
use Website\Contact;
use Website\Social;

class SettingsController extends \BaseController {

    /**
     */
    public function __construct(Social $socials, Contact $contacts, Youtube $videos)
    {
        $this->socials = $socials;
        $this->contacts = $contacts;
        $this->videos = $videos;
    }

    /**
     * Edit existing resource
     */
    public function getEdit()
    {
        // Make sure that there's only one instance of social, contact and there's a footer video
        list($social, $contact, $footerVideo) = $this->getInstances();

        return View::make('admin.settings.add', compact('social', 'contact', 'footerVideo'));
    }

    /**
     * Post edit existing resource

     * @param $id
     */
    public function postEdit()
    {
        list($social, $contact, $footerVideo) = $this->getInstances();

        $social->update(Input::get('Social'));
        $contact->update(Input::get('Contact'));
        $footerVideo->update(Input::get('FooterVideo'));

        return Redirect::back()->with('success', 'Settings updated successfully');
    }

    /**
     * @return array
     */
    protected function getInstances()
    {
        $social = $this->socials->firstOrCreate(array('primary' => true));
        $contact = $this->contacts->firstOrCreate(array('primary' => true));
        $footerVideo = $this->videos->firstOrCreate(array('position' => 'footer'));

        return array($social, $contact, $footerVideo);
    }
}