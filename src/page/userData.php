<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">   
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/userData.css">
    <title>Perfil</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</head>
<body>
    <main class="container">
    
        <div class="title">
            <h1>
                Meus dados
            </h1>
            <p>
                Alterar dados pessoais
            </p>
        </div>

        <?php  
            include '../api/conexao.php';
            session_start();
            if(isset($_SESSION["email"]) && isset($_SESSION["senha"])){
                $email = $_SESSION["email"];
                $sql = "SELECT nome, sobrenome, telefone_fixo, telefone_celular, cpf, cep, endereco, numero, complemento, bairro, cidade, uf, email FROM tb_usuario where email = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                }
            }
        ?>
        <div class="form">
            <form action="">
                <div class="input">
                    <input type="text" placeholder="Nome do usuário" value="<?php echo isset($row['nome']) ? $row['nome'] . ' ' . $row['sobrenome'] : ''; ?>" disabled>
                </div>
                <div class="input cellphone">
                    <input type="text" placeholder="(11) 9999-9999" id="cell" value="<?php echo isset($row['telefone_fixo']) ? $row['telefone_fixo'] : ''; ?>" disabled>
                    <input type="text" placeholder="(11) 9999-9999" value="<?php echo isset($row['telefone_celular']) ? $row['telefone_celular'] : ''; ?>" disabled>
                </div>
                <div class="input">
                    <input type="text" placeholder="CPF" id="cpf" value="<?php echo isset($row['cpf']) ? $row['cpf'] : ''; ?>" disabled>
                </div>
                <div class="input">
                    <input type="text" placeholder="CEP" id="cep" onblur="consultarCep()" value="<?php echo isset($row['cep']) ? $row['cep'] : ''; ?>" disabled>
                </div>
                <div class="input duoCampo">
                    <input type="text" placeholder="Rua" id="logradouro" value="<?php echo isset($row['endereco']) ? $row['endereco'] : ''; ?>" disabled>
                    <input type="number" placeholder="N°" id="numero" value="<?php echo isset($row['numero']) ? $row['numero'] : ''; ?>" disabled>
                </div>
                <div class="input">
                    <input type="text" placeholder="Complemento" id="complemento" value="<?php echo isset($row['complemento']) ? $row['complemento'] : ''; ?>" disabled>
                </div>
                <div class="input">
                    <input type="text" placeholder="Bairro" id="bairro" value="<?php echo isset($row['bairro']) ? $row['bairro'] : ''; ?>" disabled>
                </div>
                <div class="input duoCampo">
                    <input type="text" placeholder="Cidade" id="cidade" value="<?php echo isset($row['cidade']) ? $row['cidade'] : ''; ?>" disabled>
                    <input type="text" placeholder="UF" id="uf" value="<?php echo isset($row['uf']) ? $row['uf'] : ''; ?>" disabled>
                </div>
                <div class="input">
                    <input type="text" placeholder="Email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" disabled>
                </div>
            </form>
        </div>



        
    <!-- <div class="alterarBtn">
            <button> Alterar </button>
        </div> -->
    
    </main>

    
    <script src="https://kit.fontawesome.com/8ec8caa784.js" crossorigin="anonymous"></script>  
    <script src="../js/main.js"></script> 
    <script src="../js/form.js"></script>
</body>
</html>