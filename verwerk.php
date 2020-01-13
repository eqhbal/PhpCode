<?php
include("dbconnection.php");
session_start();

$email = $_POST['login-email'];
$pass = $_POST['login-pass'];


if(isset($_POST["btn-login"])){
    $vraag = "SELECT * FROM klant WHERE klant_email ='$email'";
    $resultaat = $conn->query($vraag);
    
    
    if($resultaat -> num_rows > 0){
        $rij = $resultaat->fetch_assoc();
        
        if($pass == $rij['Password']){
            echo ("ingelogd");
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $rij["klant_naam"];
            $_SESSION["Klantnr"] = $rij["Klantnr"];
            header("location: index.php");
        }
        else{
            echo "Wrong Pass";
        }
    }
    else {
        echo "account doesn't exist";
    }
}

if(isset($_POST["btn-login"])){
    $vraag2 = "SELECT * FROM medewerker WHERE mw_email ='$email'";
    $resultaat2 = $conn->query($vraag2);
    
    
    if($resultaat2 -> num_rows > 0){
        $rij = $resultaat2->fetch_assoc();
        
        if($pass == $rij['Password']){
            echo ("ingelogd");
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $rij["mw_naam"];
            $_SESSION["mwnr"] = $rij["mwnr"];
            header("location: index.php");
        }
        else{
            echo "Wrong Pass";
        }
    }
    else {
        echo "account doesn't exist";
    }
}


?>
