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

        try {

            $base->query("DELETE FROM client WHERE idclient =".$id."");

             header("Location:index.php");

        } catch (Exception $erro) {
            die("Erro ao tentar deletar dados: ".$erro->getMessage());
        } 
    ?>    
</body>
</html>