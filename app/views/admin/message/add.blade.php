@extends('admin.template')

@section('content')
<div class="header">

    <h1 class="page-title">Edit Message</h1>

</div>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="Message[title]" value="{{ $message->title }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="Message[description]" rows="5" class="form-control">{{ $message->description }}</textarea>
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