<?php
    $pdo;
    $pdo = new PDO('mysql:host=localhost:3310; dbname=estetica;', 'root', '');

    if(!$pdo){
        echo "ERRO NO BANCO!";
}