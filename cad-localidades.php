<?php
require_once './core/topo.php';
require_once './core/classes/fotos.php';

?>  
		
	<h1>Cadastro de Cidades</h1>
 	<?php
	if(empty($errors) === false){
		
		print "
		<div class=\"alert alert-danger alert-dismissable\">
			<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
			<p><strong>Erro! </strong>" . implode("</p><p>", $errors) . "</p>
		</div>";
		
	 }
	if(isset($_SESSION['alerta'])){
		print $_SESSION['alerta'];	
		unset($_SESSION['alerta']);
	}
   	?>         
 	<form id="cadForm" class="form-horizontal" role="form" action="" method="post" enctype="multipart/form-data">
    	<fieldset>
            <legend>&nbsp;</legend>

        <div class="form-group">
    		<label for="ativoMenu" class="col-sm-2 control-label">Nome:</label>
    		<div class="col-xs-4">
            	<input type="text" class="form-control" name="nome" id="nome" minlength="6" placeholder="Nome">
    		</div>
  		</div>
  		
        <div class="form-group">
    		<label for="labelMenu" class="col-sm-2 control-label"> Estado:</label>
    		<div class="col-xs-4">
      			<input type="text" class="form-control" name="estado" 
      			id="estado" minlength="4" placeholder="Estado">
    		</div>
  		</div>
        <div class="form-group">
    		<label for="labelMenu" class="col-sm-2 control-label">Cidade:</label>
    		<div class="col-xs-4">
      			<input type="text" class="form-control" name="cidade" id="cidade" 
      			minlength="4" placeholder="Cidade">
    		</div>
  		</div>

        <div class="form-group">
    		<label for="labelMenu" class="col-sm-2 control-label"> Latitude: </label>
    		<div class="col-xs-4">
      			<input type="text" class="form-control" name="latitude" 
      			id="latitude" maxlength="30" placeholder="+-00.0000000">
    		</div>
  		</div>
  		<div class="form-group">
    		<label for="labelMenu" class="col-sm-2 control-label">Longitude:</label>
    		<div class="col-xs-4">
      			<input type="text" class="form-control" name="longitude" 
      			id="longitude" maxlength="20" placeholder="+-00.0000000">
    		</div>
  		</div>

  		<div class="form-group">
    		<label for="labelMenu" class="col-sm-2 control-label">Imagem:</label>
    		<div class="col-xs-4">
      			<input type="file" class="form-control" name="imagem" placeholder="Imagem">
    		</div>
  		</div>
  		<br />	
  		<div class="form-group">
    		<div class="col-sm-offset-2 col-xs-4">
      			<button type="submit" class="btn btn-primary">Salvar</button>&nbsp;&nbsp;
      			<button type="reset" class="btn btn-primary">Limpar</button>
    		</div>
  		</div>
        </fieldset>
	</form>

<?php
require_once './core/fim.php';
?>  
<script>
jQuery(document).ready(function(){


	$("#cadForm").validate({
		rules:{
		
			nome:{
				required: true, minlength: 6
			}
			,estado:{
				required: true, minlength: 4
			}
			
			,cidade: {
				required: true, minlength: 4
			}
			
			,latitude: {
				required: true, maxlength: 20
			}
			,longitude: {
				required: true, maxlength: 20
			}
			
			
		},
		messages:{
			nome:{
				required: "Nome obrigatorio!",
				minlength: "Digite no minimo um nome com 6 letras"
			}
			
			,estado:{
				required: "Estado obrigatorio!", 
				maxlength: "Digite no minimo 4 letras para o campo estado!"
			}
			
			,cidade: {
				required: "Cidade obrigatorio!", 
				maxlength: "Digite no minimo 6 letras para o campo cidade!"
			}
			,latitude: {
				required: "Latitude obrigatorio!", 
				maxlength: "Digite ate 20 digitos"
			}
			,longitude: {
				required: "Longitude obrigatorio!", 
				maxlength: "Digite ate 20 digitos"
			}
			
			
		}
	});
	
});
</script>
</body>
</html>