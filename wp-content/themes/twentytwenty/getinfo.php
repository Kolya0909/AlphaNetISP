<?php
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

$sql = mysqli_query($link,"SELECT * FROM `MainClients`");


$count = mysqli_num_rows($sql);


$mas = array();


$newMas = array();
for($i =0; $i<$count; $i++){
    $text = mysqli_fetch_assoc($sql);
    
    $newMas['Тариф'] = $text['clientTarif'];
    $newMas['Імя'] = $text['ClientName'];
    $newMas['Номер тел'] = $text['tel'];
    $newMas['Адреса'] = $text['street'];
    $newMas['Номер'] = $text['adress'];
    $newMas['Статус'] = $text['status'];
    $newMas['Дата'] = $text['dat'];
    $newMas['team'] = $text['team'];
    if($text['status']!='Підключено'){
      array_unshift($mas, $newMas);
    }
    // else
    // array_push($mas, $newMas);
    
    
    
}
echo json_encode($mas);



mysqli_close($link);
