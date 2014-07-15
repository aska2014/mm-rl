@extends('admin.template')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-md-12">

            <h2>Message details</h2>

            <Hr/>

            <strong>From</strong> {{ $message->name }} <a href="mailto:{{ $message->email }}">{{ $message->email }}</a><br/>
            <strong>Subject</strong> {{ $message->subject }}<Br/>
            <hr/>
            <strong>Message</strong> {{ $message->body }}

            <hr/>
            <small>Created at {{ $message->created_at }}</small>
        </div>
    </div>
</div>
@stop