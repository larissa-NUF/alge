<?php 
include 'conexao.php';

$preco = $_POST['preco'];
$titulo = $_POST['titulo'];
$caracteristicas = $_POST['caracteristicas'];
$tag = $_POST['tag'];
$id = $_POST['id'];

$conn->query("insert into tb_produto (preco, titulo, caracteristicas, tag) values ('$preco','$titulo','$caracteristicas','$tag') where id=$id");


