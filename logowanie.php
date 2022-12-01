<?php
session_start();
?>
<?php
   

    if(isset($_POST['loguj']))
{
    if(empty($_POST['login']) || empty($_POST['haslo']))
            {
        $_SESSION['error'] = 'Wpisz login i haslo';
        header('Location: index.php');
    exit();
            }
}
?>

<?php
    $login = $_POST['login'];
    $haslo = $_POST['haslo']; 
        require_once('baza.php');

        mysqli_report(MYSQLI_REPORT_STRICT);
        try
    {
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
        catch(mysqli_sql_exception $e)
    {
        $_SESSION['error'] = $e;
        header('Location: index.php');
        exit();
    }

    
   

    $zapytanie = "SELECT login FROM users WHERE login='$login'";
    $wynik = $polaczenie->query($zapytanie);

            
           
 if($wynik->num_rows == 1)
    {
              
    $zapytanie = "SELECT haslo FROM users WHERE login='$login'";
    $wynik = $polaczenie->query($zapytanie);
    $rekord = $wynik->fetch_assoc();
                
        if(password_verify($haslo, $rekord['haslo']))
        {
    $_SESSION['user'] = $login;
    header('Location: pojazdy.php');
        }
        else
        {
    $_SESSION['error'] = 'Blad hasla';
    header('Location: index.php');
        exit();
        }
    }
    else
        {
    $_SESSION['error'] = 'Bledny login';
    header('Location: index.php');
         exit();
        }

$polaczenie->close();


?>