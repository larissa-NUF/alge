<?php
session_start();
include 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

$sql = "SELECT nome, email, senha from tb_usuario where email = '$email' and senha = '$senha'";
$query = $conn->query($sql);
if ($query == true){
    echo "<script>
            alert('Usuário logado');
        </script>";
    
    $_SESSION["email"] = $email;
    $_SESSION["senha"] = $senha;

    header("Location: ../../index.php");
    exit();
} else {
    echo "Error: " . $conn->error;
}
$conn->close();