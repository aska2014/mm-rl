<!-- About -->

<section id="about" class="container waypoint">

    <div class="inner">

        <!-- Header -->

        <h1 class="header semibold dark">{{ $section->title }}</h1>

        <!-- Description -->

        <h4 class="h-desc">{{ $section->description }}</h4>

        <!-- Boxes -->

        <div class="boxes">


            <?php $i = 1; ?>
            @foreach($companyServices as $service)

            <!-- Box 1 -->

            <div class="col-xs-3 about-box animated" data-animation="fadeIn" data-animation-delay="{{ $i * 100 }}">

                <a class="about-icon">

                    @if($image = $service->image)
                    <i class="fa"><img src="{{ $image->addOperation('grab', 94, 94)->cached_url }}"></i>
                    @endif

                </a>

                <p class="uppercase normal about-head">{{ $service->title }}</p>

                <p class="light about-text">

                    {{ $service->description }}

                </p>

            </div>
            <?php $i+=2; ?>

            @endforeach

        </div><!-- End Boxes -->

    </div><!-- End About Inner -->

</section><!-- End About Section -->