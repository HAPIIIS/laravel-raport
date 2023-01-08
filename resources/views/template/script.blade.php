<!--   Core JS Files   -->
<script src="{{asset('Argon/assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('Argon/assets/js/core/bootstrap.min.js')}}"></script>
<script src="{{asset('Argon/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('Argon/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
<script src="{{asset('Argon/assets/js/plugins/chartjs.min.js')}}"></script>
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
<script src="{{asset('Argon/assets/js/argon-dashboard.min.js?v=2.0.4')}}"></script>
<!-- Font-Awesome Kits -->
<script src="https://kit.fontawesome.com/fd13a44a73.js" crossorigin="anonymous"></script>
<!-- JQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>