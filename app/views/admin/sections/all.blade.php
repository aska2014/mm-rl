@extends('admin.template')

@section('content')
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sections as $section)
                <tr>
                    <td>{{ $section->order }}</td>
                    <td>{{ $section->pretty_name }}</td>
                    <td>{{ $section->title }}</td>
                    <td>{{ $section->description }}</td>
                    <td>
                        <a href="/admin/section/edit/{{ $section->id }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop