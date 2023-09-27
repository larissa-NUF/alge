<?php 

include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$entregaRapida = isset($_POST['entrega_rapida']) ? 1 : 0;
$descricao = $_POST['descricao'];



    $sql = "update itenscompra set nome='$nome', preco=$preco, entregaRapida='$entregaRapida', descricao='$descricao' where id = $id";

    if ($conn->query($sql) === true) {
        echo "<script> alert('Item editado')</script>";
        header("Refresh:0; url=../page/showcase.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }


$conn->close();
