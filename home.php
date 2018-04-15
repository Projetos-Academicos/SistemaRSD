<?php

	require '_php/Usuarios.php';
	$usuarios=new Usuarios();
	$usuarios->protege();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home - RSD</title>
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
	<link href="_css/home.css" rel="stylesheet">
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
					<a class="navbar-brand" href="#"><button class="r">R</button> Sistema RSD</a>
				</div>

				<!-- LADO DIREITO DO MENU-->
				<div class="collapse navbar-collapse" id="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário</a>
							<ul class="dropdown-menu">
								<li><a href="cadastrar-usuario.php">Cadastrar</a></li>
								<li><a href="#">Consultar</a></li>								
							</ul>
						</li>
						<li><a href="#">Relatórios</a></li>
						<li><a href="logout.php">Sair</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>	

				<!-- PAGINA SOBRE (CONTEUDO SOBRE) -->
	<div id="sobre" class="container-fluid">
		<div class="row">
			<div class="col-sm-8">
				<h2>Um pouco sobre mim</h2><br>
				<h4>Me chamo Ricardo Lima, tenho 20 anos, atualmente estou no 5º período da minha graduação em ciência da computação. Sou apaixonado pela área, principalmente em desenvolvimento de software, contudo busco sempre me aperfeiçoar não só em desenvolvimento, mas também nas demais áreas do curso.</h4><br>
				<p>Apesar de ainda ser muito jovem, responsabilidade e comprometimento é um dos pontos em que mais enfatizo no desenvolvimento dos meus projetos acadêmicos, tornando-os o mais profissional possível. Atualmente busco ingressar-me no mercado de trabalho, preferencialmente na área de desenvolvimento, como estagiário ou trainee para adquirir experiência e vivência, unindo e aperfeiçoando cada vez mais a teoria e a prática.</p>
				
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-user logo"></span>
			</div>
		</div>
	</div>

<!-- CURRICULO (CONTEUDO CURRICULO) -->
	<div id="curriculo" class="container-fluid">
		<div class="text-center">
			<h2>CURRICULO</h2>
			<h4>Curriculo academico</h4>
		</div>
		<div class="row slideanim">		    
			<div class="col-sm-3">
				<h4>Programação:</h4>
				<ul>
					<li>Logica de Programação;</li>
					<li>Programação Orientada a Objeto;</li>
					<li>Padrão MVC;</li>
					<li>Java;</li>
					<li>C#</li>			   		
				</ul>
			</div>	
			<div class="col-sm-3">
				<h4>Desenvolvimento Web:</h4>				
				<ul>
					<li>HTML;</li>
					<li>CSS;</li>
					<li>Bootstrap;</li>
					<li>PHP;</li>	
					<li>JavaScript;</li>	
				</ul>
			</div>			
			<div class="col-sm-3">
				<h4>Banco de Dados:</h4>
				<ul>
					<li>MySQL;</li>
					<li>SQL Server;</li>
					<li>Access 2016;</li>
					<li>JPA;</li>
					<li>Hibernate;</li>							   		
				</ul>
			</div>		
			<div class="col-sm-3">
				<h4>Engenharia de Software:</h4>
				<ul>
					<li>Diagrama de Classes;</li>
					<li>Diagrama de Casos de Usos;</li>
					<li>Histórias dos Usuários;</li>
					<li>Scrum;</li>
					<li>PMBOK;</li>
					<li>Redmine;</li>							   		
				</ul>
			</div>			
			<div class="col-sm-3">					
				<h4>Ambiente de Desenvolvimento (IDE):</h4>
				<ul>
					<li>NetBeans;</li>
					<li>Eclipse;</li>
					<li>Visual Studio;</li>
					<li>WorkBench;</li>							   		
				</ul>						
			</div>	
			<div class="col-sm-3">
				<h4>Conhecimentos Adicionais:</h4>
				<ul>
					<li>Git e GitHub;</li>
					<li>Wamp Server;</li>
					<li>Inglês Básico;</li>			   		
				</ul>
			</div>	  
		</div>
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