<!-- History -->

<section id="history" class="container parallax3">



<div class="inner history">



<!-- Header -->

<h1 class="header light dark" style="color:#FFF;">{{ $section->title }}</h1>



<!-- Description -->

<h4 class="h-desc dark" style="color:#FFF;">{{ $section->description }}</h4>



<ul class="timeline" >


<?php $i = 1; ?>
@foreach($categories as $category)
    @if(!$category->services->isEmpty())

    @if($i == 1)
    <li class="time today">{{ $category->title }}</li>
    @else
    <li class="time">{{ $category->title }}</li>
    @endif

    @foreach($category->services as $service)

    @if($i%2 == 0)
    <li class="note animated" data-animation="fadeInRight" data-animation-delay="200">
    @else
    <li class="note animated" data-animation="fadeInLeft" data-animation-delay="200">
    @endif

        <p class="history-head uppercase semibold">{{ $service->title }}</p>
        <p class="history-desc no-margin normal">{{ $service->description }}</p>
        <div class="timeline-images">

            @foreach($service->images as $image)
            <a href="{{ $image->original_url }}"  data-rel="prettyPhoto[gallery{{ $i }}]" class="timeline-image"><img src="{{ $image->addOperation('grab', 70, 70)->cached_url }}" alt="" /></a>
            @endforeach

            @foreach($service->youtubeVideos as $video)
            <a href="{{ $video->url }}" data-rel="prettyPhoto[gallery{{ $i }}]" class="timeline-image"><img src="/images/history/video.png" alt="" /></a>
            @endforeach

        </div>
        <span class="note-arrow"></span>
    </li>

    <?php $i++; ?>

    @endforeach
    @endif
@endforeach



<!-- Start Icon -->

<li class="start"><a href="#history" class="scroll dark-gray-degrade-diagonal"><span class="up-arrow"></span></a></li>

<li class="clear"></li>

</ul>



</div><!-- End Inner Div -->



</section><!-- End History Section -->