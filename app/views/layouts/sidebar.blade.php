<!doctype html>
<html>
<head>
	@include('includes.head')
</head>
<body>
<div class="container">

	<header class="row">
		@include('includes.header')
	</header>

<div class="content-wrap">

	
<!--Two column Wrap-->
<div class="blog-center-wrap">
<!-- main content -->
		<div id="left-column-wrap">
			@yield('content')
		</div>
			<!-- sidebar content -->
		<div id="right-column-wrap">
			@include('includes.sidebar')
		</div>	




</div>
</div>	<!--Content-wrap end -->

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>