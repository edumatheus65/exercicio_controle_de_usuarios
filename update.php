<?php

require 'conexao.php';



if(isset($_GET['id']) && empty($_GET['id'])) {

    $id = addcslashes($_GET['id']);




} else {

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

    <input type="submit" value="Atualizar" /><br/><br/>

</form>