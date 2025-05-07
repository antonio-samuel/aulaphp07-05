<?php 

function buscaUsuario($conexao, $login, $senha) {
    try {
       $sql = "select * from usuarios 
       where login = :login 
       and senha = MD5(:senha)";
       $stmt = $conexao->prepare($sql);
       $stmt->bindParam(':login',$login);
       $stmt->bindParam(':senha',$senha);
       $stmt->execute();
       $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
       return $usuario;
	   //INSERIR OS CÓDIGOS
	   
	   
	   
    }catch(PDOException $e){
        echo "Erro ao buscar usuário: " . $e->getMessage();
        return null;
    }
}
?>


