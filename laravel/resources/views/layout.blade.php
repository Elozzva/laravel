<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title', 'Aprendible')</title>
	<style>
		.active a {
			color: red;
			text-decoration: none;
		}
	</style>
</headabout>
	@include('partials.nav')
	@yield('content')
</body>
</html>