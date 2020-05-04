<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include"config.php";
        
        try {

            $id=$_GET["id"];
            $nome=$_GET["nome"];
            $tele=$_GET["tele"];
            $email=$_GET["email"];


            #tratamento para não enviar dados repetido  


            $base->query("INSERT INTO client (nome, tele, email) VALUES ('".$nome."', '".$tele."', '".$email."')");      
    
            header("Location:index.php");

        } catch (Exception $erro) {

            die("ERRO ao cadastrar novos dados: ".$erro->getMessage());
        } 
    ?>    
       
</body>
</html>