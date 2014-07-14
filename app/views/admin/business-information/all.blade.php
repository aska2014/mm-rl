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
                @foreach($businessInformations as $businessInformation)
                <tr>
                    <td>{{ $businessInformation->id }}</td>
                    <td>{{ $businessInformation->title }}</td>
                    <td>{{ $businessInformation->description }}</td>
                    <td>
                        <a href="/admin/business-information/edit/{{ $businessInformation->id }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop