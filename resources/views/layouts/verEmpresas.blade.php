@extends('home')

@section('cuerpo')
	@include('layouts.editEmpresa')
	@include('layouts.infoEmpresa')
	
	<div class="bid-padding text-center blue-grey white-text">
		<h1>Empresas con servicio</h1>
	</div>

	<div class="row">
		<div class="col-md-6 form-group">
			<input id="empresa" type="text" class="form-control" placeholder="Buscar empresa...">
		</div>
	</div>
	
	<table class="table">
		<thead>
			<th>Empresa</th>
			<th>Direccion</th>
			<th>Telefono</th>
			<th>Fecha de Contratación</th>
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
	{!!Html::script('/js/empresa.js')!!}
@endsection