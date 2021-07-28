<?php

$host = '127.0.0.1:3306'; // адрес сервера 
$database = 'wordpress'; // імя бази даних
$user = 'wordpressuser'; // імя користувача
$password = '123456'; // пароль

$tel = '+'.substr($_POST['tel_number'],1);
$team = $_POST['team'];


// echo($tel);

$sql = "UPDATE `MainClients` SET `team` = '$team' WHERE `MainClients`.`tel` = '$tel'";
$link = mysqli_connect($host, $user, $password, $database);
mysqli_query($link, $sql);
mysqli_close($link);