<?php
$servernaam = "localhost";
$gebruiker = "root";
$wachtwoord = "";
$databasenaam = "bontemps";


// Connectie maken
$conn = new mysqli($servernaam, $gebruiker, $wachtwoord, $databasenaam);

// Connectie controleren = optioneel
if ($conn->connect_error){
   // Foutmelding geven
   die( "Fout:".$conn->connect_error);
}

?>
