<div class="modal fade" id="infoCom">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" id="hideModal" class="close" data-dismiss="modal" aria-hidden="true">x</button>
	        
			{{ csrf_field()}}
			<div class="bid-padding text-center blue-grey white-text">
				<h2>Datos de la empresa</h2>
			</div>
			<div class="row">
				<div class="col-md-9 col-md-push-0">
				{!!Form::open(array('id' => 'ajax'))!!}
			<div class="form-group has-success label-static">
				{!!Form::label('Nombre de la empresa:',null,['class'=>'control-label'])!!}
				{!!Form::text('nombreEmpresa', null,['id'=>'empr','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Razón Social:',null,['class'=>'control-label'])!!}
				{!!Form::text('razonSocial', null,['id'=>'razn','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('RFC:',null,['class'=>'control-label'])!!}
				{!!Form::text('rfc', null,['id'=>'rfce','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Dirección:',null,['class'=>'control-label'])!!}
				{!!Form::text('direccion', null,['id'=>'dir','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			{{-- {!!Form::hidden('lat', null,[ 'id'=>'latitud'])!!} --}}
			{{-- {!!Form::hidden('lng', null,['id'=>'longitud'])!!} --}}
			<div class="form-group has-success label-static">
				{!!Form::label('Telefono:',null,['class'=>'control-label'])!!}
				{!!Form::number('telefono', null,['id'=>'tel','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Correo de Contacto:',null,['class'=>'control-label'])!!}
				{!!Form::email('correoContacto', null,['id'=>'contacto','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Correo de Facturación:',null,['class'=>'control-label'])!!}
				{!!Form::email('correoFacturacion', null,['id'=>'factura','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group has-success label-static">
				{!!Form::label('Fecha de Contratación:',null,['class'=>'control-label'])!!}
				{!!Form::date('inscripcion', null,['id'=>'inicio','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			{{-- {!! Form::submit('Registrar', array('class' => 'btn btn-raised btn-primary', 'id' => 'btnShowModal')) !!} --}}
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
<script src="/js/empresa.js"></script>
@endsection