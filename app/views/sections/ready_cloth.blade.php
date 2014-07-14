<!-- Portfolio -->

<section id="portfolio" class="container">



<div class="portfolio">



    <!-- Header -->

    <h1 class="header light dark"><span class="condiment">{{ $section->title }}</span></h1>



    <!-- Description -->

    <h4 class="h-desc dark">{{ $section->description }}</h4>



</div><!-- End inner div -->



<!-- Expander -->

<div class="item-expander relative">

    <div id="item-expander">

        <p class="cls-btn"><a class="close">X</a></p>

        <div class="expander-inner"></div>

    </div>

</div>



<!-- Filters -->

<div id="options" class="filter-menu fullwidth">

    <ul id="filters" class=" option-set relative normal" data-option-key="filter">

        <li><a href="#filter" data-option-value="*" class="selected">show all</a></li>

        <?php $i = 0; ?>
        @foreach($groups as $group => $clothes)

        <li><a href="#filter" data-option-value=".group{{ $i }}">{{ $group }}</a></li>

        <?php $i ++; ?>
        @endforeach

    </ul>

</div>



<!-- Works -->

<div class="portfolio-items no-margin no-padding">



<?php $i = 0; ?>
<!-- Work -->
@foreach($groups as $group => $clothes)
    @foreach($clothes as $cloth)
    <div class="work five group{{ $i }} ">

        <div class="work-inner">

            <!-- Image -->

            <div class="work-image">

                <a href="http://www.roknlodi.com/cloth/{{ $cloth->id }}" class="expander">

                    @if($image = $cloth->mainImage)
                    <img src="{{ $image->addOperation('grab', 370, 270)->cached_url }}" alt="" />
                    @endif

                    <span class="positive"></span>

                </a>

            </div>

            <!-- Work Details -->

            <div class="work-bottom">

                <p class="work-name uppercase normal no-margin">{{ $cloth->title }}</p>

<!--                <p class="work-category normal no-margin">{{ $cloth->title }}</p>-->

<!--                <a href="images/portfolio/slide2.jpg"  data-rel="prettyPhoto[gallery]" class="work-link" ><span class="arrow"></span></a>-->

            </div>

        </div><!-- End Work Inner -->

    </div><!-- End Work -->
    @endforeach
    <?php $i ++; ?>
@endforeach



<!-- Clear -->

<div class="clear"></div>

</div><!-- End Works -->



</section><!-- End Porfolio Section -->