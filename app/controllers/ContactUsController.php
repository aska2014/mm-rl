<?php

use Website\Message;

class ContactUsController extends BaseController {


    public function __construct(Message $messages, \Website\Notifier $notifiers)
    {
        $this->messages = $messages;
        $this->notifiers = $notifiers;
    }

    /**
     *
     */
    public function send()
    {
        $message = $this->messages->create(Input::all());

        // Send to all emails registered in the notifiers list

        foreach($this->notifiers->all() as $notifier)
        {
            $this->sendEmail($notifier->email, $message);
        }
    }

    /**
     * @param $email
     * @param Message $message
     */
    protected function sendEmail($email, Message $message)
    {
        Mail::send('emails.contact', compact('message'), function($mail) use($email)
        {
            $mail->to($email, 'Roknlodi administrator')->subject('Message from Roknlodi');
        });
    }

} 