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
                    <th>Category</th>
                    <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                @foreach($services as $service)
                <tr>
                    <td>{{ $service->id }}</td>
                    <td>{{ $service->title }}</td>
                    <td>{{ $service->category->title }}</td>
                    <td>
                        <a href="/admin/shipping/edit/{{ $service->id }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                        <a href="/admin/shipping/delete/{{ $service->id }}" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop