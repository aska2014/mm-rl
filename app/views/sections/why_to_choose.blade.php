<!-- Features -->

<section id="features" class="container">



    <div class="inner">



        <!-- Header -->

        <h1 class="header light dark">{{ $section->title }}</h1>



        <!-- Description -->

        <h4 class="h-desc dark">{{ $section->description }}</h4>



        <div class="features-boxes">

            <?php $i = 0;?>
            @foreach($chooseReasons as $reason)

            <!-- Box 1 -->

            <div class="col-xs-4 f-box animated" data-animation="fadeIn" data-animation-delay="{{ $i * 100 }}">

                <!-- Icon -->

                <a class="f-icon">

                    <i class="{{ $reason->icon }}"></i>

                </a>

                <!-- Header -->

                <p class="feature-head uppercase">{{ $reason->title }}</p>

                <!-- Text -->

                <p class="feature-text light">{{ $reason->description }}</p>

            </div>
            <?php $i++;?>
            @endforeach



            <div class="clear"></div>



        </div><!-- End Features Boxes -->



    </div> <!-- End Features Inner -->



</section><!-- End Features Section -->