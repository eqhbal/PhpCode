<?php
session_start();

include("dbconnection.php");

$menunr = $_POST['menunr'];
$voorgerecht = $_POST['voorgerecht'];
$nagerecht = $_POST['nagerecht'];
$hoofdgerecht = $_POST['hoofdgerecht'];
$dessert = $_POST['dessert'];

if(isset($_POST["btn-delete"])){
    
    $vraag = "DELETE FROM menu WHERE menunr = $menunr";
    $resultaat = $conn->query($vraag);
    
        if($resultaat == true){
                ?>
                <script type="text/javascript">
                    alert('Succesvol uit de menu gezet!');
                    window.location.replace('menubeheren.php');
                </script>
            <?php
        }
        else{
                    echo "niet gelukt";
                }
    
}

    
if(isset($_POST['btn-edit'])){
    $vraag = "UPDATE menu SET voorgerecht, nagerecht, hoofdgerecht, dessert = '$voorgerecht', '$nagerecht', '$hoofdgerecht', '$dessert' WHERE menunr = '$menunr'"; 
    $resultaat = $resultaat = $conn -> query($vraag);
    
        if($resultaat == true){
            echo "gelukt!";
        }
        else{
            echo "helaas pindakaas";
        }
    
        
}


?>