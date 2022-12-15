  </main>
  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 mx-auto text-center mb-4 mt-2">
          <a href="https://www.facebook.com/Multiintegra" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg text-primary fab fa-facebook"></span>
          </a>
          <a href="https://multiintegra.co.id/" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg text-primary fa fa-internet-explorer"></span>
          </a>
          <a href="https://www.instagram.com/multiintegratechnologygroup/?hl=id" target="_blank" class="text-secondary me-xl-4 me-4">
            <span class="text-lg text-primary fab fa-instagram"></span>
          </a>
        </div>
      </div>
      <div class="row">
        <div class="col-8 mx-auto text-center mt-1">
          <p class="mb-0 text-secondary lead text-sm">Copyright © <?= date('Y') ?>.
            MITG Desk by <span class="text-danger fw-bold">MITG</span> <span class="text-secondary fw-bold">Group</span>.
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <!--   Core JS Files   -->
  <script src="<?= base_url('assets/vendor/argon-dashboard-master/') ?>assets/js/core/popper.min.js"></script>
  <script src="<?= base_url('assets/vendor/argon-dashboard-master/') ?>assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url('assets/vendor/argon-dashboard-master/') ?>assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="<?= base_url('assets/vendor/argon-dashboard-master/') ?>assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url('assets/vendor/argon-dashboard-master/') ?>assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>