<?php 
include 'conexao.php';

$nome = $_POST['nome'];
$telefone_fixo = $_POST['telefone_fixo'];
$telefone_celular = $_POST['telefone_celular'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$stmt = $conn->prepare("INSERT INTO tb_usuario (nome, telefone_fixo, telefone_celular, cpf, cep, endereco, numero, bairro, cidade, uf, email, senha) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssssssss", $nome, $telefone_fixo, $telefone_celular, $cpf, $cep, $endereco, $numero, $bairro, $cidade, $uf, $email, $senha);

if($stmt->execute()){
    echo "<script>
            alert('deu certo');
            window.history.go(-2);
        </script>";
    
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$conn->close();

