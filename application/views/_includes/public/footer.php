</div>
</div>
</main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
    
      <div class="footer-top">
        <div class="container">
          <div class="row">
    
            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Contact Us</h4>
              <p>
                A108 Adam Street <br>
                New York, NY 535022<br>
                United States <br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
    
            </div>
    
            <div class="col-lg-3 col-md-6 footer-info">
              <h3>About Moderna</h3>
              <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
    
          </div>
        </div>
      </div>
    
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>Moderna</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </footer><!-- End Footer -->
            
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
            
    <!-- Vendor JS Files -->
    <script src="<?= base_url(); ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/purecounter/purecounter.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/vendor/waypoints/noframework.waypoints.js"></script>
            
    <!-- Template Main JS File -->
    <script src="<?= base_url(); ?>assets/js/main.js"></script>

    <!-- Tabler -->
    <!-- Libs JS -->
    <script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/dist/libs/jquery/dist/jquery.slim.min.js"></script>
    <script src="<?= base_url(); ?>assets/dist/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/dist/js/tabler.min.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>-->
<!--<script src="--></?//= base_url(); /?><!--/assets/plugins/bootstrap/js/bootstrap.js"></script>-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script>
        document.body.style.display = "block"
		$('#myCarousel').carousel({
			interval: false
		});
		$('#carousel-thumbs').carousel({
			interval: false
		});

		// handles the carousel thumbnails
		// https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
		$('[id^=carousel-selector-]').click(function() {
			var id_selector = $(this).attr('id');
			var id = parseInt( id_selector.substr(id_selector.lastIndexOf('-') + 1) );
			$('#myCarousel').carousel(id);
		});
		// Only display 3 items in nav on mobile.
		if ($(window).width() < 575) {
			$('#carousel-thumbs .row div:nth-child(4)').each(function() {
				var rowBoundary = $(this);
				$('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
			});
			$('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
				var boundary = $(this);
				$('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
			});
		}
		// Hide slide arrows if too few items.
		if ($('#carousel-thumbs .carousel-item').length < 2) {
			$('#carousel-thumbs [class^=carousel-control-]').remove();
			$('.machine-carousel-container #carousel-thumbs').css('padding','0 5px');
		}
		// when the carousel slides, auto update
		$('#myCarousel').on('slide.bs.carousel', function(e) {
			var id = parseInt( $(e.relatedTarget).attr('data-slide-number') );
			$('[id^=carousel-selector-]').removeClass('selected');
			$('[id=carousel-selector-'+id+']').addClass('selected');
		});
		// when user swipes, go next or previous
		$('#myCarousel').swipe({
			fallbackToMouseEvents: true,
			swipeLeft: function(e) {
				$('#myCarousel').carousel('next');
			},
			swipeRight: function(e) {
				$('#myCarousel').carousel('prev');
			},
			allowPageScroll: 'vertical',
			preventDefaultEvents: false,
			threshold: 75
		});
		/*
		$(document).on('click', '[data-toggle="lightbox"]', function(event) {
		  event.preventDefault();
		  $(this).ekkoLightbox();
		});
		*/

		$('#myCarousel .carousel-item img').on('click', function(e) {
			var src = $(e.target).attr('data-remote');
			if (src) $(this).ekkoLightbox();
		});
		});
    </script>
<!--	<script>-->
<!--	$(document).ready(function() {-->
<!--		$('#carousel-slider').carousel({-->
<!--			interval: 10000-->
<!--		})-->
<!---->
<!--		$('#carousel-slider').on('slid.bs.carousel', function() {-->
<!--			//alert("slid");-->
<!--		});-->
<!--	});-->
<!--	</script>-->

    
</body>

</html>
