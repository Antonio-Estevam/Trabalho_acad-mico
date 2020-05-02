<?php

try {
    $base= new PDO("mysql:host=localhost;dbname=crudjogo","root","navy1995");

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $base->exec("SET CHARACTER SET utf8");

} catch (Exception $erro) {
   die("ERRO: ".$erro->getMessage());
}