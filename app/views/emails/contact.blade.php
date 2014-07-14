<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body dir="rtl">
<div>

    <h2>New message received in roknlodi websie</h2>

    <strong>Name: </strong> {{ $websiteMessage->name }}<br/>
    <strong>Email: </strong> {{ $websiteMessage->email }}<br/>
    <strong>Subject: </strong> {{ $websiteMessage->subject }}<br/>
    <strong>Message: </strong> {{ $websiteMessage->body }}<br/>

    <hr />

    <br/>

    <strong>Date: </strong><small>{{ $websiteMessage->created_at }}</small>
</div>
</body>
</html>