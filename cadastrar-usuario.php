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
						<div class="clearfix"></div>
						<label>Email</label>
						<input placeholder="Email" name="email" class="form-control" type="text" required="">
						<div class="clearfix"></div>
						<label>Usuário</label>
						<input placeholder="Nome de Usuário" name="usuario" class="form-control" type="text" required="">
						<div class="clearfix"></div>
						<label>Senha</label>
						<input name="senha" class="form-control" type="password" required="">
						<div class="clearfix"></div>
						<label>Confirmar Senha</label>
						<input name="confirmarSenha" class="form-control" type="password" required="">
						<div class="clearfix"></div>
                        <div class="col-md-offset-4">
                      	<button class="btn btn-link col-lg-4" type="submit" name="cadastrar">Cadastrar</button>
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