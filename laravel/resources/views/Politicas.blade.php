@extends('layout')

@section('title', 'Politicas')

@section('content')
	<h1>Politicas</h1>
	<ul>
		@forelse($politicas as $politicasIteam)
			<li>{{ $politicasIteam['title']}}</li>
		@empty		
			<li>No hay elementos para mostrar</li>
		@endforelse
	</ul>
@endsection