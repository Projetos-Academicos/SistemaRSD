<?php

require '_php/Usuarios.php';
$usuarios=new Usuarios();
$usuarios->protege();

?>
<?php  
try{
 $connect = mysqli_connect("localhost", "root", "", "sistemarsd");  
 $query ="SELECT * FROM usuarios;";  
 $result = mysqli_query($connect, $query);
}catch(Exception $e){
  
}
 ?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Consultar Usuario - RSD</title>
	<link rel="icon" href="_img/logo.ico" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1">*
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
	<link href="_css/estilo.css" rel="stylesheet">
	<link href="_css/consultarUsuarios.css" rel="stylesheet">
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

	<div id="main" class="container-fluid">


<div class="container">  
                <h3 align="center">Consulta de Usuários</h3>  
                <br/>
      
    <div class="row">     
      <div id ="buttons" class="col-md-5" >

        <label>ID</label>
        <input placeholder="Informe o ID" name="id" class="form-control" type="number" required="">
       <!-- <a href="cadastrar-usuario.php"><button type="button" class="btn btn-primary">Cadastrar</button></a> -->
        <a href="telaAlteraAluno.php"><button type="button" class="btn btn-primary">Alterar</button></a>
        <a href="deletar-usuario.php"><button type="button" class="btn btn-primary">Deletar</button></a>
      </div>

          <br>
          <br>          
            <div class="row">
              <div class="col-md-12">
                <div class="table-responsive">  
                     <table id="tabela" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>ID</td>
                                    <td>Nome</td>
                                    <td>Cargo</td>
                                    <td>Pergunta de Segurança</td>
                                    <td>Resposta de Segurança</td>
                                    <td>Usuário</td>
                                    <td>Senha</td>                                                                       
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                            //NOME DOS CAMPOS DA TABELA
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["nome"].'</td>
                                    <td>'.$row["cargo"].'</td>   
                                    <td>'.$row["perguntaSeguranca"].'</td> 
                                    <td>'.$row["respostaSeguranca"].'</td>
                                    <td>'.$row["usuario"].'</td>  
                                    <td>'.$row["senha"].'</td>                                              
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>                  
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

<script type="text/javascript">
 
 $(document).ready(function(){  
      $('#tabela').DataTable({
        "language" : br
      });
 });  
 var br = {
    "sEmptyTable": "Nenhum usuário encontrado",
    "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ usuários",
    "sInfoEmpty": "Mostrando 0 até 0 de 0 usuários",
    "sInfoFiltered": "(Filtrados de _MAX_ registros)",
    "sInfoPostFix": "",
    "sInfoThousands": ".",
    "sLengthMenu": "_MENU_ usuários por página",
    "sLoadingRecords": "Carregando...",
    "sProcessing": "Processando...",
    "sZeroRecords": "Nenhum usuário encontrado",
    "sSearch": "Pesquisar",
    "oPaginate": {
        "sNext": "Próximo",
        "sPrevious": "Anterior",
        "sFirst": "Primeiro",
        "sLast": "Último"
    },
    "oAria": {
        "sSortAscending": ": Ordenar colunas de forma ascendente",
        "sSortDescending": ": Ordenar colunas de forma descendente"
    }
}
  </script>