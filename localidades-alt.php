<?php
require './core/init.php';

$campo = $_POST['name'];
$valor = trim($_POST['value']);
$id= $_POST['pk'];


$query = pg_query("UPDATE localidades SET $campo='$valor' WHERE id =$id");
//print $id_fornecedor.";".date('d-m-Y H:i:s', $data_alterado);
?>