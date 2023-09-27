<?php
session_start();
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT nome, email, senha, tipo from tb_usuario where email = '$email' and senha = '$senha'";
$query = $conn->query($sql);
if ($query->num_rows > 0){
    $row = $query->fetch_assoc();
    $_SESSION["nome"] = $row['nome'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["senha"] = $row['senha'];
    $_SESSION["tipo"] = $row['tipo'];

    header("Location: ../../index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
$conn->close();