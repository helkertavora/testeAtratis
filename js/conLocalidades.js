$(document).ready(function() {
	
	$.fn.editable.defaults.mode = 'inline';   
	$.fn.editable.defaults.url = '/post';  
	
	$('#nome a').editable({
		type: 'text',
		name: 'nome',
		url: 'localidades-alt.php',
		title: 'Enter a Descrição',
		success: function(value, response) {
        	var resultado = value.split(";"); 
			$('#labelDataAlteracao'+resultado[0]).html(resultado[1]);
  		}
	});

	$('#estado a').editable({
		type: 'text',
		name: 'estado',
		url: 'localidades-alt.php',
		title: 'Enter a Descrição',
		success: function(value, response) {
        	var resultado = value.split(";"); 
			$('#labelDataAlteracao'+resultado[0]).html(resultado[1]);
  		}
	});

	$('#cidade a').editable({
		type: 'text',
		name: 'cidade',
		url: 'localidades-alt.php',
		title: 'Enter a Descrição',
		success: function(value, response) {
        	var resultado = value.split(";"); 
			$('#labelDataAlteracao'+resultado[0]).html(resultado[1]);
  		}
	});

	$('#latitude a').editable({
		type: 'text',
		name: 'latitude',
		url: 'localidades-alt.php',
		title: 'Enter a Descrição',
		success: function(value, response) {
        	var resultado = value.split(";"); 
			$('#labelDataAlteracao'+resultado[0]).html(resultado[1]);
  		}
	});

	$('#longitude a').editable({
		type: 'text',
		name: 'longitude',
		url: 'localidades-alt.php',
		title: 'Enter a Descrição',
		success: function(value, response) {
        	var resultado = value.split(";"); 
			$('#labelDataAlteracao'+resultado[0]).html(resultado[1]);
  		}
	});

	$('#imagem a').editable({
		type: 'text',
		name: 'imagem',
		url: 'localidades-alt.php',
		title: 'Enter a Descrição',
		success: function(value, response) {
        	var resultado = value.split(";"); 
			$('#labelDataAlteracao'+resultado[0]).html(resultado[1]);
  		}
	});	
	
});

function deleteLocalidades(id){
	if (confirm("Deseja realmente excluir?"))
	{
		var dataString = 'id='+ id;
		$("#list_"+id).addClass("danger");
		$.ajax({
			type: "POST",
			url: "localidades-excluir.php",
			data: dataString,
			cache: false,
			success: function(result){
				if(result){
					
					if(result=='sucesso'){
						
						$( "#list_"+id ).hide( 2000, function() {
							$( "#list_"+id ).remove();
						});
					
					}else{
						alert("Erro de execução!");
					}
					
				}else{
					alert("Erro!");	
				}
			}
		});
	}
}