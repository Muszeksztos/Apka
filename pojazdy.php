<?php
session_start();

if(!isset($_SESSION['user'])){
    header('Location: index.php');
    exit();
}
          

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="stylowa.css">
    <title>POLISH.PL.Pojazdy</title>
    <style>
     body{
            background-color: #2C2626;
            color: black;
        }
       
        .menu{
   
   background-color: black;
   width: 100%;
   height: 100px;
   padding-top:30px;

}
.menu img{
    top: 22px;
    left: 10px;
    position: absolute;
    max-width: 300px;
    height: 80px;
    
  }
  .gm{
    display: flex;
    justify-content: center;
    list-style: none;
    spacebetween: 30px;
}

        

        td{
            border: 2px solid;
            padding: 5px;
            font-size: 20px;
        }

        th{
            font-size: 25px;
            text-transform: uppercase;
        }

        table{
            margin-top: 15px;
            margin-bottom: 20px;
            width: 100%;
            border-top: 5px solid orange;
            border-bottom: 5px solid orange;
            background-color: #545150;
            font-family: 'Saira Condensed', sans-serif;
        }

        ol li{
            height: 35px;
        }

        .table{
             margin-top:100px;
         }

        .aplikacja-content .container{
            margin-bottom:20px;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items:center;
            text-align: center;
            background-color:black;
        }

        .submit{
            font-family: 'Saira Condensed', sans-serif;
            text-transform: uppercase;
            font-weight: bold;
            height: 60px;
        border-colr: black;
        border-radius: 15px;
        background-color: orange;
        cursor: pointer;
        font-size: 1.7rem;
        font-weight: 300;
        padding: 0 30px;
        margin-top: 10px;
        transition: 0.5s;
        width: 400px;
        color: black;
        display: flex;
        justify-content: center;
        align-items: center;

        }

        .input{
            height: 30px;
        border-radius: 10px;
        font-size: 1 rem;
        font-weight: 300;
        padding: 0 30px;
        margin-bottom: 5px;
        transition: 0.5s;
        width: 450px;
        background-color: #545150;
        border-color: black;
        font-weight: bold;
        }

        

        .ztymdziala{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .mezczyzni-cwiczenia{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        h2{
            font-family: 'Saira Condensed', sans-serif;
            font-size: 60px;
            text-transform: uppercase;
            color: orange;
           
            text-align: center;
        }
        h1{
            font-family: 'Saira Condensed', sans-serif;
            font-size: 30px;
            text-transform: uppercase;
            color: orange;
            margin-top: 20px;
            margin-bottom20px;
            text-align: center;
        }
        .guzior5 {
  display: inline-block;
  width: 200px;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  background-color: #2C2626;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.guzior5:hover {background-color: #7F807B}

.guzior5:active {
  background-color: orangered;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
  
}
.gm > li > a:hover{
    color: yellow;
}
a:-webkit-any-link {
    color: orange;
  text-decoration: none;
    
}
.aplikacja-content1{
    flex-basis: 50%;
    padding: 20px 0;
  }
  .aplikacja-content2{
    flex-basis: 50%;
    padding: 20px 0;
  }
.obok{
    justify-content:center;
    display: flex;
}
    </style>
</head>
<body>
<header class="startglowa">
   
   <div class="container">
       <nav class="menu">
       <img src="polish.png" alt="logomojelel">
       <ul class="gm">
       <li> <button class="guzior5"><a href="polish.php">START</a></button></li>
            <li> <button class="guzior5"><a href="pojazdy.php">POJAZDY</a></button></li>
            <li> <button class="guzior5"><a href="kontakt.php">KONTAKT</a></button></li>
            <li> <button class="guzior5"><a href="logowanie.php">LOGOWANIE</a></button></li>
          </ul>
          
       </nav>
   </div>
   

       </div>
      </div>
   </header>
   

   <h2>Wybierz jeden z supersamochodów</h2>
   <div class="obok" >
   <section class="aplikacja-content1">
               
        <div class="container">
        <div>
    
    <div class="ztymdziala">

    <form action="" method="post">
        <input type="submit" value="Supersamochody" name='cofaniewyboru' class="submit">
    </form>
      
    </div>

<div class="ztymdziala">

<form action="" method="post">
        <input type="submit" value="Lamborgini" name='lambo' class="input">
    </form>
        <?php
        if(isset($_POST['lambo'])){
            require_once('funkcje.php');          
            show_ss1();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="Ferrari" name='ferr' class="input">
    </form>
        <?php
        if(isset($_POST['ferr'])){
            require_once('funkcje.php');            
            show_ss2();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="McLaren" name='mc' class="input">
    </form>
        <?php
        if(isset($_POST['mc'])){
            require_once('funkcje.php');           
            show_ss3();
        }
        ?>

<form action="" method="post">
        <input type="submit" value="Koenigsegg" name='kgg' class="input">
    </form>
        <?php
        if(isset($_POST['kgg'])){
            require_once('funkcje.php');           
            show_ss4();
        }
        ?>

<form action="" method="post">
        <input type="submit" value="Bugatti" name='bugi' class="input">
    </form>
        <?php
        if(isset($_POST['bugi'])){
            require_once('funkcje.php');            
            show_ss5();
        }
        ?>

</div>



<div class="ztymdziala">
<form action="" method="post">
        <input type="submit" value="Auta Sportowe" name='cofaniewyboru' class="submit">
    </form>
    
        
</div>


<div class="mezczyzni-cwiczenia">
<form action="" method="post">
        <input type="submit" value="AUDI" name='audi' class="input">
    </form>
        <?php
        if(isset($_POST['audi'])){
            require_once('funkcje.php');           
            show_as1();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="BMW" name='bmw' class="input">
    </form>
        <?php
        if(isset($_POST['bmw'])){
            require_once('funkcje.php');           
            show_as2();
        }
        ?>


<form action="" method="post">
        <input type="submit" value="Porshe" name='love' class="input">
    </form>
        <?php
        if(isset($_POST['love'])){
            require_once('funkcje.php');           
            show_as3();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="Mercedes" name='merc' class="input">
    </form>
        <?php
        if(isset($_POST['merc'])){
            require_once('funkcje.php');          
            show_as4();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="Alfa-Romeo" name='laweta' class="input">
    </form>
        <?php
        if(isset($_POST['laweta'])){
            require_once('funkcje.php');           
            show_as5();
        }
        ?>

        </div>


   
    </section>





    <section class="aplikacja-content2">
              
        <div class="container">

       
    <div>
    

    <div class="ztymdziala">
    <form action="" method="post">
        <input type="submit" value="Legendy JDM" name='JDM' class="submit">
    </form>
       

    </div>


<div class="ztymdziala">



<form action="" method="post">
        <input type="submit" value="Nissan" name='paul' class="input">
    </form>
        <?php
        if(isset($_POST['paul'])){
            require_once('funkcje.php');           
            show_jdm1();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="Toyota" name='budda' class="input">
    </form>
        <?php
        if(isset($_POST['budda'])){
            require_once('funkcje.php');           
            show_jdm2();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="Lexus" name='Pryszczatejaponczyki' class="input">
    </form>
        <?php
        if(isset($_POST['Pryszczatejaponczyki'])){
            require_once('funkcje.php');           
            show_jdm3();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="Mazda" name='brbrbr' class="input">
    </form>
        <?php
        if(isset($_POST['brbrbr'])){
            require_once('funkcje.php');           
            show_jdm4();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="Honda" name='vtecsiuu' class="input">
    </form>
        <?php
        if(isset($_POST['vtecsiuu'])){
            require_once('funkcje.php');           
            show_jdm5();
        }
        ?>

</div>

<div class="ztymdziala">
<form action="" method="post">
        <input type="submit" value="Samochody osobowe" name='OS' class="submit">
    </form>
      
</div>

<div class="ztymdziala">

<form action="" method="post">
        <input type="submit" value="Audi" name='bleeee' class="input">
    </form>
        <?php
        if(isset($_POST['bleeee'])){
            require_once('funkcje.php');           
            show_os1();
        }
        ?>



<form action="" method="post">
        <input type="submit" value="Toyota" name='yariska' class="input">
    </form>
        <?php
        if(isset($_POST['yariska'])){
            require_once('funkcje.php');           
            show_os2();
        }
        ?>

<form action="" method="post">
        <input type="submit" value="Lexus" name='gruz' class="input">
    </form>
        <?php
        if(isset($_POST['gruz'])){
            require_once('funkcje.php');           
            show_os3();
        }
        ?>

<form action="" method="post">
        <input type="submit" value="Mazda" name='doritos' class="input">
    </form>
        <?php
        if(isset($_POST['doritos'])){
            require_once('funkcje.php');           
            show_os4();
        }
        ?>

<form action="" method="post">
        <input type="submit" value="Honda" name='vtecale90kucy' class="input">
    </form>
        <?php
        if(isset($_POST['vtecale90kucy'])){
            require_once('funkcje.php');           
            show_os5();
        }
        ?>

        </div>
        </div>
        </div>   
        </section>



    
   
</body>
</html>