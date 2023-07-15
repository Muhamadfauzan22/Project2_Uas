<!-- //banner-bottom -->
<div class="general_social_icons">
    <nav class="social">
        <ul>
            <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
            <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
            <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
            <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
        </ul>
    </nav>
</div>
<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h2>Subscribe to us</h2>
                    <div class="w3ls_footer_grid_left1_pos">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Your email..." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                <a href="index.html">
                    <h2>One<span>Movies</span></h2>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p>&copy; 2023 K-Drama. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a>
            </p>
        </div>
        <div class="col-md-7 w3ls_footer_grid1_right">
            <ul>
                <li>
                    <a href="/drakor">Drakor</a>
                </li>
                <li>
                    <a href="/genres">Genres</a>
                </li>
                <li>
                    <a href="/countries">Countries</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<!-- //footer -->
<!-- js -->

<script src="{{ asset('landingpage/js/jquery.magnific-popup.js" type="text/javascript') }}"></script>
<script>
    $(document).ready(function() {
        $('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<script type="text/javascript" src="{{ asset('landingpage/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('landingpage/js/owl.carousel.js') }}"></script>
<script>
    $(document).ready(function() {
        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items: 5,
            itemsDesktop: [640, 4],
            itemsDesktopSmall: [414, 3]

        });

    });
</script>
<script src="{{ asset('landingpage/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('landingpage/js/move-top.js') }}"></script>
<script type="text/javascript" src="{{ asset('landingpage/js/easing.js') }}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script>
    $(document).ready(function() {
        $(".dropdown").hover(
            function() {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function() {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        /*
        	var defaults = {
        	containerID: 'toTop', // fading element id
        	containerHoverID: 'toTopHover', // fading element hover id
        	scrollSpeed: 1200,
        	easingType: 'linear' 
        	};
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script>
    $('.toggle').click(function() {
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms  
        $('.form').animate({
            height: "toggle",
            'padding-top': 'toggle',
            'padding-bottom': 'toggle',
            opacity: "toggle"
        }, "slow");
    });
</script>
<script src="{{ asset('landingpage/js/jquery.slidey.js') }}"></script>
<script src="{{ asset('landingpage/js/jquery.dotdotdot.min.js') }}"></script>
<script type="text/javascript">
    $("#slidey").slidey({
        interval: 8000,
        listCount: 5,
        autoplay: false,
        showList: true
    });
    $(".slidey-list-description").dotdotdot();
</script>

<!-- flexSlider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<script defer src="{{ asset('landingpage/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function(slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- //flexSlider -->
@if(session('authsuccess'))
    <script>
        alert('{{ session("authsuccess") }}');
    </script>
@endif
