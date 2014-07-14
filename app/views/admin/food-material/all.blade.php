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
                @foreach($foodMaterials as $foodMaterial)
                <tr>
                    <td>{{ $foodMaterial->id }}</td>
                    <td>{{ $foodMaterial->title }}</td>
                    <td>{{ $foodMaterial->description }}</td>
                    <td>
                        <a href="/admin/food-material/edit/{{ $foodMaterial->id }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop