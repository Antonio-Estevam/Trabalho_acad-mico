<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>
<body>

    <?php

        session_start();

        if($_SESSION){

            include("config.php");
            

        $registro=$base->query("SELECT * FROM client")->fetchAll(PDO::FETCH_OBJ);

    ?>

    <nav class="manu">
        <label ><?php echo "Olá " . $_SESSION["usuario"] . " tudo bem?"; ?></label>
        <input type="button" value="Sair">
    </nav>

    <div class="conteiner">   
        <div id="resultado">
            <table>
                <tr class="primeiroTr">
                    <td>Id:</td>
                    <td>Nome</td>
                    <td>Telefone:</td>
                    <td>E-mail</td>
                    <td>Ação</td>
                </tr> 
                <?php
                 foreach ($registro as $clientes) :
                   
                    ?> 
                

                    <tr>
                        <td> <p> <?php echo $clientes->idclient ?> </p</td>
                        <td> <p> <?php echo $clientes->nome ?> </p</td>
                        <td> <p> <?php echo $clientes->tele ?> </p</td>
                        <td> <p> <?php echo $clientes->email ?> </p> </td>
                        <td>
                            <a href="editar.php?id=<?php echo $clientes->idclient?>" >
                                <input type="button"><img src="img/edit-solid.svg" alt="Editar"></input>
                            </a>    

                            <a href="deletar.php?id=<?php echo $clientes->idclient?>" >
                             <input type="button" name="del"> <img src="img/del-solid.svg" alt="Excluir"></input>
                            </a>

                        </td>
                    </tr>  
                <?php
                    endforeach;

                }else{
                    echo"Você precisa estar logado para acessar a pagina admin.";
                }
                ?>


                 
            </table>
        </div>

        <hr>    
          <h2>Adicionar novo contato</h2>
        <div id="form">
        <form method="GET" action="inserirAcao.php">
                <Input type="text" placeholder="Nome" name="nome" required ></Input>

                <Input type="number" placeholder="Telefone" name="tele" required ></Input>

                <Input type="email" placeholder="E-mail" name="email" required ></Input>

                <input type="submit" value="Enviar">
            </form>
       </div>

    </div>
</body>
</html>