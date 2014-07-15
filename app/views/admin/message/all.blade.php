@extends('admin.template')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>From</th>
                    <th>Subject</th>
                    <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                @foreach($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->name }} <a href="mailto:{{ $message->email }}">{{ $message->email }}</a></td>
                    <td>{{ $message->subject }}</td>
                    <td><a class="btn btn-info" href="/admin/message/one/{{ $message->id }}">Show</td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop