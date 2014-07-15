<?php namespace Admin;

use Redirect, View, Input, EmptyClass;
use Website\Message;

class MessageController extends \BaseController {

    /**
     * @param Message $messages
     */
    public function __construct(Message $messages)
    {
        $this->messages = $messages;
    }

    /**
     * Display all resources
     */
    public function getIndex()
    {
        $messages = $this->messages->orderBy('id', 'DESC')->get();

//        dd('adsf');

        return View::make('admin.message.all', compact('messages'));
    }

    /**
     * Display one resource
     */
    public function getOne($id)
    {
        $message = $this->messages->findOrFail($id);

        return View::make('admin.message.one', compact('message'));
    }

    /**
     * Create new resource
     */
    public function getCreate()
    {
        $message = new EmptyClass();

        return View::make('admin.message.add', compact('message'));
    }

    /**
     * Edit existing resource
     */
    public function getEdit($id)
    {
        $message = $this->messages->findOrFail($id);

        return View::make('admin.message.add', compact('message'));
    }

    /**
     * Post create new resource
     */
    public function postCreate()
    {
        $message = $this->messages->create(Input::get('Message'));

        return Redirect::to('/admin/message/edit/'.$message->id)->with('success', 'Message created successfully');
    }

    /**
     * Post edit existing resource

     * @param $id
     */
    public function postEdit($id)
    {
        $inputs = Input::get('Message', array());

        $message = $this->messages->findOrFail($id);

        $message->update($inputs);

        return Redirect::back()->with('success', 'Message updated successfully');
    }

    /**
     * Delete existing resource

     * @param $id
     */
    public function getDelete($id)
    {
        $this->messages->findOrFail($id)->delete();

        return Redirect::to('/admin/message')->with('success', 'Message deleted successfully');
    }
}