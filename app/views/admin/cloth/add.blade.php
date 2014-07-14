@extends('admin.template')

@section('content')
<div class="header">

    <h1 class="page-title">Edit Cloth</h1>

</div>
<div class="main-content">
    <div class="row">
        <div class="col-md-12">
            <form method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Title</label>
                    <input type="text" name="Cloth[title]" value="{{ $cloth->title }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Type</label>
                    <input type="text" name="Cloth[type]" value="{{ $cloth->type }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea name="Cloth[description]" rows="5" class="form-control">{{ $cloth->description }}</textarea>
                </div>

                <hr/>

                <div class="form-group">
                    <label>Youtube video url (optional)</label>

                    @if($cloth->youtubeVideo)
                    <input type="text" value="{{ $cloth->youtubeVideo->url }}" name="youtube[url]" class="form-control">
                    @else
                    <input type="text" name="youtube[url]" class="form-control">
                    @endif
                </div>

                <hr/>

                <div class="form-group">
                    <label>Main image</label>
                    <input type="file" name="image" />
                </div>

                @include('admin.partials.image', array('image' => $cloth->mainImage))

                <hr/>

                <div class="form-group">
                    <label>Gallery images</label>
                    <input type="file" name="images[]" multiple />
                </div>


                @include('admin.partials.images', array('images' => $cloth->images))
                <hr/>

                <div class="clearfix"></div>
                <div class="btn-toolbar list-toolbar">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop