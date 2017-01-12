<?php 

if (empty($_POST) === false) {

$imagem = $_FILES["imagem"]["name"]; //pega o nome do arquivo
$temp_imagem = $_FILES["imagem"]["tmp_name"]; //pega o "temp" do arquivo
$tamanho = $_FILES["imagem"]["size"]; //pega o tamanho do arquivo
$t_maximo = 4000000; //tamanho máximo do arquivo - em bytes
$diretorio = './img/'; //pasta onde o arquivo será gravado

$erro = "";

if ($tamanho > $t_maximo) {  //checa se o arquivo não ultrapassou o limite
  $erro = "O tamanho máximo permitido é de 4MB";
} elseif (is_file($imagem)) { //checa se é mesmo um arquivo
  $erro = "Selecione um <u>arquivo</u> á ser enviado";
} elseif (is_dir($imagem)) { //checa se não é um diretório
  $erro = "Selecione um <u>arquivo</u> á ser enviado";
}

if ($erro == "") { //se não ocorreram erros, vamo gravar o arquivo no server e no db
move_uploaded_file($temp_imagem, $diretorio.$imagem); //grava o arquivo na pasta do server que foi especificada

	//$general->pre($_POST);
	$nome = trim($_POST['nome']);
	$estado = trim($_POST['estado']);
	$cidade = trim($_POST['cidade']);
	$latitude = trim($_POST['latitude']);
	$longitude = trim($_POST['longitude']);

	$data_cadastro = time();
	
	$verifica = pg_query("SELECT * FROM localidades as l WHERE l.estado='$estado' AND l.cidade='$cidade'");

	if(pg_num_rows($verifica)>0){

		$_SESSION['alerta'] = $general->msgAlerta("danger", "Informações ja cadastras para essa cidade!", "Erro");

	}else{
		
		$cadastra = pg_query("INSERT INTO localidades(nome, estado, cidade, latitude, longitude, imagem) VALUES('$nome', '$estado', '$cidade',
		 '$latitude', '$longitude' , '$imagem')");
		if (pg_affected_rows($cadastra)>0) {
			
			$_SESSION['alerta'] = $general->msgAlerta("success", "Cidade cadastrada com sucesso.", "Info");	
			header('Location: lista-localidades.php');
			exit();

		}else {
			$_SESSION['alerta'] = $general->msgAlerta("danger", "Cidade não cadastrada!", "Erro");
		}	
	}

} else {
  header("location:erro404.php?id=$erro"); //se houve algum erro, vai para a página de erro e mostra qual o problema
	}

}