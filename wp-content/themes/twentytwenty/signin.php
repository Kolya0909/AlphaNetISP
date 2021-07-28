<?php

/*
Template name: login
*/



?>
<?php
session_start();

?>

<?php
date_default_timezone_set('Europe/Kiev');
$host = '127.0.0.1:3306'; // адрес сервера 
$database = 'wordpress'; // імя бази даних
$user = 'wordpressuser'; // імя користувача
$password = '123456'; // пароль
$link = mysqli_connect($host, $user, $password, $database);

    $team = $_POST['team'];
    $onu = $_POST['onu-count'];
    $date =  date("d.m H:i:s");
    $sqlOnu = "INSERT INTO onutable (onu, team, dat) VALUES ('$onu', '$team', '$date');";
    mysqli_query($link, $sqlOnu);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/modal.css">
    <title>Document</title>
</head>
<body>
    


<section class="login">
    <form class="log" action="https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/login.php" method="post">
    <div class="username-block">
    <label for="username">username</label>
    <input type="text" name="username" class="username">
    </div>
    <div class="userpasswd-block">
    <label for="userpasswd">userpasswd</label>
    <input type="password" name="userpasswd" class="userpasswd">
    </div>
    <button type="submit" class="sub-btn">LogIn</button>
    </form>
    <?php
    if($_SESSION['massage']){
        echo '<p style="border:2px solid red; padding:10px">' . $_SESSION['massage'] . '</p>';
    }
    unset($_SESSION['massage']);
        
    ?>
</section>
























<style>
.sub-btn{
    margin-top:25px;
    cursor:pointer;
    outline: none;
    border: none;
    border-radius: 5px;
    margin-right: 0;
    margin-left: auto;
    display: block;
}
.username-block, .userpasswd-block{
    margin-bottom: 20px;
    display: flex;
    flex-direction: column;
}
.login{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

</style>

<script src = "assets/js/script.js"></script>
<script src = "assets/js/plugins/modal.js"></script>
<script src = "assets/js/main.js"></script>
</body>
</html>