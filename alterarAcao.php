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


        try {
            
            $base->query("UPDATE client SET nome = '".$nome."', tele = '".$tele."', email = '".$email." ' WHERE idclient = ".$id);
            header("Location:index.php");
       
        } catch (Exception $erro) {

            die("ERRO ao atualizar dados: ".$erro->getMessage());
        }

    ?>    
       
</body>
</html>