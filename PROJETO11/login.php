<?php
require_once 'conecta.php'; 
require_once 'banco-usuario.php'; 
require_once "logica-usuario.php"; 


$usuario=buscaUsuario($conexao,$_POST["login"],$_POST["senha"]);



if ($usuario == null) {
  header ("Location:index.php?login=0");
 }else{
  logaUsuario($usuario["login"]);//chama a função logaUsuario.
  header ("Location:index.php?login=1");
}

die();
?>