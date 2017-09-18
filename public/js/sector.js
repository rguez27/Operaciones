$('#ajax').submit(function(event){

	var data = $('form#ajax').serialize();
	console.log(data);
		event.preventDefault();

	$.ajax({
		url:"/Sectores",
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
	$('#lugar').keyup(function(){
		var txt = $(this).val();
		if (txt != '') {

		}
		else{
			$('#result').html('');
			$.ajax({
				url: '/Empresas/show',
				method:'POST',
				data:{search:txt},
				dataType:'text',
				success:function(data){
					$('#result').html(data);
				}
			});
		}
	});
});