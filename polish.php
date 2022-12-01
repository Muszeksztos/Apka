<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="stylowa.css">
    <title>POLISH.PL</title>
    <style>


 .menu{
   
    background-color: black;
    width: 100%;
    height: 100px;
    padding-top:30px;
}

.gm{
    display: flex;
    justify-content: center;
    list-style: none;
    spacebetween: 30px;
}



.gm > li > a:hover{
    color: yellow;
}
a:-webkit-any-link {
    color: orange;
  text-decoration: none;
    
}

.gm > li > a:hover{
    color: yellow;
}
h1{
    float: left;
    width: 25%;
}
p{
    float: left;
    width: 25%;
}
.auto-info h1{
    font-size: 1.75rem;
    color: orange;
    
    font-weight: bold;
  }
  .auto-info p{
    font-size: 0.75rem;
    color: orange;
    
    font-weight: bold;
  }
.zakup{
    align-items: center;
    flex-basis: 25%;
    background-color: black;
    padding-top: 130px;
    padding-bottom: 50px;
    
  }
  .auto-jpg img{
    width: 100%;
    height:300px;
    object-fit: cover;

  }
  .menu img{
    top: 22px;
    left: 10px;
    position: absolute;
    max-width: 300px;
    height: 80px;
    
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
    <section class="npwno">
        
            <h2>Najciekawsze pojazdy w naszej ofercie</h2>
        </section>

    <section class="galleria">
       
            
            <div class="auto">
                    
                    <div class="auto-jpg">
                    <img src="subaru.jpg" alt="subaru">
                    </div>
                    
                    <div class="auto-info">
                    <h4>Subaru Impreza STI</h4>
                    <h1>Cena</h1> 
                    <h1>Przebieg</h1> 
                    <h1>Moc</h1> 
                    <h1>Rok</h1> 
                    <p>249.999 zł</p>
                    <p>12.135 km</p>
                    <p> 330km</p>
                    <p>12/2005</p>
                    </div>

                    <div class="zakup">
                        <button class="guzior5"><a href="Licytacja.php">KUP MNIE</a></button>
                    </div>
            </div>
            

            <div class="auto">
                <div class="auto-jpg">
                    <img src="bmw.jpg" alt="bmw">
                </div>
                    <div class="auto-info">
                    <h4>BMW M3 GTS </h4>
                    <h1>Cena</h1>
                    <h1>Przebieg</h1> 
                    <h1>Moc</h1>
                    <h1>Rok</h1> 
                    <p>1.249.999 zł</p>
                    <p>18.100 km</p>
                    <p>450 KM</p>
                    <p>08/2009</p>
                    </div>

                    <div class="zakup">
                        <button class="guzior5"><a href="Licytacja.php">KUP MNIE</a></button>
                    </div>
            </div>


            <div class="auto">
                <div class="auto-jpg">
                    <img src="s14.jpg" alt="s14">
                </div>
                    <div class="auto-info">
                    <h4>Nissan Silvia S14</h4>
                    <h1>Cena</h1> 
                    <h1>Przebieg</h1> 
                    <h1>Moc</h1> 
                    <h1>Rok</h1> 
                    <p>210.891 zł</p>                     
                    <p>140.000 km</p>                    
                    <p>408 KM</p>                    
                    <p>06/1996</p>
                    </div>

                    <div class="zakup">
                        <button class="guzior5"><a href="Licytacja.php">KUP MNIE</a></button>
                    </div>
            </div>



            <div class="auto">
                <div class="auto-jpg">
                    <img src="lambo.jpg" alt="">
                </div>
                    <div class="auto-info">
                    <h4>Lamborghini Huracán</h4>
                    <h1>Cena</h1> 
                    <h1>Przebieg</h1>
                    <h1>Moc</h1>
                    <h1>Rok</h1> 
                    <p>1.134.999 zł</p>                     
                    <p>44.335 km</p>                     
                    <p>610 KM</p>                   
                    <p>07/2017</p>
                    </div>

                    <div class="zakup">
                        <button class="guzior5"><a href="Licytacja.php">KUP MNIE</a></button>
                    </div>
            </div>
            
             
        
    </section>
    
</body>
</html>