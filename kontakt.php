<?php
session_start();


if(isset($_POST['zaloza'])){
    $imie = $_POST['imie'];
    
    $nazwisko = $_POST['nazwisko'];
    $auto = $_POST['auto'];
    $co = $_POST['co'];

    $walidacja = true;

    if(strlen($imie)<3){
        $walidacja = false;
        $_SESSION['imie_error'] = 'Wpisz poprawne imie';
    }

    if(strlen($nazwisko)<3){
        $walidacja = false;
        $_SESSION['nazwisko_error'] = 'Wpisz poprawne nazwisko';
    }

   

    if(strlen($auto) < 3){
        $walidacja = false;
        $_SESSION['auto_error'] = 'Wpisz poprawna nazwe auta';
    }

    if($walidacja){
        require_once('baza.php');

            mysqli_report(MYSQLI_REPORT_STRICT);
            try{
                $polaczenie = new mysqli($serwer, $user, $pass, $database);
            }
            catch(mysqli_sql_exception $e){
                $_SESSION['error'] = $e;
                header('Location: kontakt.php');
                exit();
            }

            
             $imie = htmlentities($imie);
             $nazwisko = htmlentities($nazwisko);
             $imie = $polaczenie->real_escape_string($imie);
             $nazwisko = $polaczenie->real_escape_string($nazwisko);

          
             $zapytanie = "SELECT imie FROM zapytania WHERE imie='$imie' AND nazwisko='$nazwisko'";
             $wynik = $polaczenie->query($zapytanie);
             if($wynik->num_rows >0){
                $_SESSION['imie_error'] =  'Zgłoszenie już zostało przyjęte od tej osoby';
             }
             else{
                $zapytanie2 = "INSERT INTO zapytania VALUES(NULL, '$imie', '$nazwisko', '$auto', '$co')";
               if($polaczenie->query($zapytanie2)){
                header('Location: kontakt.php');
               }else{
                   echo 'Nie udalo sie';
               }
             }
             $polaczenie->close();
    }
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <title>POLISH.PL.KONTAKT</title>
 
    <style>
        


body{
    font-family: 'Saira Condensed', sans-serif;
            background-color:#2C2626;
            color:orange;
        }

        form>input{
            display: block;
            margin: 20px;
        }

        div.error{
            font-family: 'Saira Condensed', sans-serif;
            font-size: 20px;
            text-transform: uppercase;
            color: red;
            margin-top: 30px;
            margin-bottom:30px
            text-align: center;
        }

        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .submit{
        height: 90px;
        border-colr: black;
        border-radius: 15px;
        background-color: orange;
        cursor: pointer;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-top: 10px;
        transition: 0.5s;
        width: 350px;
        color: black;
        text-transform: uppercase;
        }

        .submit a{
            text-decoration: none;
            color: black;
        }

        

        .input{
        height: 50px;
        border-radius: 10px;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-bottom: 5px;
        transition: 0.5s;
        width: 350px;
        background-color: orange;
        border-color: black;
        }
        .inputo{
        height: 100px;
        border-radius: 10px;
        font-size: 1.6rem;
        font-weight: 300;
        padding: 0 30px;
        margin-bottom: 5px;
        transition: 0.5s;
        width: 350px;
        background-color: orange;
        border-color: black;
        }

        h2{
            text-align: center;
            text-transform: uppercase;
            font-size: 3rem;
        }
        img{
    top: 10px;
    left: 10px;
    position: absolute;
    max-width: 300px;
    height: 80px;
    
  }
 
  
        

    </style>
</head>
<body>
<img src="polish.png" alt="logomojelel"> 
      
       
            <h2>witaj!</h2>
            
            <h2>W razie pytań proszę pisać <i>POLISH.PL@gmail.com</i></h2>
          
        </div>
       </div>
    </header>
    <h2>Dane kontaktowe</h2>
    <form action="kontakt.php" method="post">
        <input type="text" name="imie"  class="input" placeholder="Imie">
        <div class="error">
            <?php
            if(isset($_SESSION['imie_error'])){
                echo($_SESSION['imie_error']);
            unset($_SESSION['imie_error']);
    }
            ?>
        </div>
        <input type="text" name="nazwisko"  class="input" placeholder="Nazwisko">
        <div class="error">
            <?php
            if(isset($_SESSION['nazwisko_error'])){
                echo($_SESSION['nazwisko_error']);
            unset($_SESSION['nazwisko_error']);
    }
            ?>
        </div>

        <input type="text" name="auto"  class="input" placeholder="Jakie auto cię interesuje">
        <div class="error">
            <?php
            if(isset($_SESSION['auto_error'])){
                echo($_SESSION['auto_error']);
            unset($_SESSION['auto_error']);
    }
            ?>
        </div>

        <input type="text" name="co"  class="inputo" placeholder="Wskazówki przy wyborze">
        <div class="error">
        <?php
            if(isset($_SESSION['co_error'])){
                echo($_SESSION['co_error']);
            unset($_SESSION['co_error']);
    }
            ?>
        </div>
        <input type="submit" value="Wyślij"  class="submit" name="zaloza">
        <button class="submit"><a href="polish.php">Powrot</a></button> 
    </form>
  

    
</body>
</html>