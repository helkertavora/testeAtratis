<?php
require_once './core/topo.php';
?>  
<style type="text/css" title="currentStyle">
	@import "./css/demo_table.css";
</style>		

<h1>Consulta de Cidades</h1>
<p class="text-right" style="padding-top:10px"><button type="button" class="btn btn-primary" onclick="javascript:window.location.href=window.location.href;">Recarregar</button></p>	
<table class="table table-striped table-hover table-bordered " id="fornecedor">
    <thead>
        <tr>
            <th style="text-align:center; width:50px; vertical-align:middle; cursor:pointer">#</th>
            <th style="text-align:center; vertical-align:middle; cursor:pointer">Nome</th>
            <th style="text-align:center; vertical-align:middle; cursor:pointer">Estado</th>
            <th style="text-align:center; vertical-align:middle; cursor:pointer">Cidade</th>
            <th style="text-align:center; vertical-align:middle; cursor:pointer">Latitude</th>
            <th style="text-align:center; vertical-align:middle; cursor:pointer">Longitude</th>
            <th style="text-align:center; vertical-align:middle; cursor:pointer">Imagem</th>
            <th style="text-align:center; width:50px; vertical-align:middle; cursor:pointer">Excluir</th>
        </tr>
    </thead>
    <tbody id="listaEventos">
	<?php 
	$i = 0;
	$query = pg_query("SELECT * FROM localidades");		
	while($local = pg_fetch_array($query)) {
		$i++;

	?>
		
        <tr id="list_<?php print $local['id']; ?>">
            <td style="text-align:center; vertical-align:middle;"><?php print $i; ?></td>
            
            <td id="nome" style="vertical-align:middle; text-align:center">
                <a href="#" data-pk="<?php print $local['id']; ?>"><?php print $local['nome']; ?></a>
            </td>

            <td id="estado" style="vertical-align:middle; text-align:center">
                <a href="#" data-pk="<?php print $local['id']; ?>"><?php print $local['estado']; ?></a>
            </td>
            
            <td id="cidade" style="vertical-align:middle; text-align:center">
                <a href="#" data-pk="<?php print $local['id']; ?>"><?php print $local['cidade']; ?></a>
            </td>

            <td id="latitude" style="vertical-align:middle; text-align:center">
                <a href="#" data-pk="<?php print $local['id']; ?>"><?php print $local['latitude']; ?></a>
            </td>
            <td id="longitude" style="vertical-align:middle; text-align:center">
                <a href="#" data-pk="<?php print $local['id']; ?>"><?php print $local['longitude']; ?></a>
            </td>
             <td id="imagem" style="vertical-align:middle; text-align:center">
                <a href="#" data-pk="<?php print $local['id']; ?>"><?php print $local['imagem']; ?></a>
            </td>
            
            <td style="text-align:center" class="delete">
                    <a href="javascript:void()" title="Excluir">
                        <img src="./img/delete.jpg" height="16" onclick="deleteLocalidades('<?php print $local['id']; ?>')" border="0">
                    </a>
            </td>
            
        </tr>
           	
	<?php			
	}
	?>
    </tbody>
</table>
<?php
require_once './core/fim.php';
?>  
<script src="<?php print $path; ?>/js/conLocalidades.js"></script>
<script type="text/javascript" language="javascript" src="<?php print $path; ?>/js/jquery.dataTables.js"></script>
<script>
$(document).ready( function() {
		
	$('#fornecedor').dataTable();	
	
});
</script>
</body>
</html>	