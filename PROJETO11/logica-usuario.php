
<?php
session_start();



function  usuarioEstaLogado(){ 
   return isset($_SESSION["usuario_logado"]);
 }


 function  usuarioLogado(){ 
   return ($_SESSION["usuario_logado"]);

 }




function  logaUsuario($_login){   
   $_SESSION["usuario_logado"] = $login;

 }



 function logout(){ 
   session_destroy();
   die;
   //INSERIR CÓDIGOS AQUI
}
?>
