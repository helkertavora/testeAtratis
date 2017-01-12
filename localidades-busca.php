<?php
require './core/init.php';

$i=0;
$row = array();
$query = pg_query("SELECT * FROM localidades ORDER BY nome");
while($aRow = pg_fetch_assoc($query))
{
	$row[$i]['value'] = $aRow['id'];	
	$row[$i]['text'] = $aRow['nome'];
	$i++;			
}

print json_encode( $row );
		
?>