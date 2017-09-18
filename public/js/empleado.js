$('#ajax').submit(function(event){

	var data = $('form#ajax').serialize();
	console.log(data);
		event.preventDefault();

	$.ajax({
		url:"/Empleados",
		type:'POST',
		dataType:'json',
		data:data,

	success:function(){
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
	var route = "/Empleados/show";
	var token =$("#token").val();

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
				 "<tr><td>"+data[i].id+"</td><td>"+
				 data[i].nombreEmpleado+"</td><td>"+data[i].inicio+
				 "</td><td>"+data[i].telefono+
				 "</td><td>"+data[i].domicilio+
				 "</td><td><button title='Asignar' value="+data[i].id+" onClick='asignar(this)' class='btn btn-raised btn-secondary' data-toggle='modal' data-target='#asgModal'><span class='material-icons'>domain</span></button>&nbsp&nbsp<button title='Editar' value="+data[i].id+" onClick='editar(this)' class='btn btn-raised btn-warning' data-toggle='modal' data-target='#editModalE'><span class='material-icons'>assignment</span></button>&nbsp&nbsp<button title='Información' value="+data[i].id+" onClick='info(this)' class='btn btn-raised btn-info' data-toggle='modal' data-target='#infoEmp'><span class='material-icons'>contacts</span></button></td></tr>"
			}
			tablaDatos.append(datos);
		}	
	});
});



function asignar(btn){
	console.log(btn.value);
	var route = "Empleados/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#idE").val(res.id);
		$("#nombre").val(res.nombreEmpleado);
	});
}

function editar(btn){
	console.log(btn.value);
	var route = "Empleados/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#idE").val(res.id);
		$("#empleado").val(res.nombreEmpleado);
		$("#inicio").val(res.inicio);
		$("#telefono").val(res.telefono);
		$("#domicilio").val(res.domicilio);
		$("#nss").val(res.nss);
		$("#curp").val(res.curp);
		$("#rfc").val(res.rfc);
		$("#camisa").val(res.tallaCamisa);
		$("#pantalon").val(res.tallaPantalon);
	});
}

$("#actualizar").click(function(){
	var value = $("#id").val();
	var dato = $("#ajax").val();
	var route = "Empleados/"+value+"";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {"X-CSRF-TOKEN": token},
		type:"PUT",
		dataType:"json",
		data: dato
	});
});

function info(btn){
	console.log(btn.value);
	var route = "Empleados/"+btn.value+"/edit";

	$.get(route, function(res){
		$("#idE").val(res.id);
		$("#emp").val(res.nombreEmpleado);
		$("#ini").val(res.inicio);
		$("#tel").val(res.telefono);
		$("#dom").val(res.domicilio);
		$("#seso").val(res.nss);
		$("#crp").val(res.curp);
		$("#rfce").val(res.rfc);
		$("#cam").val(res.tallaCamisa);
		$("#pant").val(res.tallaPantalon);
	});
}