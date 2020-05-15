<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Real Time App</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
	
	<div id="app">
		<v-app>
			<app-home></app-home>
		</v-app>
	</div>

	<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>