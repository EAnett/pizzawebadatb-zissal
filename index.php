<?php
session_start();
if(!empty($_SESSION['username'])){
    header('location: Pizza_oldal.php');
}
else {
    session_destroy();
}
$db = new mysqli('localhost','root', '','users');
if (isset($_POST['submit2'])){
    $errors = array();
    $true = true;
    if (empty($_POST['username2'])) {
        $true = false;
        array_push($errors, "A felhasználó név nincs kitöltve!");
    }
    if (empty($_POST['password2'])) {
        $true = false;
        array_push($errors, "A jelszó nincs kitöltve!");
    }
    if ($true) {
        $username2 = mysqli_real_escape_string($db, $_POST['username2']);
        $password2 = mysqli_real_escape_string($db, $_POST['password2']);
        $sql = "SELECT * FROM user WHERE username = '$username2' AND password = '$password2'";
        $query= $db->query($sql);
        if (mysqli_num_rows($query) == 1) {
            session_start();
            $_SESSION['username2'] = $username2;
            header('location: Pizza_oldal.php');
        }
        else 
        {
            array_push($errors, "A felhasználónév nem megfelelő!");
        }
    }
}
$db->close();
?>
<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>Pizza</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"> </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"> </script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="bejelentkezes_index.css">
        
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <form class="form-inline" action="Pizza_oldal.php">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">...</span>
            </div>
            <input type="text" class="form-control" name="usernme" placeholder="Felhasználónév"/>
            <div class="input-group-prepend">
              <span class="input-group-text">P</span>
            </div>
            <input type="password" class="form-control" id="password2" name="Jelszó" placeholder="Jelszó"/> <br/>
            <input value="Bejelentkezés"  type="submit" class="btn btn-primary" id="submit2" name="submit2" value="submit2"/>
          </div>
        </form>
        </nav>
        
        <div class="container">
            <h1>Bejelentkezés</h1>
            <form action="index.php" method="Post">
                <label>Felhasználónév</label>
                <input type="text" class="form-control" id="username2" name="username2"/> <br/>
                <label>Jelszó</label>
                <input type="password" class="form-control" id="password2" name="password2"/> <br/>
                <input value="Bejelentkezés"  type="submit" class="btn btn-primary" id="submit2" name="submit2" value="submit2"/>
            </form>
            <?php
            if (!empty($errors)) {
                foreach ($errors as $key){
                    echo $key."<br/>";
                }
            }
            ?>
            <a href="regisztracio.php">Regisztracio</a>
        </div>
    </body>
</html>
