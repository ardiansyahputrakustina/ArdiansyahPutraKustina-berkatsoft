<!doctype html>
<html lang="en">

<head>
	<title>Laravel</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('klorofil')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset('klorofil')}}/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{asset('klorofil')}}/assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="{{asset('klorofil')}}/assets/vendor/chartist/css/chartist-custom.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('klorofil')}}/assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('klorofil')}}/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('klorofil')}}/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('klorofil')}}/assets/img/favicon.png">
	<link rel="stylesheet" href="{{asset('datatable')}}/datatables.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		@include('layouts.nav')
		@include('layouts.side')
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('klorofil')}}/assets/vendor/jquery/jquery.min.js"></script>
	<script src="{{asset('klorofil')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="{{asset('klorofil')}}/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="{{asset('klorofil')}}/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="{{asset('klorofil')}}/assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="{{asset('klorofil')}}/assets/scripts/klorofil-common.js"></script>
	<script src="{{asset('datatable')}}/datatables.js"></script>
	<script>
		$(document).ready(function() {
			$('.table').DataTable();
		});
	</script>
</body>

</html>
