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
        $registro=$base->query("SELECT * FROM client WHERE idclient =".$id."")->fetchAll(PDO::FETCH_OBJ);
        
    ?>   

<form method="GET" action="alterarAcao.php">
    <?php
        foreach ($registro as $clientes) :
         ?>
                <Input type="hidden" name="id" value="<?php echo $clientes->idclient?>"></Input>
                
                <Input type="text" name="nome" value="<?php echo $clientes->nome ?>"></Input>

                <?php  $teleConversion = intval($clientes->tele )  ?>
                <Input type="number" name="tele" value="<?php echo $teleConversion ?>"  name="telefone"></Input>

                <Input type="email" name="email" value="<?php echo $clientes->email?>"  name="email"></Input>

                
                <input type="submit" value="Atualizar"> </Input>
         <?php
            endforeach;
        ?>
            </form>            
</body>
</html>