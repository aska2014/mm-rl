<!-- Services -->

<section id="services" class="container parallax1">



    <div class="inner">



        <!-- Header -->

        <h1 class="header bold white">{{ $section->title }}</h1>



        <!-- Description -->

        <h4 class="h-desc white">{{ $section->description }}</h4>



        <!-- Boxes -->

        <div class="service-boxes">


            @foreach($businessServices as $service)



            <!-- Box 1 -->

            <div class="col-xs-2 service-box animated" data-animation="fadeIn" data-animation-delay="200" data-toggle="tooltip" data-placement="top" title="{{ $service->description }}">

                <!-- Icon -->

                <a class="service-icon">

                    <i class="{{ $service->icon }}"></i>

                </a>

                <!-- Header -->

                <p class="service-header light white">{{ $service->title }}</p>

            </div>


            @endforeach


            <div class="clear"></div>


        </div> <!-- End Boxes -->



    </div><!-- End Service Inner -->



</section><!-- End Services Section -->