<?php
session_start();

$db = new mysqli('localhost','root', '','users');
if (isset($_POST['submit'])){
    $errors = array();
    $true = true;
    if (empty($_POST['username'])){
        $true = false;
        array_push($errors, "A felhasználónév üres!");
    }
    if (empty($_POST['password'])){
        $true = false;
        array_push($errors, "A jelszó üres!");
    }
    if (empty($_POST['password_2'])){
        $true = false;
        array_push($errors, "A jelszó2 üres!");
    }
    if (!($_POST['password']==$_POST['password_2'])) {
        $true = false;
        array_push($errors, "A jelszavak nem egyeznek!");
        //regisztracio
    }
    if ($true){
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        
        $sql = "INSERT INTO user(username, password, Date) VALUES('$username', '$password', NOW())";
        $db->query($sql);
        session_start();
        $_SESSION['username'] = $username;
        header('location: Pizza_oldal.php');
    }
}
$db->close();
?>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <title>PizzaRegisztracio</title>
    </head>
    <body>
        <div>
            <h1>Regisztráció</h1>
            <form action="index.php" method="Post">
                Felhasználónév<input type="text" name="username"/>
                Jelszó<input type="password" name="password"/>
                Jelszó Újra<input type="password"name="password_2"/>
                <input value="Regisztracio" type="submit" name="submit"/>
            </form>
            <?php
            // put your code here
            if (!empty($errors)) {
                foreach ($errors as $key){
                    echo $key."<br/>";
                }
            }
            ?>
        </div>
    </body>
</html>


