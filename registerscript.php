<?php
session_start();

include("dbconnection.php");


$rusername = $_POST['register-username'];
$remail = $_POST['register-email'];
$rpassword = $_POST['register-pass'];
$rpostcode = $_POST['register-postcode'];
$rhuisnummer = $_POST['register-huisnr'];
$geboortedatum = $_POST['register-bdaymonth'];

if(isset($_POST["btn-signup"])){
    
    $vraag = "SELECT * FROM klant WHERE klant_email = '$remail'";
    $resultaat = $conn -> query($vraag);
    

    if($resultaat->num_rows > 0){
        echo "bestaat al!";
    }
    else{
        $vraag = "INSERT INTO klant(klant_naam, klant_email, Password, Postcode, Huisnr, geboortedatum) VALUES('$rusername', '$remail', '$rpassword', '$rpostcode', '$rhuisnummer', '$geboortedatum')";
        $resultaat = $conn -> query($vraag);
        
        
        if($resultaat == true){
            echo "succesvol geregistreerd!";
        }
        else{
            echo "niet gelukt";
        }
    }
}


?>