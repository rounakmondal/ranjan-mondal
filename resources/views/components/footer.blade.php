
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Ranjan Mondal</h3>
 
      <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>RON</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
   
        Designed by <a href="#">Ron</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Vendor JS Files -->
 

  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="assets/js/chat.js"></script>
  <script src="assets/js/particles.js"></script>
  <script src="assets/js/app.js"></script>

  <script>
    $(document).ready(function() {

  
      toastr.options = {
                  'closeButton': true,
                  'debug': false,
                  'newestOnTop': false,
                  'progressBar': true,
                  'positionClass': 'toast-top-right',
                  'preventDuplicates': false,
                  'showDuration': '1000',
                  'hideDuration': '1000',
                  'timeOut': '5000',
                  'extendedTimeOut': '1000',
                  'showEasing': 'swing',
                  'hideEasing': 'linear',
                  'showMethod': 'fadeIn',
                  'hideMethod': 'fadeOut',
              }
          
        toastr.options.timeOut =8000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @elseif(Session::has('info'))
            toastr.info('{{ Session::get('info') }}');
        @endif
       
    });
    
    </script>
</body>

</html>