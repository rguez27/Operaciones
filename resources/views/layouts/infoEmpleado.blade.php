<div class="modal fade" id="infoEmp">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" id="hideModal" class="close" data-dismiss="modal" aria-hidden="true">x</button>
	        
			{{ csrf_field()}}
			<div class="bid-padding text-center blue-grey white-text">
				<h2>Datos Personales</h2>
			</div>
		<div class="row">
			<div class="col-md-9 col-md-push-0">
			{!!Form::open(array('id' => 'ajax')) !!}
			
			<input type="hidden" name="token" value="{{ csrf_token()}}" id="token">
			<input type="hidden" id="id">
			
			<div class="form-group has-success label-static">
			{!!Form::label('Nombre:',null,['class'=>'control-label'])!!}
			{!!Form::text('nombreEmpleado', null,['id'=>'emp','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
				{!!Form::date('inicio', null,['id'=>'ini','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Telefono:',null,['class'=>'control-label'])!!}
				{!!Form::number('telefono', null,['id'=>'tel','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Comprobante de Domicilio:',null,['class'=>'control-label'])!!}
				{!!Form::text('domicilio', null,['id'=>'dom','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Número de Seguro Social:',null,['class'=>'control-label'])!!}
				{!!Form::number('nss', null,['id'=>'seso','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('CURP:',null,['class'=>'control-label'])!!}
				{!!Form::text('curp', null,['id'=>'crp','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('RFC:',null,['class'=>'control-label'])!!}
				{!!Form::text('rfc', null,['id'=>'rfce','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Talla de Camisa:',null,['class'=>'control-label'])!!}
				{!!Form::text('tallaCamisa', null,['id'=>'cam','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Talla de Pantalón:',null,['class'=>'control-label'])!!}
				{!!Form::text('tallaPantalon', null,['id'=>'pant','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			
			{{-- {!! Form::submit('Actualizar', array('id'=>'actualizar','class' => 'btn btn-raised btn-warning')) !!} --}}
			{!!Form::close()!!}
		</div>
		<div class="form-group col-md-3 col-md-pull-3">
			<img src="holder.js/300x400?text=Imagen" id="holder">
		</div>	
		</div>
			<br>
	      </div>
	    </div>
	  </div>
	</div>
@section('script')
<script src="/js/empleado.js"></script>
@endsection