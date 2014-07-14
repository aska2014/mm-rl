@if($image)
<div class="image-viewer col-md-12">
    <a href="{{ $image->original_url }}"><img src="{{ $image->original_url }}"/></a>
    <a class="delete-image" href="/admin/image/delete/{{ $image->id }}">Delete image</a>
</div>
@endif


<style>
    .image-viewer{border-left:5px solid #4B5366; margin:30px 0px;}
    .image-viewer img{width:160px;}
    .image-viewer img:hover{opacity:0.8;}
    .image-viewer .delete-image{ color:#F00; font-size:16px; margin-left:40px; margin-top:10px; display: block;}
    .image-viewer .delete-image:hover{ color:#00F;}
</style>