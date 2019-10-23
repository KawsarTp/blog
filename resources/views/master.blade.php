<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','Laravel')</title>
  <style type="text/css">
   .is-complete{
    text-decoration: line-through;
  }
</style>
<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}}">
</head>
<body>
  <div class="container-fluid">
    @auth
      @include('header')
    @endauth
    <div class="row">
        @auth
      <div class="col-md-3">
        @include('leftsidebar')
      </div>
        @endauth
      <div class="col-md-6">
        @yield('content')
      </div>
      @auth
      <div class="col-md-3">
        @include('sidebar')
      </div>
      @endauth
    </div>
  </div>
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> -->
  <script type="text/javascript">

// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

    

</script>
</body>
</html>