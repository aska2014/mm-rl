@if($images && ! $images->isEmpty())
<div class="images-viewer col-md-12">
    @foreach($images as $image)
    <div class="images-viewer-image">
        <a href="{{ $image->original_url }}"><img src="{{ $image->original_url }}"/></a><br/>
        <a class="delete-image" href="/admin/image/delete/{{ $image->id }}">Delete image</a>
    </div>
    @endforeach
</div>
@endif

<style>
    .images-viewer{border-left:5px solid #4B5366; margin:30px 0px;}
    .images-viewer-image{float:left; width:200px; margin-bottom: 10px;}
    .images-viewer img{width:160px; height:140px;}
    .images-viewer img:hover{opacity:0.8;}
    .images-viewer .delete-image{ color:#F00; font-size:16px; margin-left:40px; margin-top:10px; display: block;}
    .images-viewer .delete-image:hover{ color:#00F;}
</style>
