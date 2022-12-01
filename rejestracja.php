<?php
session_start();


if(isset($_POST['zaloz'])){
    $imie = $_POST['imie'];
    
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $haslo1 = $_POST['haslo1'];
    $haslo2 = $_POST['haslo2'];

    $walidacja = true;

    if(strlen($imie)<3){
        $walidacja = false;
        $_SESSION['imie_error'] = 'Wpisz poprawne imie';
    }

    if(strlen($nazwisko)<3){
        $walidacja = false;
        $_SESSION['nazwisko_error'] = 'Wpisz poprawne imie';
    }

    if(!ctype_alnum($login)){
        $walidacja = false;
        $_SESSION[ 'login_error'] = 'Login musi sie skladac z liter i cyfr (bez polskich znakow)';
    }

    if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $walidacja = false;
        $_SESSION['email_error'] = 'Wpisz poprawny adres email';
    }

    if($haslo1 != $haslo2){
        $walidacja = false;
        $_SESSION['pass_error'] = 'Podane hasla sa rozne';
    }

    if($walidacja){
        require_once('baza.php');

            mysqli_report(MYSQLI_REPORT_STRICT);
            try{
                $polaczenie = new mysqli($serwer, $user, $pass, $database);
            }
            catch(mysqli_sql_exception $e){
                $_SESSION['error'] = $e;
                header('Location: index.php');
                exit();
            }

            
            

           
             $zapytanie = "SELECT login FROM users WHERE login='$login'";
             $wynik = $polaczenie->query($zapytanie);
             if($wynik->num_rows >0){
                $_SESSION['login_error'] =  'Podany login jest zajety. W pisz inny';
             }
             else{

                $haslo1 = password_hash($haslo1, PASSWORD_DEFAULT);
                $zapytanie2 = "INSERT INTO users VALUES(NULL, '$imie', '$nazwisko', '$login', '$haslo1', '$email')";
               if($polaczenie->query($zapytanie2)){
                header('Location: index.php');
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
    <title>POLISH.PL.REJESTRACJA</title>
    <style>
        body{
            
            background-color: #2C2626;
            
        }

        form input{
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
        font-size: 1.5rem;
        font-weight: 300;
        padding: 0 30px;
        margin-top: 10px;
        transition: 0.5s;
        width: 300px;
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
        background-color: #545150;
        border-color: black;
        }

       

        h2{
            font-family: 'Saira Condensed', sans-serif;
            font-size: 60px;
            text-transform: uppercase;
            color: orange;
            margin-top: 60px;
            text-align: center;
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
<h2>Rozpocznij rejestracje</h2>
    <form action="rejestracja.php" method="post">
        <input type="text" name="imie"  class="input" placeholder="Imie">
        <div>
            <?php
            if(isset($_SESSION['imie_error'])){
                echo '<div class="error">' . $_SESSION['imie_error']. '</div>';
            unset($_SESSION['imie_error']);
    }
            ?>
        </div>
        <input type="text" name="nazwisko"  class="input" placeholder="Nazwisko">
        <div>
            <?php
            if(isset($_SESSION['nazwisko_error'])){
                echo '<div class="error">' . $_SESSION['nazwisko_error']. '</div>';
            unset($_SESSION['nazwisko_error']);
    }
            ?>
        </div>

        <input type="login" name="login"  class="input" placeholder="Login">
        <div>
            <?php
            if(isset($_SESSION['login_error'])){
                echo '<div class="error">' . $_SESSION['login_error']. '</div>';
            unset($_SESSION['login_error']);
    }
            ?>
        </div>

        <input type="text" name="haslo1"  class="input" placeholder="Haslo">
        <div>
        <?php
            if(isset($_SESSION['pass_error'])){
                echo '<div class="error">' . $_SESSION['pass_error']. '</div>';
            unset($_SESSION['pass_error']);
    }
            ?>
        </div>
        <input type="text" name="haslo2"  class="input" placeholder="Powtórz hasło">
        <div>
        <?php
            if(isset($_SESSION['pass_error'])){
                echo '<div class="error">' . $_SESSION['pass_error']. '</div>';
            unset($_SESSION['pass_error']);
    }
            ?>
        </div>

        <input type="email" name="email"  class="input" placeholder="E-mail">
        <div>
        <?php
            if(isset($_SESSION['email_error'])){
                echo '<div class="error">' . $_SESSION['email_error']. '</div>';
            unset($_SESSION['email_error']);
    }
            ?>
        </div>
        <input type="submit" value="Załóż konto"  class="submit" name="zaloz">
        <button class="submit"><a href="polish.php">STRONA GŁÓWNA</a></button> 
    </form>
</body>
</html>