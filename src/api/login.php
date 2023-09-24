<?php
session_start();
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
}


$query = $conn->prepare("SELECT nome, email, senha from tb_usuario where email = ? and senha = ?");
$query->bind_param("ss", $email, $senha);

if ($query->execute()){
    $query->bind_result($nome, $email, $senha);
    $query->fetch();

    echo "<script>
            alert('Usuário logado');
        </script>";

    $_SESSION["nome"] = $nome;
    $_SESSION["email"] = $email;

    header("Location: ../../index.php");
    exit();
} else {
    echo "Error: " . $query->error;
}
$query->close();
$conn->close();