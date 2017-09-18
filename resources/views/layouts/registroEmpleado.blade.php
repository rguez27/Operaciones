@extends('home')
@section('cuerpo')

	@include('layouts.modal')
	
	{{ csrf_field()}}
	<div class="bid-padding text-center blue-grey white-text">
		<h1>Registro de Empleados</h1>
	</div>
	{!!Form::open(array('id' => 'ajax')) !!}
		<div class="form-group label-floating">
			{!!Form::label('Nombre:',null,['class'=>'control-label'])!!}
			{!!Form::text('nombreEmpleado', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
			{!!Form::date('inicio', Carbon::now(),['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Telefono:',null,['class'=>'control-label'])!!}
			{!!Form::number('telefono', null,['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Comprobante de Domicilio:',null,['class'=>'control-label'])!!}
			{!!Form::text('domicilio', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Número de Seguro Social:',null,['class'=>'control-label'])!!}
			{!!Form::number('nss', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('CURP:',null,['class'=>'control-label'])!!}
			{!!Form::text('curp', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('RFC:',null,['class'=>'control-label'])!!}
			{!!Form::text('rfc', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Talla de Camisa:',null,['class'=>'control-label'])!!}
			{!!Form::text('tallaCamisa', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Talla de Pantalón:',null,['class'=>'control-label'])!!}
			{!!Form::text('tallaPantalon', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		{!! Form::submit('Registrar', array('class' => 'btn btn-raised btn-primary')) !!}
	{!!Form::close()!!}
@stop
@section('script')
<script src="/js/empleado.js"></script>
<script src="/js/holder.js"></script>
@endsection