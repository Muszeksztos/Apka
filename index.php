<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POLISH.PL.LOGOWANIE</title>
    <style>
        body{
            background-color: #2C2626;
            color: black;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        
        .form a{
            text-decoration: none;
            color: black;
        }

        .form .error{
            font-family: 'Saira Condensed', sans-serif;
            font-size: 60px;
            text-transform: uppercase;
            color: red;
            margin-top: 60px;
            text-align: center;
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
<h2>Proszę się zalogować</h2>
    <div class="form">
        <form action="logowanie.php" method="post">
            <input type="text" name="login" class="input" placeholder="PODAJ LOGIN">
            <input type="text" name="haslo" class="input" placeholder="PODAJ HASLO">
            <input type="submit" value="zaloguj sie" class="submit" name="loguj">
        </form>
        <?php
        if(isset($_SESSION['error'])): ?>
        <div class="error">
        <?php echo $_SESSION['error'];
        unset($_SESSION['error']);
        ?>
        </div>
        <?php endif; ?>
        
<h2>Nie posiadasz KONTA? <a href="rejestracja.php">ZAŁÓŻ KONTO</a><h2>   
<button class="submit"><a href="polish.php">STRONA GŁOWNA</a></button>     
    </div>
</body>
</html>