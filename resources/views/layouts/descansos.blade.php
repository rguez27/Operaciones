@extends('home')

@section('cuerpo')
	<div class="bid-padding text-center blue-grey white-text">
		<h1>Descansos</h1>
	</div>
	<table class="table">
		<thead>
			<th>Nombre</th>
			<th>Servicio</th>
			<th>Día de descanso</th>
			<th>Acción</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>
@endsection

@section('script')
	{!!Html::script('/js/descanso.js')!!}
@endsection