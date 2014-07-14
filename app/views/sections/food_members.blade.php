

<!-- Team -->

<section id="team" class="container">



<!-- Team Inner -->

<div class="inner team">



<!-- Header -->

<h1 class="header light dark">{{ $section->title }}</h1>



<!-- Description -->

<h4 class="h-desc dark">{{ $section->description }}</h4>





<!-- Members -->

<div class="team-members inner-details">


<?php $i = 0; ?>
@foreach($foodMaterials as $material)
<div class="col-xs-4 member animated" data-animation="fadeInUp" data-animation-delay="{{ $i * 100 }}">

    <div class="member-inner">

        <!-- Team Member Image -->

        <a class="team-image">

            <!-- Img -->

            @if($image = $material->image)
            <img src="{{ $image->addOperation('grab', 360, 270)->cached_url }}" alt="" />
            @endif

        </a>

        <div class="member-details">

            <div class="member-details-inner">

                <!-- Name -->

                <h2 class="member-name uppercase normal">{{ $material->title }}</h2>

                <!-- Position -->

                <h4 class="member-position uppercase normal">{{ $material->small_description }}</h4>

                <!-- Description -->

                <p class="member-description">{{ $material->description }}</p>

                <!-- Socials -->

                <div class="socials">

                    <!-- Facebook -->

                    <a href="#"><i class="fa fa-facebook"></i></a>

                    <!-- Twitter -->

                    <a href="#"><i class="fa fa-twitter"></i></a>

                    <!-- Instagram -->

                    <a href="#"><i class="fa fa-instagram"></i></a>

                    <!-- Tumblr -->

                    <a href="#"><i class="fa fa-tumblr"></i></a>

                </div><!-- End Socials -->

            </div> <!-- End Detail Inner -->

        </div><!-- End Details -->

    </div> <!-- End Member Inner -->

</div><!-- End Member -->
<?php $i ++; ?>
@endforeach




<!-- Clear -->

<div class="clear"></div>

</div><!-- End Members -->

</div><!-- End Team Inner -->

</section><!-- End Team Section -->