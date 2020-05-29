<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/erroAlerta.css">
    <title>Login </title>
</head>
<body>

    <section id="cadastro" class="cadastro">  
        <div class="nuvem">
           <img src="img/nuvem.svg" alt="Nuvem" id="nuvem1">
        </div>
        <div class="container">
           <?php
               function mostraErro($msgErro,$local){
                ?>  
               <h1><?php echo $msgErro; ?></h1>
                <a href="<?php echo $local; ?>">Voltar</a>
                <?php
                echo $_POST['field1'];
                
               }

               mostraErro("Algum dos dados fornecido já esta cadastrado para receber novidades!","index.html#cadastro");

           ?>    

        </div>
   </section>
        <img src="img/nuvem.svg" alt="Nuvem" id="nuvem2">

   <footer>        
    <p>&copy 2020 - Pandemic Adeventure</p>
</footer>
    
</body>
</html>