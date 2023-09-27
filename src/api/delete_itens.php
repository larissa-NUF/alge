<?php 

include 'conexao.php';
$id = $_POST['id'];


    $sql = "delete from ItensCompra where id = $id";

    if ($conn->query($sql) === true) {
        echo "<script> alert('Item deletado')</script>";
        header("Refresh:0; url=../page/showcase.php");
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }


$conn->close();
