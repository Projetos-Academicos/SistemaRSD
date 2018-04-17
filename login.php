<?php

require '_php/Usuarios.php';
$usuarios = new Usuarios();
$usuarios->login();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login - RSD</title>
	<link rel="icon" href="_img/logo.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link href="_css/login.css" rel="stylesheet">
</head>
<body>
	<div class="wrapper">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">        
				<div class="navbar-header">         
					<a class="navbar-brand" href="index.html"><button class="r">R</button> Sistema RSD</a>
				</div>   
			</nav>
		</div>
		<div class = "container">
			<div class="wrapper">
				<form action="login.php" method="post" name="Login_Form" class="form-signin"> 
					<!--<div class="row text-center bol"><i class="fa fa-circle"></i></div>-->
					<h3 class="form-signin-heading text-center">Login</h3>
					<hr class="spartan">
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">
							<i class="fa fa-user"></i>
						</span>
						<input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" autofocus="" />
					</div>
					<div class="input-group">
						<span class="input-group-addon" id="sizing-addon1">
							<i class="fa fa-lock"></i>
						</span>
						<input type="password" class="form-control" name="senha" placeholder="Senha" required=""/>  
					</div>
					<div class="form-group">
						<input type="checkbox" tabindex="3" class="" name="lembrarSenha" id="lembrarSenha">
						<label for="lembrarSenha">Lembrar-me</label>
					</div>
					<button class="btn btn-lg btn-primary btn-block"  name="Entrar" value="Entrar" type="Submit">Entrar</button>  	
					<a id="esqueciSenha" href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Esqueceu sua senha?</a>	
				</form>
			</div>
		</div>
		<!-- MODAL DE RECUPERAR SENHA-->								
		<div class="modal fade forget-modal" tabindex="-1" role="dialog" aria-labelledby="myForgetModalLabel" aria-hidden="true" data-backdrop="static">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true" onclick="resetPergunta()">×</span>
							<span class="sr-only">Fechar</span>
						</button>
						<h4 class="modal-title">Recuperar senha</h4>
					</div>
					<div class="modal-body">
						<p>Infome sua Pergunta de Segurança:</p>
						<select id="pergunta" name="pergunta" class="form-control" required="">
							<option value="selecione"></option>
							<option value="primeiro-amor">Nome do primeiro amor?</option>
							<option value="melhor-amigo">Nome do(a) melhor amigo(a)?</option>
							<option value="aniversario-pai">Aniversário do seu pai?</option>								
						</select>
						<p>Infome sua Resposta de Segurança:</p>
						<input id="resposta" name="resposta" class="form-control" type="text" required="">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" onclick="resetPergunta()">Cancelar</button>
						<button type="button" class="btn btn-custom" data-toggle="modal" data-target=".password-modal" data-dismiss="modal" onclick="resetPergunta()">Recuperar</button>
					</div>
				</div> 
			</div> 
		</div> 
		<!-- MODAL DE TROCA DE SENHA-->
		<div class="modal fade password-modal" tabindex="-1" role="dialog"  data-backdrop="static">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">
							<span aria-hidden="true" onclick="resetSenha()">×</span>
							<span class="sr-only">Fechar</span>
						</button>
						<h4 class="modal-title">Trocar senha</h4>
					</div>
					<div class="modal-body">
						<p>Infome a nova senha:</p>
						<input type="password" name="novaSenha" id="novaSenha" class="form-control" autocomplete="off"/>
						<p>Confirme a senha:</p>
						<input type="password" name="confirmarSenha" id="confirmarSenha" class="form-control" autocomplete="off"/>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal" onclick="resetSenha()">Cancelar</button>
						<button type="button" class="btn btn-custom" data-dismiss="modal" onclick="resetSenha()">Salvar</button>
					</div>
				</div> 
			</div> 
		</div> 

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


		<script type="text/javascript">
			function resetPergunta(){			
				$("#pergunta").val("");  
				$("#resposta").val("");  

			}
		</script>
		<script type="text/javascript">
			function resetSenha(){			
				$("#novaSenha").val("");     
				$("#confirmarSenha").val("");   
			}
		</script>

	</body>
	</html>