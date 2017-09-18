<div class="modal" id="editModalE">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" id="hideModal" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        
			{{ csrf_field()}}
			<div class="bid-padding text-center blue-grey white-text">
				<h2>Actualizar Empleado</h2>
			</div>
			{!!Form::open(array('id' => 'ajax')) !!}
			
			<input type="hidden" name="token" value="{{ csrf_token()}}" id="token">
			<input type="hidden" id="id">
			
			<div class="form-group label-static">
			{!!Form::label('Nombre:',null,['class'=>'control-label'])!!}
			{!!Form::text('nombreEmpleado', null,['id'=>'empleado','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
				{!!Form::date('inicio', null,['id'=>'inicio','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Telefono:',null,['class'=>'control-label'])!!}
				{!!Form::number('telefono', null,['id'=>'telefono','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Comprobante de Domicilio:',null,['class'=>'control-label'])!!}
				{!!Form::text('domicilio', null,['id'=>'domicilio','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Número de Seguro Social:',null,['class'=>'control-label'])!!}
				{!!Form::number('nss', null,['id'=>'nss','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('CURP:',null,['class'=>'control-label'])!!}
				{!!Form::text('curp', null,['id'=>'curp','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('RFC:',null,['class'=>'control-label'])!!}
				{!!Form::text('rfc', null,['id'=>'rfc','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Talla de Camisa:',null,['class'=>'control-label'])!!}
				{!!Form::text('tallaCamisa', null,['id'=>'camisa','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Talla de Pantalón:',null,['class'=>'control-label'])!!}
				{!!Form::text('tallaPantalon', null,['id'=>'pantalon','class'=>'form-control'])!!}
			</div>
			
			{!! Form::submit('Actualizar', array('id'=>'actualizar','class' => 'btn btn-raised btn-warning')) !!}
			{!!Form::close()!!}
			<br>
	      </div>
	    </div>
	  </div>
	</div>
@section('script')
<script src="/js/empleado.js"></script>
@endsection