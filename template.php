<?php
$pageloader=
'<!-- Page Loader -->
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>';

$mainjs=
'<script src="js/main.js"></script>
<script src="js/plugins.js"></script>
<script>
  $(window).on("load", function() {
      $(\'body\').addClass(\'loaded\');
  });
</script>';

$vendorjs=
'<!-- Vendor JS Files -->
<script src="vendor/aos/aos.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>
<script src="vendor/php-email-form/validate.js"></script>';


?>
