<?php
include("config.php");

 $email = $_POST["email"];
 $senha = $_POST["senha"];

$registro=$base->query("SELECT nome FROM crudjogo.admin where email ='".$email."' and senha = '".$senha ."'")->fetchAll(PDO::FETCH_OBJ);
if($registro){
    foreach ($registro as $user) :
        #criando sessão
        session_start();
        $_SESSION["usuario"] = $user-> nome ;

        header("Location:admin.php");  
        


    endforeach;

}else {
    header("Location:erroAlerta.php");
     $_POST['field1'] = "ollllll";

 }
?>



