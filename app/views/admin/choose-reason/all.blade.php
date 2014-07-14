@extends('admin.template')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Icon</th>
                    <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                @foreach($chooseReasons as $chooseReason)
                <tr>
                    <td>{{ $chooseReason->id }}</td>
                    <td>{{ $chooseReason->title }}</td>
                    <td>{{ $chooseReason->description }}</td>
                    <th><i class="fa {{ $chooseReason->icon }}"></i></th>
                    <td>
                        <a href="/admin/choose-reason/edit/{{ $chooseReason->id }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop