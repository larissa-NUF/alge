<?php
include "conexao.php";
    $sql = "select * from tb_produto";
    $result = $conn->query($sql);
    if (mysqli_num_rows($result) == 0) {
        echo "sem resultados";
      } 

    if(array_key_exists('button1', $_POST)) {
            delete();
        }
        else if(array_key_exists('button2', $_POST)) {
            editar();
        }
        else if(array_key_exists('inserir', $_POST)) {
            inserir();
        }
        function delete() {
            include "conexao.php";
            $idDeletar = $_POST["id"];
            if($idDeletar != null){
            $comando = "delete from tb_produto where id = $idDeletar";
            $result = $conn->query($comando);
            echo "Usuario deletado";
            }
        }
        function editar() {
            $id = $_POST["id"];
            $titulo = $_POST["titulo"];
            $preco = $_POST["preco"];
            $caracteristicas = $_POST["caracteristicas"];
            $tag = $_POST["tag"];

            echo"
            <form method='post' action='editar'>
               
                <input name='id' value='" . $id. "' type='hidden'/>
        
                <input name='titulo' value='" . $titulo . "' type='text'/>
           
                <input name='preco' value='" . $preco . "' type='number'/>
        
                <input name='caracteristicas' value='" . $caracteristicas . "' type='text'/>
            
                <input name='tag' value='" . $tag . "' type='number'/>

                <input type='submit' name='button1'
                class='button' value='Salvar' />
          
               
            </form>
            ";
        }

        function inserir() {

            echo"
            <form method='post' action='inserirProduto.php'>
               
                <input name='id' type='hidden'/>
        
                <input name='titulo' type='text'/>
           
                <input name='preco' type='number'/>
        
                <input name='caracteristicas' type='text'/>
            
                <input name='tag' type='number'/>

                <input type='submit' value='Salvar' />
          
               
            </form>
            ";
        }

?>

<html>
    <form method="post" >
    <input type="submit" name="inserir"
                class="button" value="inserir" />
    </form>
    <table>
    <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Preco</th>
        <th>Caracteristicas</th>
        <th>Tag</th>
        <th></th>
        <th></th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <form method="post" >
                <td><?php echo $row["id"]; ?></td>
                <input name="id" value="<?php echo $row["id"]; ?>" type="hidden"/>
                <td><?php echo $row["titulo"]; ?></td>
                <input name="titulo" value="<?php echo $row["titulo"]; ?>" type="hidden"/>
                <td><?php echo $row["preco"]; ?></td>
                <input name="preco" value="<?php echo $row["preco"]; ?>" type="hidden"/>
                <td><?php echo $row["caracteristicas"]; ?></td>
                <input name="caracteristicas" value="<?php echo $row["caracteristicas"]; ?>" type="hidden"/>
                <td><?php echo $row["tag"]; ?></td>
                <input name="tag" value="<?php echo $row["tag"]; ?>" type="hidden"/>
                <input type="submit" name="button1"
                class="button" value="Delete" />
          
        <input type="submit" name="button2"
                class="button" value="Editar" />

                
               
            </form>
            

        </tr>
        
        <?php endwhile; ?>
    
    </table>
</html>