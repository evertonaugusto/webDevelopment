<?php

$con = new \PDO("sqlite:banco.db");
$con->exec("CREATE TABLE IF NOT EXISTS usuarios (id INTEGER PRIMARY KEY, nome TEXT, email TEXT, senha TEXT)");

?>


