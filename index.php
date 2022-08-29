<?php

    require 'conexao.php';   
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicise controle de usuarios</title>
</head>
<body>

    <a href="creat.php">Adicionar Usuario</a>

    <?php if(rowCount($usuarios) > 0): ?>

        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">email</th>                
                </tr>
            </thead>
        </table>
        <tbody>
            <?php foreach($usuarios as $usuario):  ?>
                <tr>
                    <td scope="row" class="col-id"><?= $usuario['id']  ?></td>
                </tr>
        </tbody>
    
</body>
</html>