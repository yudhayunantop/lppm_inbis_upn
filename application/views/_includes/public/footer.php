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
                Jl. Raya Rungkut Madya, Gunung Anyar, <br>
                Surabaya, Jawa Timur<br>
              </p>

              <p>
                <i class="fas fa-phone-square-alt "></i>&emsp; 031 – 878 1400 <br>
                <i class="far fa-envelope"></i>&emsp; inbistechnopark@upnjatim.ac.id <br>
                <i class="fas fa-globe"></i>&emsp; inbistechnopark.upnjatim.ac.id <br>
                <i class="fab fa-instagram"></i>&emsp; inkubatorbisnis_upnvjatim
              </p>
    
            </div>
    
            <div class="col-lg-3 col-md-6 footer-info">
              <img src="<?= base_url(); ?>assets/dist/img/logoupnbaru.png" alt="Logo UPN" width="125">
              <img src="<?= base_url(); ?>assets/dist/img/aibi.png" alt="Logo aibi" width="175">
            </div>
    
          </div>
        </div>
      </div>
    
      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>IBT Technopark</span></strong>. All Rights Reserved
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

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script>
        document.body.style.display = "block"
        $(document).ready(function(){

        $('.customer-logos').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [{
              breakpoint: 768,
              settings: {
                slidesToShow: 4
              }
            }, {
              breakpoint: 520,
              settings: {
                slidesToShow: 3
              }
            }]
        });
      });
    </script>

    
</body>

</html>
