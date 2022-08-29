<?php

require 'conexao.php';


//Primeiro defino meu id como 0 
$id = 0;

//Depois faço a verificação pra pegar o id verdadeiro
if(isset($_GET['id']) && empty($_GET['id'] == false)) {
    $id = ($_GET['id']);

}

//Depois verifico se o usuário enviou alguma informação
//Caso o usuário não tenha enviado nenhuma informação ele passa direto para o select

if(isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = ($_POST['nome']);
    $email = ($_POST['email']);


    //Depois de feitas algumas alterações, nós vamos executar o UPDATE
    $stmt = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id'";
    $conn->query($stmt);

    header("Location: index.php");
}


    $stmt = "SELECT * FROM usuarios Where id = '$id'";
    $stmt = $conn->query($stmt);

    if($stmt->rowCount() > 0) {

        $dado = $stmt->fetch();
    } else {

        header("Location: index.php");

    }

?>



<form action="" method="POST">

    Nome:<br/>
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>" /><br/><br/>

    Email:<br/>
    <input type="text" name="email" value="<?php echo $dado['email']; ?>" /><br/><br/>

    <!-- Senha:<br/>
    <input type="password" name="pass" value="" /><br/><br/> -->

    <input type="submit" value="Atualizar" value="" /><br/><br/>

</form>