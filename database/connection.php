<?php

// $hostname = 'localhost';
// $database = 'php_relational';
// $user = 'root';
// $pass = '';

// $connection;

// try {
//     $connection = new PDO("mysql:host=$hostname;dbname=$database", $user, $pass);
//     $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {

//     echo "Falha ao conectar com o banco de dados!";
// }

// $banco é um objeto da classe mysqli
// Para conectar com um banco é preciso passar no construtor os seguintes parametros: 'host', 'usuario', 'senha', 'nome do banco'
$banco = new mysqli('localhost', 'root', '', 'php_relational');

// mensagem de erro caso a conexão com o banco falhe
if($banco->connect_errno) {
    echo "<p>Falha ao conectar com o banco de dados!</p>";
}

// querys para compatibilidade em utf8
$banco->query("SET NAMES 'utf8'");
$banco->query("SET character_set_connection=utf8");
$banco->query("SET character_set_client=utf8");
$banco->query("SET character_set_results=utf8");