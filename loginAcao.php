<?php
include("config.php");

 $email = $_POST["email"];
 $senha = $_POST["senha"];

$registro=$base->query("SELECT nome FROM crudjogo.admin where email ='".$email."' and senha = '".$senha ."';")->fetchAll(PDO::FETCH_OBJ);
if($registro){
    foreach ($registro as $user) :
        echo $user-> nome ;
    endforeach;

}else {
    header("Location:login.html");    
 }
?>