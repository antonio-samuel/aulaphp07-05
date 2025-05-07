<?php require_once "conecta.php";?>

<?php	
  
$login = $_POST['login'];
$senha = md5($_POST['senha']);

inserir($conexao, $login, $senha);

function inserir($conexao, $login, $senha) {
    try {
     
        $sql = "insert into usuarios(login,senha)
        values(:login, MD5(:senha))";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':login',$login);
        $stmt->bindParam(':senha',$senha);
        if($stmt->execute();){
            header("location:index.php");
            exit;
        }else{
            echo "não executado";
        }

    } catch (PDOException $e) {
        echo "Erro ao inserir: " . $e->getMessage();
    }
}
?>

