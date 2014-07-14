<!-- Video -->

<section id="video" class="pattern-black relative">



    <!-- Video Button -->

    <a href="#contact" class="video-button t-center scroll">

        <!-- Logo Span -->

			<span class="logo-icon-m">

				<!-- Your Logo -->

				<img src="images/logo-icon-m.png" alt="" />

			</span>

        <!-- Video Text -->



    </a>



    <!-- Video -->

    @if($footerVideo)
    <div id="P2" class="player video-container" data-property="{videoURL:'{{ $footerVideo->code }}',containment:'#video',autoPlay:true, showControls:false, mute:true, startAt:0, opacity:1}"></div>
    @endif

    <!-- End Video -->



</section><!-- End Video Section -->