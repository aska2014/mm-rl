<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>


<section class="extended-project container">

    <div class="inner portfolio">

        <div class="col-xs-8">
            <!-- Flex Slider -->
            <div class="project">

                <ul class="project-slides">
                    @foreach($cloth->images as $image)
                    <li class="slide"><img src="/{{ $image->addOperation('grab', 700, 510)->cached_url }}" alt=""/> </li>
                    @endforeach
                    @if($cloth->yaoutubeVideo)
                    <li class="slide">
                        <iframe src="{{ $cloth->youtubeVideo->url }}" width="700" height="510" ></iframe>
                    </li>
                    @endif
                    <!-- Clear -->
                    <li class="clear"></li>
                </ul>
            </div>
        </div>

        <div class="col-xs-4">

            <!-- Header -->
            <h1 class="project-header bold dark condensed no-padding uppercase">{{ $cloth->title }}</h1>

            <!-- Description -->
            <p class=" project-desc light">{{ $cloth->description }}</p>

            <!-- Header -->
<!--            <h1 class="project-header bold dark condensed uppercase">Project Details</h1>-->

<!--            <!-- Description -->
<!--            <p class=" project-detail light"><span class="bold condensed uppercase">Client : </span>{{ $cloth->client }}</p>-->
<!---->
<!--            <p class=" project-detail light"><span class="bold condensed uppercase">Tags : </span>{{ $cloth->tags }}</p>-->

<!--            <p class=" project-detail light"><span class="bold condensed uppercase">Date : </span>25 JAN 2014</p>-->

        </div>

        <div class="clear"></div>
    </div><!-- End Inner Portfolio -->

</section><!-- End Project -->

</body>
</html>