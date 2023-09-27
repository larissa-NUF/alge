<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/showcase.css">
    <link rel="shortcut icon" href="../img/favicon-32x32.png" type="image/x-icon">
    <title>Inicio - Alge</title>
</head>
<body>
    <div class="alinhamentoFiltro">
        <div class="filtros" id="filtros">
            
            
        </div>
    </div>
    <main class="container">
        <h2 class="titulo">Mais vendidos</h2>

        <?php 
        include '../api/conexao.php';
        session_start();
        
        $sql = "SELECT * FROM ItensCompra";
        $query = $conn->query($sql);
        
        if ($query->num_rows > 0) {
            echo '<section class="itens">';
            while($row = $query->fetch_assoc()) {
                echo '<div class="itens_row">';
                echo '<div class="item">';
                echo '<div class="itemImagem"><img src="../img/' . $row["Imagem"] . '" alt=""></div>';
                echo '<div class="detalhes">';
                echo '<h3 class="preco">R$ ' . $row["Preco"] . '</h3>'; 
                echo '<p class="dt">' . ($row['EntregaRapida'] ? 'Entrega rápida' : '') . '</p>';
                echo '<p class="descricaoTexto">' . $row["Descricao"] . '</p>';
                echo '</div></div></div>';
            }
            echo '</section>';
        } else {
            echo "Nenhum item encontrado";
        }
        $conn->close();
        if ($_SESSION["tipo"] == "1"){
        ?>
        

        <div class="card">
            <i class="fas fa-plus-circle" id="formToggle"></i>
            <form action="../api/inserir_itens.php" method="post" enctype="multipart/form-data" class="createItemForm">
                <input type="text" placeholder="Nome" name="nome" required>
                <input type="file" name="imagem">
                <input type="number" step="0.01" placeholder="Preço" name="preco" required>
                <label for="entrega_rapida">Entrega rápida</label>
                <input type="checkbox" id="entrega_rapida" name="entrega_rapida">
                <textarea placeholder="Descrição" name="descricao"></textarea>
                <button type="submit">Inserir item</button>
            </form>
        </div>
<?php } ?>
        
    </main>
   
    <script src="https://kit.fontawesome.com/8ec8caa784.js" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>
</html>