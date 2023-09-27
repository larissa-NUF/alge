<?php 

include 'conexao.php';

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$entregaRapida = isset($_POST['entrega_rapida']) ? 1 : 0;
$descricao = $_POST['descricao'];

$imagem = $_FILES['imagem']['name'];
$target_dir = "../img/";
$target_file = $target_dir . $imagem;

if (move_uploaded_file($_FILES['imagem']['tmp_name'], $target_file)) {
    $sql = "INSERT INTO itenscompra (nome, imagem, preco, entregaRapida, descricao) values ('$nome', '$imagem', '$preco', '$entregaRapida', '$descricao')";

    if ($conn->query($sql) === true) {
        echo "<script> alert('Novo item criado')</script>";
        header("Refresh:0");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Falhou em carregar a imagem";
}

$conn->close();