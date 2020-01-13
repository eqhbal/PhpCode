<!DOCTYPE html>
<html lang="nl">
<Head>
    <link rel="stylesheet" href="Style.css">
    
    <title>Bon Temps</title>
        <div class="Head" />
        <div class="Headbuttons">
            <a href="index.php">Home</a>
            <a href="menu.php">Menu</a>
            <?php
                if(isset($_SESSION["mwnr"])){
                    echo('
                            <a href="menubeheren.php"> Menu beheren</a>
                            
                        ');
                }
            ?>
            <a href="#">Reservation</a>
            <?php
                if(isset($_SESSION["username"])){
                    echo('
                            <a href="acount.php">' . $_SESSION["username"] . '</a>  
                            <a href="logout.php"> Sign Out</a>
                        ');
                }
                else{
                    echo ('
                            <a href="Login.php">Sign in</a>
                            <a href="register.php">Sign up</a>
                        ');
                }
            ?>
        </div>
</Head>
<Body>  
</Body>