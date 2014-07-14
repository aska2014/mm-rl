@extends('admin.template')

@section('content')
<div class="header">

    <h1 class="page-title">Edit Business service</h1>

</div>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>
                        <i class="fa {{ $businessService->icon }}"></i>
                        Icon name: <small>For list of icons <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">click here</a></small></label>
                    <input type="text" name="BusinessService[icon]" value="{{ $businessService->icon }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="BusinessService[title]" value="{{ $businessService->title }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="BusinessService[description]" rows="5" class="form-control">{{ $businessService->description }}</textarea>
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