@extends('home')

@section('cuerpo')
	@include('layouts.asignar')
	@include('layouts.editEmpleado')
	@include('layouts.infoEmpleado')

	<div class="bid-padding text-center blue-grey white-text">
		<h1>Empleados activos</h1>
	</div>

	<div class="row">
		<div class="col-md-6 form-group">
			<input type="text" class="form-control" placeholder="Buscar empleado...">
		</div>
	</div>

	<table class="table">
		<thead>
			<th>#</th>
			<th>Nombre</th>
			<th>Contratación</th>
			<th>Telefono</th>
			<th>Domicilio</th>
			<th>Acción</th>
		</thead>
		<tbody id="datos"></tbody>
	</table>
	<ul class="pagination">
	  <li><a href="javascript:void(0)">«</a></li>
	  <li><a href="javascript:void(0)">1</a></li>
	  <li><a href="javascript:void(0)">2</a></li>
	  <li><a href="javascript:void(0)">3</a></li>
	  <li><a href="javascript:void(0)">4</a></li>
	  <li><a href="javascript:void(0)">5</a></li>
	  <li><a href="javascript:void(0)">»</a></li>
	</ul>
@endsection

@section('script')
	{!!Html::script('/js/empleado.js')!!}
@endsection