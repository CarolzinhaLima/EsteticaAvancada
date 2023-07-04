<?php
    $conn;
    $conn = mysqli_connect('localhost:3310','root','','estetica');

    if(!$conn){
        echo "ERRO NO BANCO!";
}