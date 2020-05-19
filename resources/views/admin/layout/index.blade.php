<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>Diễn Đàn Học Tập Công Nghệ Thông Tin</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <base href ="{{asset('')}}">
    <!-- Site Icons -->
    <link rel="shortcut icon" href="smartedu/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="smartedu/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="smartedu/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="smartedu/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="smartedu/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="smartedu/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="smartedu/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="smartedu/js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version">

	<!-- Modal -->
	<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header tit-up">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Customer Login</h4>
			</div>
			<div class="modal-body customer-box">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li><a class="active" href="#Login" data-toggle="tab">Login</a></li>
					<li><a href="#Registration" data-toggle="tab">Registration</a></li>
				</ul>
				<!-- Tab panes -->
				<div class="tab-content">
					<div class="tab-pane active" id="Login">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email1" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="exampleInputPassword1" placeholder="Email" type="email">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="submit" class="btn btn-light btn-radius btn-brd grd1">
										Submit
									</button>
									<a class="for-pwd" href="javascript:;">Forgot your password?</a>
								</div>
							</div>
						</form>
					</div>
					<div class="tab-pane" id="Registration">
						<form role="form" class="form-horizontal">
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" placeholder="Name" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="mobile" placeholder="Mobile" type="email">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="password" placeholder="Password" type="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-10">
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Save &amp; Continue
									</button>
									<button type="button" class="btn btn-light btn-radius btn-brd grd1">
										Cancel</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>

    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

    <!-- Start header -->
	<header class="top-navbar">
		@include('admin.layout.header')
	</header>
	<!-- End header -->

	<div class="all-title-box">
		@include('admin.layout.color')
	</div>

	<div id="overviews" class="section wb">
		@yield('content')
	</div><!-- end section -->

	<div class="parallax section dbcolor">
		@include('admin.layout.advertise')
	</div><!-- end section -->

	<footer class="footer">
		@include('admin.layout.footer')
	</footer><!-- end footer -->

	<div class="copyrights">
		@include('admin.layout.copyrights')
	</div><!-- end copyrights -->

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="smartedu/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="smartedu/js/custom.js"></script>

    <script type="text/javascript" language="javascript" src="{{asset('ckeditor/ckeditor.js')}}" ></script>
    <script>
        ckeditor.replace('summary-ckeditor');
    </script>

	@yield('script')

</body>
</html>
