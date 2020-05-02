<?php

include("config.php");
$registro=$base->query("SELECT * FROM client")->fetchAll(PDO::FETCH_OBJ);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="conteiner">
       <div id="form">
        <form method="GET" action="inserirAcao.php">
                <Input type="text" placeholder="Nome" name="nome"></Input>

                <Input type="number" placeholder="Telefone" name="tele"></Input>

                <Input type="email" placeholder="E-mail" name="email"></Input>

                <input type="submit" value="Enviar">
            </form>
       </div>

        <div id="resultado">
            <table>
                <tr>
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
                        <td> <?php echo $clientes->idclient ?></td>
                        <td> <?php echo $clientes->nome ?></td>
                        <td> <?php echo $clientes->tele ?></td>
                        <td> <?php echo $clientes->email ?></td>
                        <td>
                            <a href="editar.php?id=<?php echo $clientes->idclient?>" >
                                <input type="button" value="Alterar" >
                            </a>    

                            <a href="deletar.php?id=<?php echo $clientes->idclient?>" >
                             <input type="button" value="Excluir"name="del">
                            </a>

                        </td>
                    </tr>  
                <?php
                    endforeach;
                ?>


                 
            </table>
        </div>

    </div>
</body>
</html>