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
                    <th>Type</th>
                    <th>Description</th>
                    <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clothes as $cloth)
                <tr>
                    <td>{{ $cloth->id }}</td>
                    <td>{{ $cloth->title }}</td>
                    <td>{{ $cloth->type }}</td>
                    <td>{{ $cloth->description }}</td>
                    <td>
                        <a href="/admin/cloth/edit/{{ $cloth->id }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                        <a href="/admin/cloth/delete/{{ $cloth->id }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop