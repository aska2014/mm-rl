<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body dir="rtl">
<div>

    <h2>New message received in roknlodi websie</h2>

    <strong>Name: </strong> {{ $message->name }}<br/>
    <strong>Email: </strong> {{ $message->email }}<br/>
    <strong>Subject: </strong> {{ $message->subject }}<br/>
    <strong>Message: </strong> {{ $message->body }}<br/>

    <hr />

    <br/>

    <strong>Date: </strong><small>{{ $message->created_at }}</small>
</div>
</body>
</html>