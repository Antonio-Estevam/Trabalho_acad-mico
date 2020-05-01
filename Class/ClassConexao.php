<?php

 abstract class Classconexao {
    protected function conectaDB(){
        try {
            $Con=new PDO("mysql:host=localhost;dbname=crudjogo","root","navy1995");
            echo"ok";
            return $Con;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}