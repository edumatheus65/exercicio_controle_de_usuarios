<?php

    require 'conexao.php';

    if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
        $nome = ($_POST['nome']);
        $email = ($_POST['email']);
        $senha = md5($_POST['pass']);

        $stmt = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'"; 
        $conn->query($stmt);

        header("Location: index.php");

    }

?>

<form action="" method="POST">

    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>

    Email:<br/>
    <input type="text" name="email" /><br/><br/>

    Senha:<br/>
    <input type="password" name="pass" /><br/><br/>

    <input type="submit" value="Cadastrar" /><br/><br/>

</form>