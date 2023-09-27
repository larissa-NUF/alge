<?php

$server = "localhost";
$db = "alge_db";
$user = "root";
$password = "usbw";

$conn = new mysqli($server, $user, $password, $db);

if(!$conn){
    echo "deu ruim";
}


function inserir(){
    $preco = "";
    $titulo = "";
    $caracteristicas = "";
    $tag = "";

    $query = $conn->prepare("insert into tb_produto (preco, titulo, caracteristicas, tag) values (?,?,?,?) ");
    $query->bind_param("ssss", $preco, $titulo, $caracteristicas, $tag);
    
    if ($query->execute()){
    
        echo "<script>
                alert('Produto salvo');
            </script>";
    
    } else {
        echo "Error: " . $query->error;
    }
    $query->close();
    $conn->close();
}

function delete(){
    $id = "";

    $query = $conn->prepare("delete from tb_produto where id=? ");
    $query->bind_param("s", $id);
    
    if ($query->execute()){
    
        echo "<script>
                alert('Produto deletado');
            </script>";
    
    } else {
        echo "Error: " . $query->error;
    }
    $query->close();
    $conn->close();
}

function update(){
    $preco = "";
    $titulo = "";
    $caracteristicas = "";
    $tag = "";

    $query = $conn->prepare("update tb_produto set preco=? titulo=? caracteristicas=? tag=?");
    $query->bind_param("ssss", $preco, $titulo, $caracteristicas, $tag);
    
    if ($query->execute()){
    
        echo "<script>
                alert('Produto editado');
            </script>";
    
    } else {
        echo "Error: " . $query->error;
    }
    $query->close();
    $conn->close();
}


?>