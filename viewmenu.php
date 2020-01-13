<?php

$vraag = "SELECT * FROM menu";
$resultaat = $conn->query($vraag);

    if($resultaat ->num_rows> 0){
        while($rij = $resultaat->fetch_assoc()){
            
        }
    }


?>