@extends('home')
@section('cuerpo')
	
	@include('layouts.modal')

	{{ csrf_field()}}
	<div class="bid-padding text-center blue-grey white-text">
		<h1>Registro de Empresa</h1>
	</div>
	{!!Form::open(array('id' => 'ajax'))!!}
		<div class="form-group label-floating">
			{!!Form::label('Nombre de la empresa:',null,['class'=>'control-label'])!!}
			{!!Form::text('nombreEmpresa', null,['id'=>'empresa','class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Razón Social:',null,['class'=>'control-label'])!!}
			{!!Form::text('razonSocial', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('RFC:',null,['class'=>'control-label'])!!}
			{!!Form::text('rfc', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			
			{!!Form::text('direccion', null,['class'=>'form-control','id'=>'srcBox', 'placeholder'=>'Dirección', 'required' => 'required'])!!}
		</div>
		{!!Form::hidden('lat', null,[ 'id'=>'latitud'])!!}
		{!!Form::hidden('lng', null,['id'=>'longitud'])!!}
		<div class="form-group label-floating">
			{!!Form::label('Telefono:',null,['class'=>'control-label'])!!}
			{!!Form::number('telefono', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Correo de Contacto:',null,['class'=>'control-label'])!!}
			{!!Form::email('correoContacto', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Correo de Facturación:',null,['class'=>'control-label'])!!}
			{!!Form::email('correoFacturacion', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
			{!!Form::date('inscripcion', Carbon::now(),['class'=>'form-control'])!!}
		</div>
		{!! Form::submit('Registrar', array('class' => 'btn btn-raised btn-primary', 'id' => 'btnShowModal')) !!}
	{!!Form::close()!!}
@stop
@section('script')
<script type="text/javascript" src="/js/empresa.js"></script>
<script type="text/javascript" src="/js/srcBox.js"></script>
<script type="text/javascript"
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxY2t6vfI0_pTZm35WozqteWNecmH6joI&libraries=places&callback=initMap" async defer>
</script>
@endsection