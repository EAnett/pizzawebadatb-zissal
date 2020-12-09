<?php
session_start();
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <title>Pizza Adatbázis</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
        <link rel="stylesheet" href="bejelentkezes_index.css">
        <link rel="stylesheet" href="pizza_oldal.css">
        
    </head>
    <body>
        <div class="container2">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#">Főoldal</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kapcsolat</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="italok.php">Italok</a>
          </li>
        </ul>
        </nav>
        </div>
        <div class="container">
            <h1>Pizza választék</h1>
            <div class="paprikas">
                <h2 class="nev">Paprikás pizza</h2> <br/>
                <a><img src="0.jpg"  width="260" height="219"  alt="0" title="0.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Szalámi</p> <br/>
                <p>Paprika</p> <br/>
                <p>Sajt</p> 
            </div>
            <div class="valamilyen">
                <h2 class="nev">Valamilyen pizza</h2> <br/>
                <a><img src="1.jpg"  width="260" height="219"  alt="1" title="1.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Szalámi</p> <br/>
                <p>Tésztavmi</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <div class="oliva">
                <h2 class="nev">Olivás pizza</h2> <br/>
                <a><img src="2.jpg"  width="260" height="219"  alt="2" title="2.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Szalámi</p> <br/>
                <p>Kolbász</p> <br/>
                <p>Olajbogyó</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <div class="sima">
                <h2 class="nev">Sajtos sima pizza</h2> <br/>
                <a><img src="3.jpg"  width="260" height="219"  alt="3" title="3.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <div class="szalamis">
                <h2 class="nev">Szalámis pizza</h2> <br/>
                <a><img src="4.jpg"  width="260" height="219"  alt="4" title="4.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Szalámi</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <div class="kukorica">
                <h2 class="nev">Kukoricás pizza</h2> <br/>
                <a><img src="5.jpg"  width="260" height="219"  alt="5" title="5.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Szalámi</p> <br/>
                <p>Kukorica</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <div class="hus">
                <h2 class="nev">Húsos pizza</h2> <br/>
                <a><img src="6.jpg"  width="260" height="219"  alt="6" title="6.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Szalámi</p> <br/>
                <p>Csirke hús</p> <br/>
                <p>Zöldség</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <div class="sonka">
                <h2 class="nev">Sonkás pizza</h2> <br/>
                <a><img src="7.jpg"  width="260" height="219"  alt="7" title="7.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Sonka</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <div class="sonkaszalami">
                <h2 class="nev">Sonkás-Szalámis pizza</h2> <br/>
                <a><img src="8.jpg"  width="260" height="219"  alt="8" title="8.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Szalámi</p> <br/>
                <p>Sonka</p> <br/>
                <p>Paprika</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <div class="gomba">
                <h2 class="nev">Gombás pizza</h2> <br/>
                <a><img src="9.jpg"  width="260" height="219"  alt="9" title="9.jpg"></a> <br/>
                <p>Paradicsom alap</p> <br/>
                <p>Gomba</p> <br/>
                <p>Kukorica</p> <br/>
                <p>Sajt</p> <br/>
            </div>
            <?php
                // put your code here
            ?>
            <a href="logout.php">Kijelentkezés</a>
        </div>
    </body>
</html>

