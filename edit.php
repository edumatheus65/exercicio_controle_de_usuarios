<?php

require 'conexao.php';
require 'index.php';





if(isset($_GET['id']) && empty($_GET['id'])) {

    $id = addcslashes($_GET['id']);

    $stmt = "SELECT * FROM usuarios Where id = '$id'";
    $stmt = $conn->query($stmt);

    if($stmt->rowCount() > 0) {

        $dado = $stmt->fetch();
    } else {

        header("Location: index.php");

    }




} else {

    header("Location: index.php");


}

?>

<form action="" method="GET">

    Nome:<br/>
    <input type="text" name="nome" value="<? echo $dado['nome']; ?>" /><br/><br/>

    Email:<br/>
    <input type="text" name="email" value="<? echo $dado['email']; ?>" /><br/><br/>

    Senha:<br/>
    <input type="password" name="pass" value="" /><br/><br/>

    <input type="submit" value="Atualizar" value="" /><br/><br/>

</form>