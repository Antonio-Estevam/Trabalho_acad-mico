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

    <nav class="menu">
        <label ><?php echo "Olá " . $_SESSION["usuario"] . " tudo bem?"; ?></label>
        <input type="button" value="Sair" action="login.html" >
    </nav>

    <div class="conteiner">   
        <div id="resultado">
            <table>
                <!--tr>
                    <td colspan=”5″ id="agrup">                            
                        <input type="text" name="busca">
                        <input type="button" value="Pesquisar"> 
                    </td>
                </tr-->
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
        <div id="novo">
            <div id="form">
                <h2>Adicionar novo contato</h2>
                <center>
                    <form method="GET" action="inserirAcao.php">
                        <Input type="text" placeholder="Nome" name="nome" required ></Input>
    
                        <Input type="number" placeholder="Telefone" name="tele" required ></Input>
    
                        <Input type="email" placeholder="E-mail" name="email" required ></Input>
    
                        <input type="submit" value="Enviar">
                    </form>
                </center>    
           </div>
        </div>   
        

    </div>
</body>
</html>