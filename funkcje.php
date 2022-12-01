

<?php
function show_as1()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ASS WHERE Marka='Audi'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';   
        $wynik->free_result();       
        $polaczenie->close();
    }
?>

<?php
function show_as2()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ASS WHERE Marka='Bmw'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';    
        $wynik->free_result();  
        $polaczenie->close();
    }
?>

<?php
function show_as3()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ASS WHERE Marka='Porshe'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';      
        $wynik->free_result();
           $polaczenie->close();
    }
?>

<?php
function show_as4()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ASS WHERE Marka='Mercedes'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>'; 
        $wynik->free_result();
        $polaczenie->close();
    }
?>


<?php
function show_as5()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ASS WHERE Marka='Alfa-Romeo'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        $wynik->free_result();    
        $polaczenie->close();
    }
?>



<?php
function show_ss1()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ss WHERE Marka='Lamborghini'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>'; 
        $wynik->free_result(); 
        $polaczenie->close();
    }
?>


<?php
function show_ss2()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ss WHERE Marka='Ferrari'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        $wynik->free_result();
        $polaczenie->close();
    }
?>

<?php
function show_ss3()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ss WHERE Marka='McLaren'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        $wynik->free_result();   
        $polaczenie->close();
    }
?>

<?php
function show_ss4()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ss WHERE Marka='koenigsegg'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        $wynik->free_result();
        $polaczenie->close();
    }
?>


<?php
function show_ss5()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM ss WHERE Marka='Bugatti'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        $wynik->free_result();
        $polaczenie->close();
    }
?>

<?php
function show_jdm1()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM JDM WHERE Marka='Nissan'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
           $wynik->free_result();
 
        $polaczenie->close();
    }
?>


<?php
function show_jdm2()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM JDM WHERE Marka='Toyota'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';      
        $wynik->free_result();    
        $polaczenie->close();
    }
?>

<?php
function show_jdm3()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM JDM WHERE Marka='Lexus'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        $wynik->free_result();     
        $polaczenie->close();
    }
?>

<?php
function show_jdm4()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM JDM WHERE Marka='Mazda'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        $wynik->free_result();
        $polaczenie->close();
    }
?>


<?php
function show_jdm5()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM JDM WHERE Marka='Honda'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';       
        $wynik->free_result();    
        $polaczenie->close();
    }
?>





<?php
function show_os1()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM OS WHERE Marka='Audi'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';      
        $wynik->free_result();      
        $polaczenie->close();
    }
?>

<?php
function show_os2()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM OS WHERE Marka='Toyota'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';      
        $wynik->free_result();
        $polaczenie->close();
    }
?>

<?php
function show_os3()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM OS WHERE Marka='Lexus'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';    
        $wynik->free_result();
        $polaczenie->close();
    }
?>

<?php
function show_os4()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM OS WHERE Marka='Mazda'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';      
        $wynik->free_result();   
        $polaczenie->close();
    }
?>

<?php
function show_os5()
{
    require_once('baza.php');
   mysqli_report(MYSQLI_REPORT_STRICT);
    try{
        $polaczenie = new mysqli($serwer, $user, $pass, $database);
    }
    catch(mysqli_sql_exception $e){
        echo 'Błąd połączenia';
        exit();
    }
    $zapytanie = "SELECT Moc, Marka, Model , Cena  FROM OS WHERE Marka='Honda'";
    $wynik = $polaczenie->query($zapytanie);
          echo '<table border=1>';
        echo '<tr>';
        echo '<th>Moc</th>';
        echo '<th>Marka</th>';
        echo '<th>Model</th>';
        echo '<th>Cena</th>';
        echo '</tr>';
        while($rezultat = $wynik->fetch_assoc()){
            echo '<tr>';
            foreach($rezultat as $rekord){
                echo '<td>' .$rekord . '</td>';
            }
            echo '</tr>';
        }
        echo '</table>';    
        $wynik->free_result();   
        $polaczenie->close();
    }
?>





