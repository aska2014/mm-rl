<!DOCTYPE html>

<html lang="en">



<!-- Mirrored from oxygen.goldeyestheme.com/oxygen/index7.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 30 Apr 2014 06:52:48 GMT -->

<head>



    <meta charset="utf-8" />

    <title> ركن لودى  </title>

    <meta name="description" content="" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <!--Favicon -->

    <link rel="icon" type="image/png" href="images/favicon.png" />

    @if($isLocalEnvironment)
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/flexslider.css" />
    <link rel="stylesheet" href="css/font-awesome.css" />
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/prettyPhoto.css" />
    <link rel="stylesheet" href="css/responsive.css" />
    <link rel="stylesheet" href="css/gradients.css" />
    <link rel="stylesheet" href="css/player/YTPlayer.css" />
    <link rel="stylesheet" href="theme-panel/theme_panel.css" />
    <link id="changeable-colors" rel="stylesheet" href="css/colors/blue.css" />
    @else
    <link rel="stylesheet" href="css/site.min.css" />
    @endif

    <link rel="stylesheet" href="css/style.css" />
</head>
<body>


<!-- Page Loader -->

<section id="pageloader">

    <div class="loader-item fa fa-spin colored-border"></div>

</section>

@include('static.navigation')

@foreach($pageSections as $section)
    @include('sections.'.$section->name, compact('section'))
@endforeach

@include('static.footer')


@if($isLocalEnvironment)
<script type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.appear.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<script type="text/javascript" src="js/modernizr-latest.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>
<script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.superslides.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/jquery.mb.YTPlayer.js"></script>
<script type="text/javascript" src="js/jquery.fitvids.js"></script>
<script type="text/javascript" src="js/jquery.slabtext.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="theme-panel/theme-panel.js"></script>
@else
<script type="text/javascript" src="js/site.min.js"></script>
@endif



</body>
</html>


