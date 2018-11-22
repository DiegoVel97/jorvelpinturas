

    <!--footer-->
    <footer>
        <div class="container">
            <div class="row footer-top-w3layouts">
                <div class="col-lg-3 footer-grid-w3ls" data-aos="zoom-in">
                    <div class="footer-title">
                        <h2>Sobre nosotros</h2>
                    </div>
                    <div class="footer-text">
                        <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. lacinia eget consectetur sed, convallis at tellus..</p>

                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls" data-aos="zoom-in">
                    <div class="footer-title">
                        <h3>Contactanos</h3>
                    </div>
                    <div class="footer-office-hour">
                        <ul>
                            <li class="hd">Ciudad de residencia:</li>
                            <li>Cali, Colombia.</li>
                        </ul>
                        <ul>
                            <li class="hd">Telefono: (+57) 317 843 0551</li>
                            <li class="hd">Email:
                                <a href="mailto:info@example.com">info@jorvelpinturasyacabados.com</a>
                            </li>
                            <!--<li class="hd">Fax: 1(234) 567 8901</li>-->
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls" data-aos="zoom-in">
                    <div class="footer-title">
                        <h3>Trabajos recientes</h3>
                    </div>
                    <div class="footer-list">
                        <div class="flickr-grid">
                            <a href="single.html">
								<img src="<?php echo addLib('web/template/images/g1.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#">
								<img src="<?php echo addLib('web/template/images/g2.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#">
								<img src="<?php echo addLib('web/template/images/g3.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#">
								<img src="<?php echo addLib('web/template/images/g4.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#">
								<img src="<?php echo addLib('web/template/images/g9.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#">
								<img src="<?php echo addLib('web/template/images/g5.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="flickr-grid">
                            <a href="single.html">
								<img src="<?php echo addLib('web/template/images/g6.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#">
								<img src="<?php echo addLib('web/template/images/g7.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="flickr-grid">
                            <a href="#">
								<img src="<?php echo addLib('web/template/images/g8.jpg'); ?>" class="img-fluid" alt=" ">
							</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-lg-3 footer-grid-w3ls" data-aos="zoom-in">
                    <div class="footer-title">
                        <h3>¿Más información?</h3>
                    </div>
                    <p>Ingresa tu correo electronico y nos comunicaremos contigo</p>
                    <form action="#" method="post" class="newsletter">
                        <input class="email" type="email" placeholder="Tu email..." required="">
                        <button class="btn1">
							<i class="far fa-envelope"></i>
						</button>
                    </form>
                    <div class="clearfix"></div>
                </div>

            </div>

        </div>
    </footer>
    <!---->
    <div class="copyright">
        <div class="container">
            <div class="copyrighttop" data-aos="fade-left">
                <ul>
                    <li>
                        <h4>Siguenos:</h4>
                    </li>
                    <li>
                        <a class="facebook" href="#">
							<i class="fab fa-facebook-f"></i>
						</a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
							<i class="fab fa-twitter"></i>
						</a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
							<i class="fab fa-google-plus-g"></i>
						</a>
                    </li>
                    <li>
                        <a class="facebook" href="#">
							<i class="fab fa-pinterest-p"></i>
						</a>
                    </li>
                </ul>
            </div>
            <div class="copyrightbottom" data-aos="fade-right">
                <p>© 2018 Jorvel Pinturas y acabados. Derechos reservados | Diseño y elaboracion
                    <a href="http://w3layouts.com/">W3layouts</a> -
                    <a href="http://worldwebdesigncolombia.com/">World Web Design</a>

                </p>

            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- js -->
    <script src="<?php echo addLib('web/template/librerias/js/jquery-2.2.3.min.js'); ?>"></script>
    <!-- //js -->
    <!-- simpleLightbox -->
    <script src="<?php echo addLib('web/template/librerias/js/simpleLightbox.js'); ?>"></script>
    <script>
        $('.proj_gallery_grid a').simpleLightbox();

    </script>
    <!-- //simpleLightbox -->
	 <!-- /js files -->
	<link href='<?php echo addLib('web/template/librerias/css/aos.css'); ?>' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='<?php echo addLib('web/template/librerias/css/aos-animation.css'); ?>' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='<?php echo addLib('web/template/librerias/js/aos.js'); ?>'></script>
	<script src="<?php echo addLib('web/template/librerias/js/aosindex.js'); ?>"></script>
	<!-- //js files -->
    <!-- flexSlider -->
    <script defer src="<?php echo addLib('web/template/librerias/js/jquery.flexslider.js'); ?>"></script>
    <script>
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

    <!-- stats -->
    <script src="<?php echo addLib('web/template/librerias/js/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo addLib('web/template/librerias/js/jquery.countup.js'); ?>"></script>
    <script>
        $('.counter').countUp();

    </script>
    <!-- //stats -->

    <!-- start-smoth-scrolling -->
    <script src="<?php echo addLib('web/template/librerias/js/move-top.js'); ?>"></script>
    <script src="<?php echo addLib('web/template/librerias/js/easing.js'); ?>"></script>
    <script>
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event) {
                event.preventDefault();
                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 900);
            });
        });

    </script>
    <!-- start-smoth-scrolling -->

    <script>
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

    <!-- /js -->
    <script src="<?php echo addLib('web/template/librerias/js/bootstrap.js'); ?>"></script>
    <!-- //js -->


</body>

</html>
