<?php

include "conexao.php";

if (isset($_GET["id"])) {
    $id = $_GET['id'];
    $con->exec("DELETE FROM usuarios WHERE id = $id");
}

header("Location: index.php");

?>