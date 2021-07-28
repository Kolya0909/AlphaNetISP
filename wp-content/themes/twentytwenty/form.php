<?php

date_default_timezone_set('Europe/Kiev');


$tarif = $_POST['select'];
$name = $_POST['name'];
$tel = $_POST['tel'];
$street = $_POST['select2'];
$city = $_POST['select4'];
$adress = $_POST['adress'];
$today = date("d.m H:i:s"); 

$host = '127.0.0.1:3306'; // адрес сервера 
$database = 'wordpress'; // імя бази даних
$user = 'wordpressuser'; // імя користувача
$password = '123456'; // пароль


$link = mysqli_connect($host, $user, $password, $database) ;


if($link == false){
  echo 'не удалось подключится к базе';
  echo mysqli_connect_error();
  exit();
}

$cityStreet = '';
$cityStreet = $street . ', (' . $city . ')';

if($name!=null){
  $sql = "INSERT INTO MainClients (clientTarif, ClientName, tel, street, adress, dat) VALUES ('$tarif', '$name', '$tel', '$cityStreet', '$adress','$today');";
  echo $cityStreet;
if(mysqli_query($link, $sql)){
   echo "New record created successfully";
   mysqli_free_result($sql);
    
 } 
else{
   echo "fatal error";
    echo mysqli_error($link);
}
}


mysqli_free_result($sql);

mysqli_close($link);
?>


