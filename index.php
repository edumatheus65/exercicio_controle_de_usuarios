<?php

    require 'conexao.php';
   

?>

<a href="creat.php">Adicionar Usuario</a>

<table border="0" width="100%">

    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>


    <?php

     $stmt = "SELECT * FROM usuarios";
        $stmt = $conn->query($stmt);


        if($stmt->rowCount() > 0) {


            foreach($stmt->fetchAll() as $usuarios) {
                echo '<tr>';
                echo '<td>' . $usuarios['nome'] . '</td>';           
                echo '<td>' . $usuarios['email'] . '</td>';
                echo '<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a> - <a href="delete.php?id='.$usuarios['id'].'">Excluir</a></td>';                    

                echo '<tr>';
            }
        }



    ?>

</table>