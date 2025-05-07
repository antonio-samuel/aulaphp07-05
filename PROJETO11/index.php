<?php require_once "cabecalho.php" ; ?>

<body>
    <br><br><br> 
 
<!-- validação da Sessão: -->
<?php 
   if( usuarioEstaLogado()){  //chame a função usuarioEstaLogado()
?>
  <p class="alert-success"> Você está logado como 
	                      <?php echo usuarioLogado(); ?>  </p>
    
<?php  }else{   ?>


<!--Formulário de Login:-->
 <center>
    <h1>  Bem Vindo    </h1>
     <form action="login.php" method="post">
  	
          <label> Login:</label>
 		  <input  type="text" name="login"><br> 
	
          <label> Senha:</label>
 		  <input  type="password" name="senha"> <br> 
     
      <button type="submit"  class="btn btn-primary">Login </button> <br> 
		
		<a href = "cadastro.php">Cadastro </a>
     </form>  
 
</center>
<!--Fechando o if da sessão:--> 
  <?php  } ?>
 


