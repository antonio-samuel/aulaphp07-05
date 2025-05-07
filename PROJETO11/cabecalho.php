<?php require_once("logica-usuario.php") ?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Validação de Login</title>  
       <link  href="css/bootstrap.css" rel="stylesheet" />     
    </head>   
<body>
  <br><br><br>
 
<!--if para verificar se o usuário está logado (chamou a função usuarioEstaLogado() :-->

<?php if (usuarioEstaLogado()){  ?> 

<!--Se o usuário estiver logado, aparecerá o seguinte menu:-->

	   <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
		   <div  class="navbar-header">
			 <a href= "index.php" class= "navbar-brand"> HOME </a>
	   </div>

		<div>
		 <ul class="nav navbar-nav" >
		  <li>   <a href=" #" > Cadastrar </a>  </li> 
		  <li>   <a href= "#">  Excluir  </a>  </li> 
		  <li>   <a href= "#">  Alterar </a>  </li>
		  <li>    <a href="logout.php"> Deslogar </a> </li> 
		  </ul>
		</div>
	   </div>
	 </div>
 
<!--Fechando o if:-->
<?php  }   ?>


  <main class="container">
<article class="principal">

