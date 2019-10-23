<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{url('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{url('css/sb-admin.min.css')}}" rel="stylesheet">
</head>
<body>

		<div class="container-fluid">
     <!--  <div class="row"> -->
			@yield('content')
		</div>
    <!-- </div> -->


<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('js/bootstrap.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{url('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{url('vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{url('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{url('js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{url('js/datatables-demo.js')}}"></script>
  <script src="{{url('js/chart-area-demo.js')}}"></script>
</body>
</html>