@extends('admin.template')

@section('content')
<div class="header">

    <h1 class="page-title">Edit Shipping information</h1>

</div>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    @if(! $categories->isEmpty())
                    <div class="col-xs-6">
                        <select name="category[id]" class="form-control">

                            <option value="">Select category</option>
                            @foreach($categories as $category)
                            @if($service->category && $service->category->id == $category->id)
                            <option selected="selected" value="{{ $category->id }}">{{ $category->title }}</option>
                            @else
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endif
                            @endforeach

                        </select>
                    </div>
                    @endif
                    <div class="col-xs-6">
                        <input type="text" name="category[title]" class="form-control" placeholder="Create new category">
                    </div>
                </div>
                <br/>

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" value="{{ $service->title }}" name="service[title]" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="service[description]" rows="5" class="form-control">{{ $service->description }}</textarea>
                </div>

                <hr/>

                <div class="form-group">
                    <label>Youtube video url (optional)</label>

                    @if($service->id && ! $service->youtubeVideos->isEmpty())
                    <input type="text" value="{{ $service->youtubeVideos[0]->url }}" name="youtube[url]" class="form-control">
                    @else
                    <input type="text" name="youtube[url]" class="form-control">
                    @endif
                </div>

                <hr/>

                <div class="form-group">
                    <label>Choose images to upload</label>
                    <input type="file" name="images[]" multiple />
                </div>

                @if($service->id)
                <div class="col-md-12">
                    @foreach($service->images as $image)
                    <div style="float:left; margin:5px;">
                        <a href="{{ $image->original_url }}"><img src="{{ $image->original_url }}" style="width:60px; height:60px;"/></a><br/>
                        <a style="color:#F00; font-size:11px;" href="/admin/image/delete/{{ $image->id }}">Delete image</a>
                    </div>
                    @endforeach
                </div>
                @endif

                <div class="clearfix"></div>
                <div class="btn-toolbar list-toolbar" style="margin-top:20px;">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                    @if($service->id)
                    <a href="#myModal" data-toggle="modal" class="btn btn-danger">Delete</a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    @if($service->id)
    <div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 id="myModalLabel">Delete Confirmation</h3>
                </div>
                <div class="modal-body">

                    <p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete
                        the shipping?</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    <a href="/admin/shipping/delete/{{ $service->id }}" class="btn btn-danger">Delete</a>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
@stop