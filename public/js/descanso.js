$(document).ready(function(){
	var tablaDatos = $("#datos");
	var route = "/Descanso/show";
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
				console.log(data[i].id);
				datos+=
				 "<tr><td>"+data[i].nombreEmpresa+"</td><td>"+
				 data[i].direccion+"</td><td>"+data[i].telefono+
				 "</td><td>"+data[i].inscripcion+
				 "</td><td><button class='btn btn-raised btn-warning'><span></span> Editar</button>&nbsp&nbsp<button class='btn btn-raised btn-danger'><span></span> Eliminar</button></td></tr>"
			}
			tablaDatos.append(datos);
		}	
	});
});