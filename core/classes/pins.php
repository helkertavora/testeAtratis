<?php  

require_once '../init.php';


class Pins{


public function resultPins(){

$SQL = "SELECT * FROM localidades";
 
$table = pg_query($SQL) or die(error_log("error na função do banco"));
 
while ($row = pg_fetch_array($table))  
{
 
    $i=0;
                 
    foreach($row as $key => $value)    
    {
 
        if (is_string($key)) 
        {
         $fields[pg_field_name($table,$i++)] = $value;
        }
 
    }
 
    $json_result[ ] =  $fields;
 
}
 
$JSON = json_encode($json_result);
 
 //print_r($JSON);
return $JSON;

}

}

$pins = new Pins();
echo $pins->resultPins();

?>