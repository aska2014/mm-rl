<!-- Testimonials -->

<section class="testimonials parallax2">



    <div class="inner">


        <ul class="t-slides">

            @foreach($businessInformation as $information)

            <!-- Testimonial -->

            <li class="monial">

                <!-- Text -->

                <h1 class="uppercase bold condensed white">{{ $information->title }}</h1>

                <!-- Name -->

                <p class="light uppercase">{{ $information->description }}</p>

            </li>

            @endforeach



        </ul>



    </div><!-- End Inner Div -->



</section><!-- End Testimonials Section -->