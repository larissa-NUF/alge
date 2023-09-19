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


$query = "insert into tb_usuario (nome, telefone_fixo, telefone_celular, cpf, cep, endereco, numero, bairro, cidade, uf, email, senha) values ($nome,
$telefone_fixo, $telefone_celular, $cpf, $cep, $endereco, $numero, $bairro, $cidade, $uf, $email, $senha)";

if($conn->query($query) === true){
    echo "<script>alert('deu certo');</script>";
} else {
    echo $conn->error;
}

$conn ->close();
