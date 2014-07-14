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
                @foreach($businessServices as $businessService)
                <tr>
                    <td>{{ $businessService->id }}</td>
                    <td>{{ $businessService->title }}</td>
                    <td>{{ $businessService->description }}</td>
                    <th><i class="fa {{ $businessService->icon }}"></i></th>
                    <td>
                        <a href="/admin/business-service/edit/{{ $businessService->id }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop