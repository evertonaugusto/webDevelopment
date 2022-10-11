<?php 

include "conexao.php";

if (isset($_POST["id"], $_POST["nome"], $_POST["email"], $_POST["senha"])) {
    $id = $_POST["id"];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $con->exec("UPDATE usuarios SET nome = '$nome', email = '$email', senha = '$senha' WHERE id = $id");
    header("Location: index.php");
}



?>
