<!DOCTYPE html>
<html lang="br">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>GeoSQL+</title>

<!-- Bootstrap core CSS -->
<link href="./bootstrap3/css/bootstrap.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="index.css" rel="stylesheet">

<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

<script src="ie/ie-emulation-modes-warning.js"></script>
<script src="index.js"> </script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed"
					data-toggle="collapse" data-target="#navbar" aria-expanded="false"
					aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">GeoSQL+</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#about">Sobre</a></li>
					<li><a href="#contact">Contatos</a></li>
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</nav>

	<div class="container">

		<div class="starter-template">
			<img src="./img/logGeosqlplus743x232.png" id="imglogo1"
				class="imglogo">
			<p class="lead" id="frase1">
				Esse é o GeoSQL+, um ambiente online para aprendizado de SQL
				espacialmente estendido.<br>
				<br> Escolha uma Base de Dados para começar:
			</p>
			<div class = "seletor">
			<select class="form-control" id = "nomesBase">
			<?php 
			include ('selectProj.php'); 
			criaHtmlBasesDisponiveis(dirname(__FILE__)."/bases");
			?>
			</select>

<!-- 			<a href = "http://aqui.io/geosql/"><button type="button" class="btn btn-success" id = "botaoIniciar" > -->
<!-- 			<span class="glyphicon glyphicon-play" aria-hidden="true"></span> -->
<!-- 			Iniciar</button></a> -->
			
			<button type="button" class="btn btn-success" id = "botaoIniciar"  onclick = "getBaseNameEscolhida();">
			<span class="glyphicon glyphicon-play" aria-hidden="true"></span>
			Iniciar</button>
			</div>

			<div class="mastfoot">
				<div class="inner">
					<div class="rodape-institucional" id = "rodape">
					<p>
						<a href="http://www.dcc.ufmg.br">Departamento de Ciência da Computação</a> -
						<a href="http://www.ufmg.br">UFMG</a>
					</p>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- /.container -->


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="./jquery/jquery-2.1.4.js" type="text/javascript"></script>
	<script src="./bootstrap3/js/bootstrap.js" type="text/javascript"></script>

	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="ie/ie10-viewport-bug-workaround.js" type="text/javascript"></script>

</body>
</html>
