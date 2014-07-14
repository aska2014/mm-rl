<?php namespace Developer\Notifier;

use Exception;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;

class Email {

    protected $emails = array(
        'kareem3d.a@gmail.com' => 'Kareem Mohamed'
    );

    /**
     * Notify developer with the given exception
     *
     * @param \Exception $exception
     * @param int $code
     * @internal param \Exception $e
     */
    public function notify(Exception $exception, $code = 0) {

        $data = array(
            'errorTitle' => $this->getErrorTitle($exception),
            'errorDescription' => $this->getErrorDescription($exception),
            'requestDetails' => $this->getRequestDetails()
        );

        // Send email for each one in the list
        foreach($this->emails as $email => $name) {

            Mail::send('emails.error', $data, function($message) use($email, $name)
            {
                $message->to($email, $name)->subject('Error from roknlodi');
            });
        }
    }

    /**
     * @return string
     */
    protected function getRequestDetails()
    {
        return Request::url() . ' : ' . Request::getMethod() . '<br /><br />INPUTS ARE: <br />' . $this->readableArray(Input::all());
    }

    /**
     * @param Exception $exception
     * @return string
     */
    protected function getErrorDescription(Exception $exception)
    {
        return 'In file:' . $exception->getFile() . ', In line:'.$exception->getLine() . '';
    }

    /**
     * @param Exception $exception
     * @return string
     */
    protected function getErrorTitle(Exception $exception)
    {
        return get_class($exception) . ' <br />' . $exception->getMessage();
    }


    /**
     * @param array $array
     * @param string $concat
     * @return string
     */
    protected function readableArray($array, $concat = '<br />')
    {
        $string = '';

        foreach($array as $key => $value)
        {
            if(is_array($value))
            {
                $string .=  $key .'= ['.$this->readableArray($value, ';').']' . $concat;
            }

            else
            {
                $string .= $key .'=' . $value . $concat;
            }
        }
        return $string;
    }


} 