<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		@yield('title')
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta name="author" content="">
		<link href="{{ asset('public/images/favicon.png') }} " rel="shortcut icon" >
		<link href="{{ asset('public/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('public/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('public/vendor/uniform/css/uniform.default.css') }}" rel="stylesheet">
		<link href="{{ asset('public/vendor/fancybox/source/jquery.fancybox.css') }}" rel="stylesheet" media="screen" />
		@yield('css')	
		<link href="{{ asset('public/admin/css/components-md.css') }}" id="style_components" rel="stylesheet"/>
		<link href="{{ asset('public/admin/css/plugins-md.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('public/admin/css/layout.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{ asset('public/admin/css/themes/darkblue.css') }}" rel="stylesheet" type="text/css" id="style_color" />
		<link href="{{ asset('public/admin/css/custom.css') }}" rel="stylesheet" type="text/css"/>
	</head>
	<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
		<div class="page-header -i navbar navbar-fixed-top">
			<div class="page-header-inner">
				<div class="page-logo">
					<div class="menu-toggler sidebar-toggler"></div>
				</div>
				<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"></a>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="page-container">
			<div class="page-sidebar-wrapper">
				<div class="page-sidebar navbar-collapse collapse">
					<ul class="page-sidebar-menu page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top:0px">
						<li class="nav-item start active open">
							<a href="{{ url('home')}}" class="nav-link nav-toggle">
								<i class="fa fa-home"></i>
								<span class="title">{{ __('Beranda') }}</span>
								 <span class="selected"></span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('topproduct') }}" class="nav-link">
								<i class="fa fa-users"></i>
								<span class="title">{{ __('Produk Terlaris') }}</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('topcustomer') }}" class="nav-link nav-toggle">
								<i class="fa fa-user"></i>
								<span class="title">{{ __('Konsumen Terbaik') }}</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('topagent') }}" class="nav-link nav-toggle">
								<i class="fa fa-user"></i>
								<span class="title">{{ __('Top Agent') }}</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="{{ url('order') }}" class="nav-link nav-toggle">
								<i class="fa fa-user"></i>
								<span class="title">{{ __('Order') }}</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<ul class="page-breadcrumb">
							<li>
								<i class="fa fa-home"></i>
								<a href="{{ url('admin/home') }}">{{ __('Beranda') }}</a>
							</li>
						</ul>
						<div class="page-toolbar">
							<div id="jam"></div>
						</div>
					</div>
					<h3 class="page-title">
					</h3>
					<div class="clearfix"></div>
					@if (session('SUCCESSMSG'))
						<div role="alert" class="alert alert-success">
							<button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
							<strong>Sukses!</strong>
							{{ session('SUCCESSMSG') }}
						</div>
					@endif
					@if (session('GAGALMSG'))
						<div role="alert" class="alert alert-success">
							<button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
							{{ session('GAGALMSG') }}
						</div>
					@endif
				
					@yield('section')
			
					<div class="clearfix"></div>
				</div>
			</div>
		</div>

		<div class="page-footer">
			<div class="page-footer-inner">
				
			</div>
			<div class="scroll-to-top">
				<i class="fa fa-arrow-up"></i>
			</div>
		</div>
		<script src="{{ asset('public/vendor/jquery/jquery.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/vendor/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/vendor/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/vendor/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/vendor/jquery.blockui.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/vendor/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
		<script src="{{ asset('public/vendor/fancybox/source/jquery.fancybox.js') }}" type="text/javascript" ></script>
	    @yield('js')
		<script src="{{ asset('public/admin/js/metronic.js') }}" type="text/javascript"></script>
        <script src="{{ asset('public/admin/js/layout.js') }}" type="text/javascript"></script>
        @yield('script')
	</body>
</html>