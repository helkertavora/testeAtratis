<?php
require './core/init.php';

if(empty($_POST['id'])){
	//header('Location: circular-alt.php');
	print "erro";
	exit();	
}

$query = pg_query("DELETE FROM localidades WHERE id =".$_POST['id']);
if (pg_affected_rows($query)>0) {
	print "sucesso";
}else{
	return false;
}
	
?>