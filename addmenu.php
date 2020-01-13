<?php
session_start();

include("dbconnection.php");

$voorgerecht = $_POST['voorgerecht'];
$nagerecht = $_POST['nagerecht'];
$hoofdgerecht = $_POST['hoofdgerecht'];
$dessert = $_POST['dessert'];

if(isset($_POST["btn-add"])){
    

        $vraag = "INSERT INTO menu(voorgerecht, nagerecht, hoofdgerecht, dessert) VALUES('$voorgerecht', '$nagerecht', '$hoofdgerecht', '$dessert')";    
        $resultaat = $conn -> query($vraag);

            if($resultaat == true){
                ?>
                <script type="text/javascript">
                    alert('Succesvol in de menu gezet!');
                    window.location.replace('menubeheren.php');
                </script>
            <?php
            }
            else{
                echo "niet gelukt";
            }
    }

?>