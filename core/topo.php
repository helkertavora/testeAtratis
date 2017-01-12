<?php 
require_once 'init.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atratis Fortes</title>
	<meta name="author" content="Agile Insight http://www.agileinsight.com.br/">
    <meta name="robots" content="noindex, nofollow">
    
    <link href="<?php print $path; ?>/css/bootstrap.css" rel="stylesheet">
  	<link href="<?php print $path; ?>/css/bootstrap-editable.css" rel="stylesheet">
    <link href="<?php print $path; ?>/css/topo.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php print $path; ?>/css/chosen.css" />
    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>

<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
          	</button>
            <a class="navbar-brand" href="<?php print $path; ?>/home.php">Atratis-Fortes</a>
      	</div>
      	<div class="navbar-collapse collapse">
          	<ul class="nav navbar-nav">
          		<li class="dropdown">
                  <a href="lista-localidades.php" id="drop3" role="button" class="dropdown-toggle">Localidades</a>
              </li>
              <li class="dropdown">
                  <a href="cad-localidades.php" id="drop3" role="button" class="dropdown-toggle">Cadastros</a>
              </li>
               <li class="dropdown">
                  <a href="testeMaps.php" id="drop3" target="_blank" role="button" class="dropdown-toggle">Pins no Mapa</a>
              </li>
          	</ul>
            <ul class="nav navbar-nav navbar-right">
            	<li id="fat-menu" class="dropdown">
              		<a href="<?php print $path; ?>/home.php" id="drop3" role="button" class="dropdown-toggle">Teste Fortes</a>
            	</li>
          	</ul>
      	</div><!--/.nav-collapse -->
  	</div>
</div>

<div class="container">