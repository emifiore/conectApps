<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Challenge CONECTAPSS</title>
</head>
<body>
	<ul>
		<li><a href="{{ route('home')}}" > Home</a></li>
		<li><a href="{{ route('consultaLog')}}" > Consulta Log</a></li>
	</ul>

	<div>
		@yield('content')

	</div>

</body>
</html>