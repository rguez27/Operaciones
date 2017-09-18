<div class="modal" id="editModalC">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" id="hideModal" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        
			{{ csrf_field()}}
			<div class="bid-padding text-center blue-grey white-text">
				<h2>Actualizar Empresa</h2>
			</div>
			{!!Form::open(array('id' => 'ajax')) !!}
			
			<input type="hidden" name="token" value="{{ csrf_token()}}" id="token">
			<input type="hidden" id="id">

			<div class="form-group label-static">
			{!!Form::label('Nombre de la empresa:',null,['class'=>'control-label'])!!}
			{!!Form::text('nombreEmpresa', null,['id'=>'empresa','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Razón Social:',null,['class'=>'control-label'])!!}
				{!!Form::text('razonSocial', null,['id'=>'razon','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('RFC:',null,['class'=>'control-label'])!!}
				{!!Form::text('rfc', null,['id'=>'rfc','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Dirección:',null,['class'=>'control-label'])!!}
				{!!Form::text('direccion', null,['id'=>'direccion','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
			{!!Form::label('Telefono:',null,['class'=>'control-label'])!!}
			{!!Form::number('telefono', null,['id'=>'telefono','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Correo de Contacto:',null,['class'=>'control-label'])!!}
				{!!Form::email('correoContacto', null,['id'=>'correoContacto','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Correo de Facturación:',null,['class'=>'control-label'])!!}
				{!!Form::email('correoFacturacion', null,['id'=>'correoFacturacion','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
				{!!Form::date('inscripcion', null,['id'=>'inscripcion','class'=>'form-control'])!!}
			</div>
			{!! Form::submit('Actualizar', array('id'=>'actualizar','class' => 'btn btn-raised btn-warning')) !!}
			{!!Form::close()!!}
			<br>
	      </div>
	    </div>
	  </div>
	</div>
@section('script')
<script src="/js/empresa.js"></script>
@endsection