<?php

include "conexao.php";

 if (isset($_POST["nome"], $_POST["email"], $_POST["senha"])) {
     $nome = $_POST['nome'];
     $email = $_POST['email'];
     $senha = $_POST['senha'];
     $con->exec("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')");
 }

header("Location: index.php");

?>