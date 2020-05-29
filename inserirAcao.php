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
        
        
        #$id=$_GET["id"];
        $nome=$_GET["nome"];
        $tele=$_GET["tele"];
        $email=$_GET["email"];
        
        #vericifar se os dados já existe 

        $registro=$base->query("select * FROM client where  nome = '".$nome."' or tele = '".$tele."' or email = '".$email."'")->fetchAll(PDO::FETCH_OBJ);

        if (empty($registro)) {
            
            try {

                $base->query("INSERT INTO client (nome, tele, email) VALUES ('".$nome."', '".$tele."', '".$email."')");      
        
                header("Location:admin.php");
    
            } catch (Exception $erro) {
    
                die("ERRO ao cadastrar novos dados: ".$erro->getMessage());
            } 

        }else{
            header("Location:erroAlerta.php");
          #enviar mensagem de erro 
        }
        ?>  





     
       
</body>
</html>