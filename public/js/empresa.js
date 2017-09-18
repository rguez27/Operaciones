$('#ajax').submit(function(event){

	var data = $('form#ajax').serialize();
	console.log(data);
		event.preventDefault();

	$.ajax({
		url:"/Empresas",
		type:'POST',
		dataType:'json',
		data:data,

	success:function(data){
		$('#showModal').modal('show').on('shown', function(){
			window.setTimeout(function(){
				$('#showModal').modal('hide');
			});
		});
		}
	});
});

$(document).ready(function(){
	var tablaDatos = $("#datos");
	var route = "/Empresas/show";
	var token = $("#token").val();

	$.ajax({
		url:route,
		headers:{'X-CSRF-TOKEN':token},
		type:'GET',
		dataType: 'json',
		success: function(data){
			console.log(data.length);
			var datos = "";

			for(var i=0; i<data.length;i++){
				//console.log(data[i].id);
				datos+=
				 "<tr><td>"+data[i].nombreEmpresa+"</td><td>"+
				 data[i].direccion+"</td><td>"+data[i].telefono+
				 "</td><td>"+data[i].inscripcion+
				 "</td><td><button title='Editar' value="+data[i].id+" OnClick='Mostrar(this)' class='btn btn-raised btn-warning' data-toggle='modal' data-target='#editModalC'><span class='material-icons'>assignment</span></button>&nbsp&nbsp<button title='Información' value="+data[i].id+" onClick='info(this)' class='btn btn-raised btn-info' data-toggle='modal' data-target='#infoCom'><span class='material-icons'>contacts</span></button>&nbsp&nbsp<button title='Eliminar' value="+data[i].id+" OnClick='Eliminar(this)' class='btn btn-raised btn-danger'><span class='material-icons'>delete</span></button></td></tr>"
			}
			tablaDatos.append(datos);
		}	
	});
});
// href='/Empresas/Empresa/edit'
function Mostrar(btn){
	var route = "Empresas/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#id").val(res.id);
		$("#empresa").val(res.nombreEmpresa);
		$("#razon").val(res.razonSocial);
		$("#rfc").val(res.rfc);
		$("#direccion").val(res.direccion);
		$("#telefono").val(res.telefono);
		$("#correoContacto").val(res.correoContacto);
		$("#correoFacturacion").val(res.correoFacturacion);
		$("#inscripcion").val(res.inscripcion);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#ajax").val();
	var route = "Empresas/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {"X-CSRF-TOKEN": token},
		type:"PUT",
		dataType:"json",
		data: dato
	});
});

function Eliminar(btn){
	var route = "Empresas/"+btn.value+"";
	var token = $("token").val();

	$.ajax({
		url: route,
		headers:{"X-CSRF-TOKEN": token},
		type: "DELETE",
		dataType: "json",
		success: function(){

		}
	});
}

function info(btn){
	console.log(btn.value);
	var route = "Empresas/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#idE").val(res.id);
		$("#empr").val(res.nombreEmpresa);
		$("#razn").val(res.razonSocial);
		$("#rfce").val(res.rfc);
		$("#dir").val(res.direccion);
		$("#tel").val(res.telefono);
		$("#contacto").val(res.correoContacto);
		$("#factura").val(res.correoFacturacion);
		$("#inicio").val(res.inscripcion);
	});
}

// $(document).ready(function(){
// 	$('#empresa').keyup(function(){
// 		var str = $('#empresa').val();
// 		if (str == '') {

// 		}
// 		else{
// 			$.get('{{url("Empresas/show")}}'+str, function(data){
// 				$('#datos').html(data);
// 			});
// 		}
// 	});
// });