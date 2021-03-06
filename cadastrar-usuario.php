<?php

require '_php/Usuarios.php';
$usuarios=new Usuarios();
$usuarios->protege();

$usuarios2=new Usuarios();
$usuarios2->cadastrar();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastrar Usuario - RSD</title>
	<link rel="icon" href="_img/logo.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="_css/estilo.css" rel="stylesheet">
	<link href="_css/cadastrarUsuario.css" rel="stylesheet">
</head>
<body>

	<!-- MENU -->
	<div class="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<!-- LADO ESQUERDO DO MENU -->
				<div class="navbar-header">  
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>      
					<a class="navbar-brand" href="home.php"><button class="r">R</button> Sistema RSD</a>
				</div>

				<!-- LADO DIREITO DO MENU-->
				<div class="collapse navbar-collapse" id="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="home.php">Voltar</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>	

	<div class="container">
		<div class="col-md-2 col-md-offset-0"></div>
		<div class="col-md-8 col-md-offset-0">
			<div class="row">		
				<div class="contact-form">
					<h3>Cadastro</h3>
					<form id="contactform" action="cadastrar-usuario.php" method="post">
						<br/>
						<label>Nome</label>
						<input placeholder="Nome Completo" name="nome" class="form-control" type="text" required="">
						
						<label>Cargo</label>
						<select name="cargo" class="form-control" required="">
							<option value="selecione">Selecione</option>
							<option value="administrador">Administrador</option>
							<option value="gerente">Gerente</option>
							<option value="funcionario">Funcionario</option>
						</select>
						
						<label>Usuário</label>
						<input placeholder="Nome de Usuário" name="usuario" class="form-control" type="text" required="">
						<div class="senha">
							<label>Pergunta de Segurança</label>						
							<select name="pergunta" class="form-control" required="">
								<option value="primeiro-amor">Nome do primeiro amor?</option>
								<option value="melhor-amigo">Nome do(a) melhor amigo(a)?</option>
								<option value="aniversario-pai">Aniversário do seu pai?</option>								
							</select>
						</div>
						<div class="senha">
							<label>Resposta</label>
							<input id="senha" name="resposta" class="form-control" type="text" required="">
						</div>					
						
						<div class="senha">
							<label>Senha</label>						
							<input id="senha" name="senha" class="form-control" type="password" required="">
						</div>
						<div class="senha">
							<label>Confirmar Senha</label>
							<input id="senha" name="confirmarSenha" class="form-control" type="password" required="">
						</div>										
						<div class="col-md-offset-4">
							<button class="btn btn-link" type="submit" name="cadastrar">Cadastrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-md-2 col-md-offset-0"></div>
	</div>






	<!-- RODAPE -->
	
	<footer id="footer">
		<div class="container">
			<hr id="hrpe" class="spartan">
			<div class="row">
				<div class="col-sm-12">             
					<p>Copyright © - 2018</p>
					<p>Construido por <strong><a href="http://ricardo-lima.000webhostapp.com/" target="_blank">Ricardo Lima</a></strong></p>
				</div>
			</div>
		</div>
	</footer> 

</body>
</html>