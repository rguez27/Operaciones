	<div class="modal" id="asgModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" id="hideModal" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	        
			{{ csrf_field()}}
			<div class="bid-padding text-center blue-grey white-text">
				<h2>Asignación de trabajo</h2>
			</div>
			{!!Form::open(array('id' => 'ajax')) !!}
			<div class="form-group label-floating">
				{!!Form::hidden('id', null,['id'=>'idE','class'=>'form-control'])!!}
			</div>
			<div class="form-group label-static">
				{!!Form::label('Nombre:',null,['class'=>'control-label'])!!}
				{!!Form::text('nombreEmpleado', null,['id'=>'nombre','class'=>'form-control', 'readonly'=>'true'])!!}
			</div>
			<div class="form-group label-floating">
				{!!Form::label('Asignar area de trabajo:',null,['class'=>'control-label'])!!}
				{!!Form::text('area', null,['class'=>'form-control', 'required' => 'required'])!!}
			</div>
			<div class="form-group label-floating">
				{!!Form::label('Asignar descanso:',null,['class'=>'control-label'])!!}
				{!!Form::select('descanso', [
				'0 '=> ' Lunes ',
				'1 '=> ' Martes ',
				'2 '=> ' Miércoles ',
				'3 '=> ' Jueves ',
				'4 '=> ' Viernes ',
				'5 '=> ' Sábado ',
				'6 '=> ' Domingo '],
				['class'=>'form-control'])!!}
			</div>
			{!! Form::submit('Asignar', array('class' => 'btn btn-raised btn-primary')) !!}
			{!!Form::close()!!}
			<br>
	      </div>
	    </div>
	  </div>
	</div>
@section('script')
<script src="/js/empleado.js"></script>
@endsection