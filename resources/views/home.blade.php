@extends('layout')

@section('content')
	<h1>Challenge ConectApps</h1>
	<li>
		Endpoint que consulta datos a: (https://jsonplaceholder.typicode.com/posts) y los almacena en base de datos local.
		<a href="http://localhost:8000/api/inserta" target="_blank"> http://localhost:8000/api/inserta </a>
	</li>
	<li>
		Endpoint que consulta base de datos y muestra resultados json.
		<a href="http://localhost:8000/api/consulta" target="_blank"> http://localhost:8000/api/consulta </a>
	</li>
	<li>
		Endpoint que consulta base de datos filtra por id(por GET) y muestra resultados json.
		<a href="http://localhost:8000/api/consulta?id=3" target="_blank"> http://localhost:8000/api/consulta?id=3</a> (ejemplo con id=3)
	</li> 
	<li>
		Las tansacciones ejecutadas durante el consumo de los endpoints se graba en el archivo query.log dentro de storage/logs, y se puede consultar desde el menu consulta log de esta aplicación.
		
	</li>
@endsection