<?php

include "conexao.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = $con->query("SELECT * FROM usuarios WHERE id = $id")->fetch();

    $id = $usuario['id']; 
    $nome = $usuario['nome'];
    $email = $usuario['email'];
    $senha = $usuario['senha'];
}

    $usuarios = $con->query("SELECT * FROM usuarios");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?= isset($_GET["id"]) ?'atualizar.php':'salvar.php' ?>" method="POST">
        <label>NOME: <input name="nome" value="<?= $nome ??''?>"></label></br>
        </br>
        <label>E-MAIL: <input name="email" value="<?= $email ??'' ?>"></label></br>
        </br>
        <label>SENHA: <input type="password" name="senha" value="<?= $senha ??'' ?>"></label></br>
        </br>
        <input type="hidden" name="id" value="<?= $id ??'' ?>">
        <button>Enviar</button>
        </br>
        </br>
    </form>

    <table border='2'>
        <thead>
            <tr>
                <th> NOME </th>
                <th> E-MAIL </th>
                <th> SENHA </th>
                <th> AÇÕES </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
                <tr>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $usuario['senha']; ?></td>
                    <td>
                    <a href=deletar.php?id='<?=$usuario["id"]?>'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="RED" class="bi bi-x-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
</svg></a>
                    <a href=index.php?id='<?=$usuario["id"]?>'><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="green" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg></a><br>
                    </td>   
            </tr>
            
            <?php  } ?>
        </tbody> 
        
    </table>
</body>

</html>
