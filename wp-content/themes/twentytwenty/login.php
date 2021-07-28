<?php

/*
Template name: pageinfo
*/


?>

<?php

session_start();
date_default_timezone_set('Europe/Kiev');

    $host = '127.0.0.1:3306'; // адрес сервера 
    $database = 'wordpress'; // імя бази даних
    $user = 'wordpressuser'; // імя користувача
    $password = '123456'; // пароль
    
    $link = mysqli_connect($host, $user, $password, $database);
    $sql = mysqli_query($link,"SELECT onu, team FROM `onutable` WHERE team='vladi'");
    $count = mysqli_num_rows($sql);
   
       
    
    




$login = $_POST['username'];
$passwd = $_POST['userpasswd'];



if($login =='grabovich'&&$passwd == '6139'){
    echo "hello ".$login;
}
else if($login =='igor'&&$passwd == '12345'){
    echo "hello ".$login;
}
else if($login =='vladi'&&$passwd == 'vlad1997'){
    
    echo 'hello ' . $login;
}
else{
    $_SESSION['massage'] = 'не правильний логін або пароль!';
    header('Location: signin.php');
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



</body>
</html>

<script>

let xhttp = new XMLHttpRequest()
    xhttp.onreadystatechange = function(){
    if(this.readyState == 4  && this.status == 200){
         myFunction(this.response)
         }
    }
    xhttp.open("GET","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/getinfo.php")
    xhttp.send()

    function myFunction(data){
    
    let div = document.createElement('div')
    div.className = "main-block"
    let HTML = `
    <div class="main-inner main-title" style="display:flex;">
        <div class="text-block">Тариф</div>
        <div class="text-block name">Імя</div>
        <div class="text-block tel">Номер телефона</div>
        <div class="text-block">Адреса</div>
        <div class="text-block">Номер буд або кв</div>
        <div class="text-block">Статус</div>
        <div class="text-block">Дата</div>
    </div>
    
    `
    let myData = JSON.parse(data)
    
    for(let i=0;i<myData.length;i++){
        console.log(myData[i])
        let background = ''
        if(myData[i]['Статус']=='Підключено'){
            background = 'main-inner-green'
        }
        if(myData[i]['team']=='<?php echo $login?>'){
            
            HTML += `
    <div class="main-inner ${background}" style="display:flex;">
        <div class="text-block">${myData[i]['Тариф']}</div>
        <div class="text-block">${myData[i]['Імя']}</div>
        <div class="text-block">${myData[i]['Номер тел']}</div>
        <div class="text-block">${myData[i]['Адреса']}</div>
        <div class="text-block">${myData[i]['Номер']}</div>
        <div class="text-block status status${i+1}"id="${myData[i]['Номер тел']}">${myData[i]['Статус']}</div>
        <div class="text-block">${myData[i]['Дата']}</div>
    </div>
    <div class="View">View</div>
    <div class="view-block"></div>
    ` 
        }
       
    }
    div.innerHTML = HTML
    document.body.append(div)

    const del = document.querySelectorAll('#delete')
    

       
    }

</script>


<style>
.View{
    display:none;
    margin-top: -15px;
    margin-bottom: 15px;
    padding: 10px;
    width: 120px;
    text-align: center;
    background: sienna;
    color: white;
    border-radius: 50px;
    cursor: pointer;
    margin-right: 0;
    margin-left: auto;
}
.defoult{
    width:40px;
    height:40px;
    background:darkgray;
    border-radius:50px;
}
.teamBlock{
    width: 120px;
    height: 200px;
    z-index: 1000;
    position: fixed;
    left: 38vw;
    background: antiquewhite;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 25px;
    top: -125vh;
    transition: all .3s;
    pointer-events:none;
}
.teamBlock-active{
    top:23vh;
    pointer-events:visible;
}
.team__item span{
    display:block;
    cursor:pointer;
}
.team__item{
    margin-bottom:15px;
}
.person__inner{
    max-width:768px;
    margin: 0 auto;
    margin-bottom:130px;
}
.person__item{
    margin-bottom: 10px;
}
.person__item-name, .text{
    font-size: 24px;
}
.person__item-color-team{
    display: flex;
    justify-content: space-between;
    padding: 20px;
    border: 2px solid;
}
.grabovich{
    width: 40px !important;
    height: 40px !important;
    background: gold !important;
    border-radius: 50px !important;
}
.igor{
    width: 40px !important;
    height: 40px !important;
    background: indianred !important;
    border-radius: 50px !important;
}
.vladi{
    width: 40px !important;
    height: 40px !important;
    background: blueviolet !important;
    border-radius: 50px !important;
}
.choose-btn{
    width: 120px;
    height: 40px;
    position: fixed;
    background: green;
    border: 5px;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    left: 50vw;
    top: -100%;
    transition: all .3s;
}
.close-btn{
    width: 120px;
    height: 40px;
    position: fixed;
    background: orange;
    border: 5px;
    border-radius: 5px;
    cursor: pointer;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    left: 40vw;
    top: -100%;
    transition: all .3s;
}
.btn-active{
    top: 51vh;
}
.replace-text{
    position: fixed;
    left: 40vw;
    top:-100%;
    height: 100px;
    border: 2px solid;
    background: antiquewhite;
    color: black;
    z-index: 1000;
    outline: none;
    padding: 10px;
    font-size: 24px;
    transition: all .3s;
}
.replace-text-active{
    top: 38vh;
}
.black-block{
    position:fixed;
    left:0;
    right:0;
    bottom:0;
    top:0;
    background: rgba(0,0,0,.0);
    pointer-events: none;
    transition: all .3s
}
.black-block-active{
    background: rgba(0,0,0,.5);
    z-index:999;
    pointer-events: visible;
}
    body{
        margin-top:80px;
    }
    .main-block{
        margin-top: 60px;
    }
    body{
        font-family: 'Roboto',sans-serif;
    }
    .main-inner{
        display: flex;
        justify-content: space-between;
        max-width: 1440px;
        box-sizing: border-box;
        padding: 0 20px;
        margin: 0 auto;
        margin-bottom:40px;
        align-items: center;
        min-height: 60px;
    
        background: lightgrey;
        border-radius:5px;
    }
    .text-block, #delete{
        
        width: 240px;
        text-align:center;
        
    }
    .main-title{
        left: 0;
        right: 0;
        top: 240px;
        background:aliceblue;
    }
    #team{
        cursor:pointer;
        display: flex;
        justify-content: center;
    }
    .main-inner-green{
        background: green;
        color: cornsilk;
        
    }
    #team span{
        display:block;
        width:40px;
        height:40px;
        background: darkgray;
        border-radius: 50px;
    }
    @media(max-width:1024px){
        .main-inner{
            display: block !important;
        }
        .text-block, #delete{
            width: 100%;
            padding-top: 5px;
            padding-bottom: 5px
        }
    }
</style>