<!DOCTYPE html>
<html lang="en">
<head>
	<title>Able {{ config('app.name', 'Laravel') }}</title>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="description" content="Phoenixcoded">
	<meta name="keywords"
		  content=", Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
	<meta name="author" content="Phoenixcoded">

	<!-- Favicon icon -->
{{--	<link rel="shortcut icon" href="/admin/images/favicon.png" type="image/x-icon">--}}
	<link rel="icon" href="/admin/images/favicon.ico" type="image/x-icon">

	<!-- Google font-->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

	<!-- Font Awesome -->
	<link href="/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!--ico Fonts-->
	<link rel="stylesheet" type="text/css" href="/admin/icon/icofont/css/icofont.css">

    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="/admin/plugins/bootstrap/css/bootstrap.min.css">

	<!-- Style.css -->
	<link rel="stylesheet" type="text/css" href="/admin/css/main.css">

	<!-- Responsive.css-->
	<link rel="stylesheet" type="text/css" href="/admin/css/responsive.css">

	<!--color css-->
	<link rel="stylesheet" type="text/css" href="/admin/css/color/color-1.min.css" id="color"/>

</head>
<body>
<section class="login p-fixed d-flex text-center bg-primary common-img-bg">
	<!-- Container-fluid starts -->
	<div class="container-fluid">
		<div class="row">

			<div class="col-sm-12">
				<div class="login-card card-block">
					{!! Form::open(['route'=>'admin.login','class'=>'md-float-material','method'=>'post']) !!}
						@csrf
						<div class="text-center">
							<img src="/admin/images/logo-blue.png" alt="logo">
						</div>
						<h3 class="text-center txt-primary">
							用户登陆
						</h3>
						<div class="md-input-wrapper">
							<input type="text" class="md-form-control" name="name"  value="" />
							<label>用户名</label>
						</div>
						<div class="md-input-wrapper">
							<input type="password" class="md-form-control" name="password"  value=""/>
							<label>密码</label>
						</div>
						<div class="row">
							<div class="col-sm-6 col-xs-12">
							<div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
								<label class="input-checkbox checkbox-primary">
									<input type="checkbox" name="remember" id="remember">
									<span class="checkbox"></span>
								</label>
								<div class="captions">记住密码</div>

							</div>
								</div>
							<div class="col-sm-6 col-xs-12 forgot-phone text-right">
								<a href="forgot-password.html" class="text-right f-w-600"> 找回密码?</a>
								</div>
						</div>
						<div class="row">
							<div class="col-xs-10 offset-xs-1">
								<button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">登陆</button>
							</div>
						</div>
						<!-- <div class="card-footer"> -->
						<div class="col-sm-12 col-xs-12 text-center">
							<span class="text-muted">忘记账户?</span>
							<a href="register2.html" class="f-w-600 p-l-5">找回</a>
						</div>
					{!! Form::close() !!}
						<!-- </div> -->
					{{--</form>--}}
					<!-- end of form -->
				</div>
				<!-- end of login-card -->
			</div>
			<!-- end of col-sm-12 -->
		</div>
		<!-- end of row -->
	</div>
	<!-- end of container-fluid -->
</section>

<!-- Warning Section Starts -->
<!-- Older IE warning message -->
<!--[if lt IE 9]>
<div class="ie-warning">
	<h1>Warning!!</h1>
	<p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
	<div class="iew-container">
		<ul class="iew-download">
			<li>
				<a href="http://www.google.com/chrome/">
					<img src="/admin/images/browser/chrome.png" alt="Chrome">
					<div>Chrome</div>
				</a>
			</li>
			<li>
				<a href="https://www.mozilla.org/en-US/firefox/new/">
					<img src="/admin/images/browser/firefox.png" alt="Firefox">
					<div>Firefox</div>
				</a>
			</li>
			<li>
				<a href="http://www.opera.com">
					<img src="/admin/images/browser/opera.png" alt="Opera">
					<div>Opera</div>
				</a>
			</li>
			<li>
				<a href="https://www.apple.com/safari/">
					<img src="/admin/images/browser/safari.png" alt="Safari">
					<div>Safari</div>
				</a>
			</li>
			<li>
				<a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
					<img src="/admin/images/browser/ie.png" alt="">
					<div>IE (9 & above)</div>
				</a>
			</li>
		</ul>
	</div>
	<p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jqurey -->
<script src="/admin/plugins/jquery-ui/jquery.min.js"></script>
<script src="/admin/plugins/tether/dist/js/tether.min.js"></script>
<!-- Required Fremwork -->
<script src="/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- waves effects.js -->
<script src="/admin/plugins/Waves/waves.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="/admin/pages/elements.js"></script>
</body>
</html>