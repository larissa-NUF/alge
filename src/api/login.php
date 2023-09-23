<?php

include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];


$query = $conn->prepare("SELECT email, senha from tb_usuario where email = ? and senha = ?");
$query->bind_param("ss", $email, $senha)

if ($query->execute()){
    echo "<script>
            alert('Usuário logado');
            window.location.href = '../../index.html'; 
        </script>";
} else {
    echo "Error: " . $query->error;
}
$query->close();
$conn->close();