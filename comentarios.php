<?php

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$comentario = $_POST['comentarios'];

echo "<p>Nome: $nome </p>";
echo "<p>Comentarios: $comentario </p>";

$sql = "insert into comentarios (nome, turma, comentario) values ('$nome','$turma', '$comentario');";

echo $sql;

$conexao = new PDO('mysql:host=127.0.0.1;dbname=site','root','');
$conexao->exec($sql);

echo "<h2>Comentarios gravado com sucesso</h2>";
echo "<a href='coment.php'>Listar</a>";
header("Location: coment.php");

die();

?>