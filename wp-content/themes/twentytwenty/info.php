<?php/*
Template name: information
*/




?>




<head>
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>



<div class="person__inner" style="pointer-events:none;">
<div class="person__item">
    <div class="person__item-color-team">
    <div class="text">Grabovi4, Richi</div>
    <span class="grabovich"></span>
    </div>
</div>
<div class="person__item">
    <div class="person__item-color-team">
    <div class="text">Igor, Ivan</div>
    <span class="igor"></span>
    </div>
</div>
<div class="person__item">
    <div class="person__item-color-team">
    <div class="text">Vladi, Slava</div>
    <span class="vladi"></span>
    </div>
</div>
<div class="person__item">
    <div class="person__item-color-team">
    <div class="text">Default</div>
    <span class="defoult"></span>
    </div>
</div>
</div>

<div class="span">add onu</div>
    <form action="https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/signin.php" method="post">
            <select name="team" id="onu">
                <option value="vladi">vladi</option>
                <option value="grabovich">grabovich</option>
                <option value="igor">igor</option>
            </select>
        <label for="onu-count"></label>
        <input type="text" name="onu-count">
        <input type="submit" value="OK">
    </form>



<script>
  setInterval(() => {
    location.reload()
  }, 600000);
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
        <div class="id">Id</div>
        <div class="text-block">Тариф</div>
        <div class="text-block name">Імя</div>
        <div class="text-block tel">Номер телефона</div>
        <div class="text-block">Адреса</div>
        <div class="text-block">Номер буд або кв</div>
        <div class="text-block">Статус</div>
        <div class="text-block">Дата</div>
        <div class="text-block">Team</div>
    </div>
    
    `
    let myData = JSON.parse(data)
    
    for(let i=0;i<myData.length;i++){
        console.log(myData[i])
        let background = ''
        if(myData[i]['Статус']=='Підключено'){
            background = 'main-inner-green'
        }
        HTML += `
    <div class="main-inner ${background}" style="display:flex;">
        <div class="id">${i+1}</div>
        <div class="text-block">${myData[i]['Тариф']}</div>
        <div class="text-block">${myData[i]['Імя']}</div>
        <div class="text-block">${myData[i]['Номер тел']}</div>
        <div class="text-block">${myData[i]['Адреса']}</div>
        <div class="text-block">${myData[i]['Номер']}</div>
        <div class="text-block status status${i+1}"id="${myData[i]['Номер тел']}">${myData[i]['Статус']}</div>
        <div class="text-block">${myData[i]['Дата']}</div>
        <div id="team">
        <span class="none-team ${myData[i]['team']}" id="${myData[i]['Номер тел']}"></span>
        </div>
    </div>
    <div class="View">View</div>
    <div class="view-block"></div>
    ` 
    }
    div.innerHTML = HTML
    document.body.append(div)

    const del = document.querySelectorAll('#delete')
    

       
    }
    
</script>




<div class="black-block"></div>
<div class="replace__container">
<input type="textarea" class="replace-text">
<div class="btn__inner">
<div class="choose-btn">OK</div>
<div class="close-btn">CLOSE</div>
</div>

</div>



<!-- Форма для вибору команди -->
<div class="teamBlock">
<div class="team__item">
<span class="grabovich"></span>
</div>
<div class="team__item">
<span class="igor"></span>
</div>
<div class="team__item">
<span class="vladi"></span>
</div>
<div class="team__item">
<span class="defoult"></span>
</div>
<div class="close-btn">CLOSE</div>
</div>

<script>

    const blockReplace = document.querySelector('.replace__container')
    const input = document.querySelector('.replace-text')
    const blackBlock = document.querySelector('.black-block')
    const okbtn = document.querySelector('.choose-btn')
    const closebtn = document.querySelector('.close-btn')

window.addEventListener("click", function lis(e){
    
if(e.target.classList.value.includes('status')){
    let className = e.target.classList.value
        blockReplace.classList.add('replace-text-active')
        blackBlock.classList.add('black-block-active')
        okbtn.classList.add('btn-active')
        closebtn.classList.add('btn-active')
        okbtn.onclick = () =>{
            if(input.value!=''){
                const status = input.value
                e.target.textContent = status
                input.value = ''
                blockReplace.classList.remove('replace-text-active')
                blackBlock.classList.remove('black-block-active')
                okbtn.classList.remove('btn-active')
                closebtn.classList.remove('btn-active')
               
                const tel= e.target.id

                const params = "tel_number=" + tel+ "&status=" + status;
                let xhttp1 = new XMLHttpRequest()
                xhttp1.onreadystatechange = function(){
                if(this.readyState == 4  && this.status == 200){
                    location.reload()
                }
                }
                xhttp1.open("POST","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/delete.php")
                xhttp1.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhttp1.send(params)

            }
        else
        alert('ERROR')
    }
           
        closebtn.onclick = () =>{
            blockReplace.classList.remove('replace-text-active')
            blackBlock.classList.remove('black-block-active')
            okbtn.classList.remove('btn-active')
            closebtn.classList.remove('btn-active')
        }

        
}
})
    </script>

<script>

const temsColor = document.querySelectorAll('#team span')
const teamBlock = document.querySelector('.teamBlock')
const first = document.querySelector('.grabovich')
const second = document.querySelector('.igor')
const third = document.querySelector('.vladi')
let telnum 
let colorTeam 
       


window.addEventListener('click',function clickTeam(event){
    if(event.target.classList.contains('none-team')){
        teamBlock.classList.add('teamBlock-active')
        blackBlock.classList.add('black-block-active')
        closebtn.classList.add('btn-active')
        

        closebtn.onclick = () =>{
            closebtn.classList.remove('btn-active')
            teamBlock.classList.remove('teamBlock-active')
            blackBlock.classList.remove('black-block-active')
        }
    }
    

})

window.onclick = (e) =>{
    if(event.target.classList.contains('none-team') ) {
            telnum = event.target.id
    }
    if(e.target.classList == 'grabovich'){

        colorTeam = e.target.classList
         let xhr = new XMLHttpRequest()
         xhr.onreadystatechange = function(){
            if(this.readyState == 4  && this.status == 200){
                location.reload()
        }
      }
     
      const param = "tel_number=" + telnum+ "&team=" + colorTeam;
      xhr.open("POST","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/setTeam.php")
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
      xhr.send(param)
      
    }
    
    else if(e.target.classList == 'igor'){
        colorTeam = e.target.classList
         let xhr = new XMLHttpRequest()
         xhr.onreadystatechange = function(){
            if(this.readyState == 4  && this.status == 200){
                location.reload()
        }
      }
      const param = "tel_number=" + telnum+ "&team=" + colorTeam;
      xhr.open("POST","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/setTeam.php")
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
      xhr.send(param)

    }
    else if(e.target.classList == 'vladi'){
        colorTeam = e.target.classList
         let xhr = new XMLHttpRequest()
         xhr.onreadystatechange = function(){
            if(this.readyState == 4  && this.status == 200){
            location.reload()
        }
      }
      const param = "tel_number=" + telnum+ "&team=" + colorTeam;
      xhr.open("POST","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/setTeam.php")
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
      xhr.send(param)

    }
    else if(e.target.classList == 'defoult'){
        colorTeam = e.target.classList
         let xhr = new XMLHttpRequest()
         xhr.onreadystatechange = function(){
            if(this.readyState == 4  && this.status == 200){
            location.reload()
        }
      }
      const param = "tel_number=" + telnum+ "&team=" + colorTeam;
      xhr.open("POST","https://alpha-vynogradiv.net/wp-content/themes/twentytwenty/setTeam.php")
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded")
      xhr.send(param)

    }
    else if(e.target.classList == 'close-btn'){
        closebtn.classList.remove('btn-active')
        teamBlock.classList.remove('teamBlock-active')
        blackBlock.classList.remove('black-block-active')
    }
        
    
}

</script>

<style>
.replace__container{
    width: 500px;
    height: 175px;
    top: 100px;
    position: fixed;
    left: 34vw;
    display: flex;
    flex-direction: column;
    z-index: 100000;
    top:-100%;
}
.btn__inner{
    display: flex;
    justify-content: space-between;
    margin-top: 35px;
}
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
</style>



















<script>
//  window.addEventListener("click", function() {
//          let closes = document.querySelector('#delete')
//          let names = document.querySelectorAll('.name')
//          let tels = document.querySelectorAll('.tel')

//              for(let i=0;i<closes.length;i++){
//              console.log(closes[i])
           
//          }
        
//          const url = 'http://77.52.12.151/wp-content/themes/twentytwenty/delete.php'
        
//         const obj ={
//             name : 'Admin'
//         }
 
// });
//      let user = {
//    name: 'John',
//    surname: 'Smith'
//  };
//  async function submit(){
//     let response = await fetch('http://77.52.12.151/wp-content/themes/twentytwenty/delete.php', {
//    method: 'POST',
//    headers: {
//      'Content-Type': 'application/json;charset=utf-8'
//    },
//    body: JSON.stringify(user)
//  });
//  let result = await response.json();
//  alert(result.message);
//  }
//  submit
 

</script>