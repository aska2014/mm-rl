@extends('admin.template')

@section('content')
<div class="header">

    <h1 class="page-title">Edit Section</h1>

</div>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Section name</label>
                    <input type="text" value="{{ $section->pretty_name }}" name="section[name]" class="form-control" disabled>
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{ $section->title }}" name="section[title]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="section[description]" rows="5" class="form-control">{{ $section->description }}</textarea>
                </div>

                <div class="clearfix"></div>
                <div class="btn-toolbar list-toolbar">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>

</div>
@stop