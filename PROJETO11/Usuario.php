<?php
class Usuario {
    private $login;
    private $senha;

    public function __construct($login, $senha) {
        $this->login = trim($login);
        $this->senha = trim($senha);
    }

    public function getLogin() {
        return $this->login;
    }

    public function getSenhaHash() {
        return md5($this->senha); // ou password_hash() em produção
    }

    public function autenticar($conexao) {
        $sql = "SELECT * FROM usuarios WHERE login = :login AND senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':login', $this->login);
        $senhaHash = $this->getSenhaHash();
        $stmt->bindParam(':senha', $senhaHash);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
