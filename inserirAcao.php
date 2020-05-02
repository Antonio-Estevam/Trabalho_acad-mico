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

        $id=$_GET["id"];
        $nome=$_GET["nome"];
        $tele=$_GET["tele"];
        $email=$_GET["email"];

        $base->query("INSERT INTO client (nome, tele, email) VALUES ('".$nome."', '".$tele."', '".$email."')");
        
    
        header("Location:index.php");
    ?>    
       
</body>
</html>