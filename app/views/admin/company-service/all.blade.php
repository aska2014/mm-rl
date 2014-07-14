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
                    <th>Tools</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companyServices as $companyService)
                <tr>
                    <td>{{ $companyService->id }}</td>
                    <td>{{ $companyService->title }}</td>
                    <td>{{ $companyService->description }}</td>
                    <td>
                        <a href="/admin/company-service/edit/{{ $companyService->id }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                        <a href="/admin/company-service/delete/{{ $companyService->id }}" class="btn btn-danger"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop