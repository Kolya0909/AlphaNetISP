<?php

$host = '127.0.0.1:3306'; // адрес сервера 
$database = 'wordpress'; // імя бази даних
$user = 'wordpressuser'; // імя користувача
$password = '123456'; // пароль




$tel = '';
if(isset($_POST['tel_number'])){
    $tel = '+'.substr($_POST['tel_number'],1);
    $status = $_POST['status'];
}
// echo($tel);
// echo($status);

$sql = "UPDATE `MainClients` SET `status` = '$status' WHERE `MainClients`.`tel` = '$tel';";
$link = mysqli_connect($host, $user, $password, $database) ;

mysqli_query($link, $sql);

mysqli_close($link);
