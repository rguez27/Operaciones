@extends('home')
@section('cuerpo')
	
	@include('layouts.modal')
	
	{{ csrf_field()}}
	<div class="bid-padding text-center blue-grey white-text">
		<h1>Registro de Sectores</h1>
	</div>
	{!!Form::open(array('id' => 'ajax'))!!}
	<input type="hidden" name="token" value="{{ csrf_token()}}" id="token">
		<div class="form-group label-floating">
			{!!Form::label('Nombre del supervisor:',null,['class'=>'control-label'])!!}
			{!!Form::text('supervisor', null,['id'=>'empresa','class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Turno:',null,['class'=>'control-label'])!!}
			{!!Form::text('turno', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Lugar de servicio:',null,['class'=>'control-label'])!!}
			{!!Form::text('servicio', null,['id'=>'lugar','class'=>'form-control', 'required' => 'required'])!!}
			<div id="result"></div>
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Observaciones:',null,['class'=>'control-label'])!!}
			{!!Form::text('notas', null,['class'=>'form-control', 'required' => 'required'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
			{!!Form::date('inscripcion', Carbon::now(),['class'=>'form-control'])!!}
		</div>
		<div class="form-group label-floating">
			{!!Form::select('sector', [
				'0' => 'Sector 1 Zona sur de cancún',
				'1' => 'Sector 2 Cancún centro',
				'2' => 'Sector 3 Zona norte de cancún'],
				['class'=>'form-control'])!!}
		</div>
		{!! Form::submit('Registrar', array('class' => 'btn btn-raised btn-primary')) !!}
	{!!Form::close()!!}
@stop
@section('script')
<script src="/js/sector.js"></script>
<script src="js/holder.js"></script>
{{-- <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script> --}}
@endsection