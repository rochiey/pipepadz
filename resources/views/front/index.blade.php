<!DOCTYPE html>
<html lang="en-US">
	<head>
		@include('front.head')
	</head>
		
	<body class="<?php if(Request::path() == '/') echo 'home page-template-default page page-id-945 woocommerce-no-js full-width-content en_US comments-closed stylelayout-full header-logo-active footer-top-layout-40 footer-bottom-layout-'; ?>">
		<div id="container">
			<div class="containerInner clearfix">
				@include('front.banner')
				@include('front.header')


				@yield('content')


				@include('front.footer')

				
			</div>
		</div>
		@include('front.scripts')
		@yield('after_scripts')
	</body>

</html>